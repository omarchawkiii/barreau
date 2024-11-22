<?php

namespace App\Livewire;

use App\Models\CatNews;
use Livewire\Component;
use Illuminate\Support\Str;
use \Livewire\WithEvents;


class CatNewsManager extends Component
{

    public $catNews;
    public $title;
    public $slug;
    public $catNewsId;
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
        $this->loadCatNews();
    }

    public function loadCatNews()
    {
        $this->catNews = CatNews::all();
    }

    public function resetForm()
    {
        $this->title = '';
        $this->catNewsId = null;
        $this->isEditing = false;
    }

    public function add()
    {
        try {

            $this->validate();
            CatNews::create([
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
            $this->dispatch('refreshDatatable');
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
        $catNews = CatNews::findOrFail($id);
        $this->title = $catNews->title;
        $this->slug = $catNews->slug;
        $this->catNewsId = $catNews->id;
        $this->isEditing = true;
    }

    public function update()
    {

        if($this->slug != null)
        {
            $slug = $this->generateUniqueSlug($this->slug,$this->catNewsId) ;
        }
        else
        {
            $slug = $this->generateUniqueSlug($this->title,$this->catNewsId) ;
        }
        $this->validate();
        $catNews = CatNews::findOrFail($this->catNewsId);
        $catNews->update(['title' => $this->title,'slug' =>$slug]);
        $this->resetForm();
        $this->dispatch('swal',
            title : 'Modification réussie',
            text : 'La catégorie a été modifiée avec succès !.',
            icon:'success',
            iconColor:'blue',
        );
        $this->dispatch('close-modal');
        $this->dispatch('refreshDatatable');
        session()->flash('message', 'Catégorie mise à jour avec succès.');
    }

    public function delete($id)
    {
        CatNews::findOrFail($id)->delete();
        $this->dispatch('swal',
            title : 'Suppression réussie',
            text : 'La catégorie a été supprimée avec succès !.',
            icon:'success',
            iconColor:'blue',
        );
        session()->flash('message', 'Catégorie supprimée avec succès.');
        $this->dispatch('refreshDatatable');

    }

    public function render()
    {
        return view('livewire.cat-news-manager');
    }

    private function generateUniqueSlug($title, $catid=null)
    {
        if($catid)
        {
            $slug = Str::slug($title);
            $originalSlug = $slug;

            // Cherche un slug unique
            $count = 1;
            while(CatNews::where('slug', $slug)->where('id','!=', $catid)->exists())
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
            while(CatNews::where('slug', $slug)->exists())
            {
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            return $slug;
        }
    }
}
