<?php

namespace App\Livewire\Front;

use App\Models\News;
use App\Models\CatNews;
use Livewire\Component;
use Livewire\WithPagination;

class NewsFilter extends Component
{
    use WithPagination;
    public $categories;
    public $selectedCategory = null; // Holds the selected category

    public function mount()
    {
        $this->categories = CatNews::all(); // Fetch all categories
    }

    public function updatedSelectedCategory()
    {
        $this->resetPage();
    }

    public function render()
    {
        $newsQuery = News::query();

        if ($this->selectedCategory) {
            $newsQuery->where('cat_news_id', $this->selectedCategory);
        }

        $news = $newsQuery->paginate(9);

        return view('livewire.front.news-filter', [
            'news' => $news,
        ]);
    }
}
