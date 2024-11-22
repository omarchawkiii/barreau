<?php

namespace App\Livewire;

use App\Models\CatNews;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class NewsManager extends Component
{
    use WithFileUploads;

    public $title, $slug, $content, $thumbnail, $cat_news_id;
    public $isEditing = false;
    public $newsId;
    public ?News $news = null;


    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'thumbnail' => $this->isEditing ? 'nullable' : 'required|image|max:1024', // Condition pour l'ajout uniquement
            'cat_news_id' => 'required|exists:cat_news,id',
        ];
    }

    public function resetForm()
    {
        $this->title = '';
        $this->slug = '';
        $this->content = '';
        $this->thumbnail = null;
        $this->cat_news_id = null;
        $this->isEditing = false;
        $this->newsId = null;
    }

    public function add()
    {
        try{
            $this->validate();
            $thumbnailPath = $this->thumbnail ? $this->thumbnail->store('thumbnails', 'public') : null;

            $new = News::create([
                'title' => $this->title,
                'slug' =>$this->generateUniqueSlug($this->title),
                'content' => $this->content,
                'thumbnail' => $thumbnailPath,
                'cat_news_id' => $this->cat_news_id,
                'user_id' => null
            ]);


            $this->dispatch('swal',
                title : 'Création réussie',
                text : 'L\'événement a été créé avec succès !',
                icon : 'success',
                iconColor : '#3085d6',
            );

            $this->dispatch('refreshDatatable');
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
        $news = News::findOrFail($id);
        $this->newsId = $news->id;
        $this->title = $news->title;
        $this->slug = $news->slug;
        $this->content = $news->content;
        $this->thumbnail = $news->thumbnail;
        $this->cat_news_id = $news->cat_news_id;
        $this->isEditing = true;
        $this->dispatch('edit', news_data : $news);

    }

    public function view($id)
    {
        $news = News::findOrFail($id);
        $this->news = $news;
    }

    public function update()
    {
        $this->validate();

        try {
            $news = News::findOrFail($this->newsId);

            if ($this->thumbnail instanceof \Illuminate\Http\UploadedFile) {
                // Delete the old image if it exists
                if ($news->thumbnail) {
                    Storage::disk('public')->delete($news->thumbnail);
                }
                // Store the new image
                $news->thumbnail = $this->thumbnail->store('thumbnails', 'public');
            }

            if($this->slug != null)
            {
                $slug = $this->generateUniqueSlug($this->slug,$this->newsId) ;
            }
            else
            {
                $slug = $this->generateUniqueSlug($this->title,$this->newsId) ;
            }


            $news->update([
                'title' => $this->title,
                'slug' => $slug,
                'content' => $this->content,
                'cat_news_id' => $this->cat_news_id,
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
            $this->dispatch('refreshDatatable');

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
            $news = News::findOrFail($id);

            if ($news->thumbnail) {
                Storage::disk('public')->delete($news->thumbnail);
            }

            $news->delete();

            session()->flash('status', 'success');
            session()->flash('message', 'Suppression réussie');
            $this->dispatch('refreshDatatable');
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

        $newses = News::all();
        $cat_newses = CatNews::all() ;

        return view('livewire.news-manager', [
            'newses' => $newses ,
            'cat_newses' => $cat_newses,
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
            while(News::where('slug', $slug)->where('id','!=', $catid)->exists())
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
            while(News::where('slug', $slug)->exists())
            {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            return $slug;
        }
    }


}
