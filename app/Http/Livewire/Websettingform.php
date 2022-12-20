<?php

namespace App\Http\Livewire;

use App\Models\Websetting;
use Livewire\Component;
use Livewire\WithFileUploads;

class Websettingform extends Component
{
    use WithFileUploads;
    public $logo;
    public $home_content;
    public $banner;
    public function render()
    {
        return view('livewire.websettingform');
    }

    public function mount()
    {
        $this->websetting = Websetting::first();
        $this->logo_url = $this->websetting->logo_url;
        $this->page_title = $this->websetting->page_title;
        $this->tag = $this->websetting->tag;
        $this->email = $this->websetting->email;
        $this->google_map_url = $this->websetting->google_map_url;
        $this->logo_url = $this->websetting->logo_url;
        $this->home_content = $this->websetting->home_content;

        $this->footer_text = $this->websetting->footer_text;
        $this->banner_img_url = $this->websetting->banner_img_url;
    }
    public function save()
    {
        #take image and upload it to the public folder
        if ($this->logo) {
            $this->logo_url = basename($this->logo->store('public'));
        }
        if ($this->banner) {
            $this->banner_img_url = basename($this->banner->store('public'));
        }

        $this->websetting->update([
            'page_title' => $this->page_title,
            'tag' => $this->tag,
            'email' => $this->email,
            'google_map_url' => $this->google_map_url,
            'logo_url' => $this->logo_url,
            'footer_text' => $this->footer_text,
            'banner_img_url' => $this->banner_img_url,
            'home_content'=> $this->home_content
        ]);

        

        #return success if no error
        session()->flash('message', 'Websetting Updated Successfully.');
    }
}
