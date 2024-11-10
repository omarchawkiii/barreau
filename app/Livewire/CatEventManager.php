<?php

namespace App\Livewire;

use App\Models\CatEvent;
use App\Models\catEvents;
use Livewire\Component;
use Illuminate\Support\Str;
use \Livewire\WithEvents;


class CatEventManager extends Component
{

    public $catEvents;
    public $title;
    public $slug;
    public $catEventsId;
    public $isEditing = false;

    protected $rules = [
        'title' => 'required|string|max:255',
    ];

    public function placeholder()
    {
        return view('admin.placeholder.popup_placeholder');
    }
    public function mount()
    {
        $this->loadcatEvents();
    }

    public function loadcatEvents()
    {
        $this->catEvents = CatEvent::all();
    }

    public function resetForm()
    {
        $this->title = '';
        $this->catEventsId = null;
        $this->isEditing = false;
    }

    public function add()
    {
        try {

            $this->validate();
            CatEvent::create([
                'title' => $this->title,
                'slug' =>$this->generateUniqueSlug($this->title),
                ]
            );
            $this->resetForm();
            $this->dispatch('swal',
                title : 'Création réussie',
                text :'La catégorie a été créée avec succès !' ,
                icon:'success',
                iconColor:'blue',
            );
            $this->dispatch('close-modal');
            $this->loadcatEvents();
            session()->flash('message', 'Catégorie ajoutée avec succès.');
        }catch (\Exception $e) {
            // Gestion de l'erreur
            $this->dispatch('close-modal');
            $this->dispatch('swal',
                title : 'Erreur',
                text : 'Une erreur est survenue lors de la création de la catégorie. Veuillez réessayer.',
                icon : 'error',
                iconColor : '#d33',
            );
        }

    }

    public function edit($id)
    {
        $catEvents = CatEvent::findOrFail($id);
        $this->title = $catEvents->title;
        $this->slug = $catEvents->slug;
        $this->catEventsId = $catEvents->id;
        $this->isEditing = true;

    }

    public function update()
    {

        if($this->slug != null)
        {
            $slug = $this->generateUniqueSlug($this->slug,$this->catEventsId) ;
        }
        else
        {
            $slug = $this->generateUniqueSlug($this->title,$this->catEventsId) ;
        }
        $this->validate();
        $catEvents = CatEvent::findOrFail($this->catEventsId);
        $catEvents->update(['title' => $this->title,'slug' =>$slug]);
        $this->resetForm();
        $this->loadcatEvents();
        $this->dispatch('swal',
            title : 'Modification réussie',
            text : 'La catégorie a été modifiée avec succès !.',
            icon:'success',
            iconColor:'blue',
        );
        $this->dispatch('close-modal');
        session()->flash('message', 'Catégorie mise à jour avec succès.');
    }

    public function delete($id)
    {
        CatEvent::findOrFail($id)->delete();
        $this->loadcatEvents();
        $this->dispatch('swal',
            title : 'Suppression réussie',
            text : 'La catégorie a été supprimée avec succès !.',
            icon:'success',
            iconColor:'blue',
        );
        session()->flash('message', 'Catégorie supprimée avec succès.');
    }

    public function render()
    {
        return view('livewire.cat-event-manager');
    }

    private function generateUniqueSlug($title, $catid=null)
    {
        if($catid)
        {
            $slug = Str::slug($title);
            $originalSlug = $slug;

            // Cherche un slug unique
            $count = 1;
            while(CatEvent::where('slug', $slug)->where('id','!=', $catid)->exists())
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
            while(CatEvent::where('slug', $slug)->exists())
            {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            return $slug;
        }
    }
}
