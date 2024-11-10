<?php

namespace App\Livewire;

use App\Models\CatEvent;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class EventManager extends Component
{
    use WithFileUploads;

    public $title, $slug, $content, $thumbnail, $cat_event_id;
    public $isEditing = false;
    public $eventId;

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'thumbnail' => $this->isEditing ? 'nullable' : 'required|image|max:1024', // Condition pour l'ajout uniquement
            'cat_event_id' => 'required|exists:cat_events,id',
        ];
    }

    public function resetForm()
    {
        $this->title = '';
        $this->slug = '';
        $this->content = '';
        $this->thumbnail = null;
        $this->cat_event_id = null;
        $this->isEditing = false;
        $this->eventId = null;
    }

    public function add()
    {

        $this->validate();
        try {
            $thumbnailPath = $this->thumbnail ? $this->thumbnail->store('thumbnails', 'public') : null;

            $new = Event::create([
                'title' => $this->title,
                'slug' =>$this->generateUniqueSlug($this->title),
                'content' => $this->content,
                'thumbnail' => $thumbnailPath,
                'cat_event_id' => $this->cat_event_id,
                'user_id' => null
            ]);


            $this->dispatch('swal',
                title : 'Création réussie',
                text : 'L\'événement a été créé avec succès !',
                icon : 'success',
                iconColor : '#3085d6',
            );

            $this->resetForm();
            $this->dispatch('close-modal');

        } catch (\Exception $e) {
            session()->flash('status', 'error');
            session()->flash('message', 'Une erreur est survenue lors de la création de l\'événement.');
            $this->dispatch('swal',
                title : 'Erreur',
                text : 'Une erreur est survenue lors de la création de l\'événement. Veuillez réessayer.',
                icon : 'error',
                iconColor : '#d33',
            );
        }
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        $this->eventId = $event->id;
        $this->title = $event->title;
        $this->slug = $event->slug;
        $this->content = $event->content;
        $this->thumbnail = $event->thumbnail;
        $this->cat_event_id = $event->cat_event_id;
        $this->isEditing = true;
    }

    public function update()
    {
        $this->validate();

        try {
            $event = Event::findOrFail($this->eventId);



            if ($this->thumbnail instanceof \Illuminate\Http\UploadedFile) {
                // Delete the old image if it exists
                if ($event->thumbnail) {
                    Storage::disk('public')->delete($event->thumbnail);
                }
                // Store the new image
                $event->thumbnail = $this->thumbnail->store('thumbnails', 'public');
            }


            if($this->slug != null)
            {
                $slug = $this->generateUniqueSlug($this->slug,$this->eventId) ;
            }
            else
            {
                $slug = $this->generateUniqueSlug($this->title,$this->eventId) ;
            }


            $event->update([
                'title' => $this->title,
                'slug' => $slug,
                'content' => $this->content,
                'cat_event_id' => $this->cat_event_id,
            ]);

            session()->flash('status', 'success');
            session()->flash('message', 'Mise à jour réussie');
            $this->dispatch('swal',
                title : 'Mise à jour réussie',
                text : 'L\'événement a été mis à jour avec succès !',
                icon : 'success',
                iconColor : '#3085d6',
            );

            $this->resetForm();
            $this->dispatch('close-modal');

        } catch (\Exception $e) {
            session()->flash('status', 'error');
            session()->flash('message', 'Une erreur est survenue lors de la mise à jour de l\'événement.');
            $this->dispatch('swal', [
                'title' => 'Erreur',
                'text' => 'Une erreur est survenue lors de la mise à jour de l\'événement. Veuillez réessayer.',
                'icon' => 'error',
                'iconColor' => '#d33',
            ]);
        }
    }

    public function delete($id)
    {
        try {
            $event = Event::findOrFail($id);

            if ($event->thumbnail) {
                Storage::disk('public')->delete($event->thumbnail);
            }

            $event->delete();

            session()->flash('status', 'success');
            session()->flash('message', 'Suppression réussie');
            $this->dispatch('swal',
                title : 'Suppression réussie',
                text : 'L\'événement a été supprimé avec succès !',
                icon : 'success',
                iconColor : '#3085d6',
            );

        } catch (\Exception $e) {
            session()->flash('status', 'error');
            session()->flash('message', 'Une erreur est survenue lors de la suppression de l\'événement.');
            $this->dispatch('swal',
                title : 'Erreur',
                text : 'Une erreur est survenue lors de la suppression de l\'événement. Veuillez réessayer.',
                icon : 'error',
                iconColor : '#d33',
            );
        }
    }

    public function render()
    {

        $events = Event::all();
        $cat_events = CatEvent::all() ;

        return view('livewire.event-manager', [
            'events' => $events ,
            'cat_events' => $cat_events,
        ]);
    }

    private function generateUniqueSlug($title, $catid=null)
    {
        if($catid)
        {
            $slug = Str::slug($title);
            $originalSlug = $slug;

            // Cherche un slug unique
            $count = 1;
            while(Event::where('slug', $slug)->where('id','!=', $catid)->exists())
            {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            return $slug;
        }
        else
        {
            $slug = Str::slug($title);
            $originalSlug = $slug;

            // Cherche un slug unique
            $count = 1;
            while(Event::where('slug', $slug)->exists())
            {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            return $slug;
        }
    }
}
