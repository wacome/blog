<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;
class ArticlesList extends Component
{
    use WithPagination;
    public function render()
    {
        $articles = Article::paginate(5);
        return view('livewire.articles-list', ['articles' => $articles]);
    }
}
