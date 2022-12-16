<?php

namespace App\Http\Livewire;

use App\Models\Page;
use Livewire\Component;

class Pageeditform extends Component
{
    public $content;
    public function render()
    {
        return view('livewire.pageeditform');
    }
    public function mount($id){
        $this->page = Page::find($id);
        $this->title = $this->page->title;
        $this->content = $this->page->content;
        $this->subtitle = $this->page->subtitle;
        $this->is_hidden = $this->page->is_hidden;
        $this->order_number = $this->page->order_number;

    }

    public function savePage(){
        $this->page->title = $this->title;
        $this->page->content = $this->content;
        $this->page->subtitle = $this->subtitle;
        $this->page->is_hidden = $this->is_hidden;
        $this->page->order_number = $this->order_number;
        $this->page->save();
    }

    public function deletePage($id){
        $page = Page::find($id);
        $page->delete();
        return redirect(route('dashboard'));
    }
}
