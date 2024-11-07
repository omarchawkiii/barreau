<?php

namespace App\Livewire;

use App\Models\CatNews;
use Livewire\Component;
use Illuminate\Support\Str;
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
        $this->validate();
        CatNews::create([
            'title' => $this->title,
            'slug' =>$this->generateUniqueSlug($this->title),
            ]

        );
        $this->resetForm();
        $this->loadCatNews();
        session()->flash('message', 'Catégorie ajoutée avec succès.');
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


        $this->validate();
        $catNews = CatNews::findOrFail($this->catNewsId);
        $catNews->update(['title' => $this->title,'slug' => $this->slug]);
        $this->resetForm();
        $this->loadCatNews();
        session()->flash('message', 'Catégorie mise à jour avec succès.');
    }

    public function delete($id)
    {
        CatNews::findOrFail($id)->delete();
        $this->loadCatNews();
        session()->flash('message', 'Catégorie supprimée avec succès.');
    }




    public function render()
    {
        return view('livewire.cat-news-manager');
    }


    private function generateUniqueSlug($title)
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
