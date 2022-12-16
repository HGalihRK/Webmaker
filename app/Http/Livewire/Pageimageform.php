<?php

namespace App\Http\Livewire;

use App\Models\Page;
use App\Models\PageImage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Pageimageform extends Component
{
    use WithFileUploads;

    public $modal;
    public $image;
    public $caption;
    public $mainpage;
    public $page;

    public function render()
    {
        return view('livewire.pageimageform');
    }

    public function mount($id)
    {
        $this->page = Page::find($id);
        $this->modal = false;
        $this->caption = '';
        $this->mainpage = false;
        $this->images = PageImage::where('page_id', $id)->get();
    }

    public function saveModal()
    {

        #save image to storage
        PageImage::create([
            'page_id' => $this->page->id,
            'url' => basename($this->image->store('public')),
            'is_landing_page' => $this->mainpage,
            'caption' => $this->caption,
        ]);
        $this->modal = false;
        $this->mount($this->page->id);
    }

    public function openModal()
    {

        $this->modal = true;
    }

    public function deleteImage($id)
    {
        $image = PageImage::find($id);
        $image->delete();
        $this->mount($this->page->id);
    }
    public function closeModal()
    {
        $this->modal = false;
    }
}
