<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;

class Pageform extends Component
{
    public $title;
    public $modal = false;
    public function render()
    {
        return view('livewire.pageform');
    }
    public function mount(){
        $this->pages = Page::all();
    }

    public function closeModal(){
        $this->modal = false;
    }
    public function openModal(){
        $this->modal = true;
    }
    public function saveModal(){
        $this->validate([
            'title' => 'required',
        ]);
        $this->modal = false;
        $this->pages = Page::create([
            'title' => $this->title,
        ]);
        $this->mount();
    }
}
