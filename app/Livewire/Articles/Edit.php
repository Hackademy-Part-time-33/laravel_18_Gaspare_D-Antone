<?php

namespace App\Livewire\Articles;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Edit extends Component
{
    public $article;
    
    #[Validate('required|string')] 
    public $title;
    #[Validate('required')]
    public $subtitle;
    #[Validate('required|min:10')]
    public $content;


    public function mount(){

        $this->title = $this->article->title;
        $this->subtitle = $this->article->subtitle;
        $this->content = $this->article->content;
    }

    public function update(){
        $this->validate();

        $this->article->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'content' => $this->content,
        ]);

        session()->flash('status', 'Articolo aggiornato con successo');
        
    }



    public function render()
    {
        return view('livewire.articles.edit');
    }
}
