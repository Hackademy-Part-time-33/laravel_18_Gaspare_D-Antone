<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    #[Validate('required|string')] 
    public $title;
    #[Validate('required')]
    public $subtitle;
    #[Validate('required|min:10')]
    public $content;

    public function store(){

        $this->validate();
      Article::create([
        'title' => $this->title,
        'subtitle' => $this->subtitle,
        'content' => $this->content

       ]);

       session()->flash('status', 'Articolo inserito con successo');
       return $this->redirect('/articles');
    }

    public function resetArticle()
    {
        $this->title = '';
        $this->subtitle = '';
        $this->content = '';
    }


    public function render()


    {
        return view('livewire.articles.create');
    }
}
