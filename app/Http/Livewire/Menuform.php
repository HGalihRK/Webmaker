<?php

namespace App\Http\Livewire;
use App\Models\Page;

use App\Models\Menu;
use Livewire\Component;

class Menuform extends Component
{
    public $modal = false;
    public $custom;
    public $menus;
    public $pages;
    public $select_menu;
    public $page_url;
    public $title;
    public $parent_menu_id;
    public $order_no;

    public function render()
    {
        return view('livewire.menuform');
    }

    public function mount(){
        $this->menus = Menu::orderBy('order_no')->get();
        $this->pages = Page::all();
    }
    public function openModal()
    {
        $this->mount();
        $this->modal = true;
        $this->page_url = '';
        $this->order_no = 9999;
        $this->title = '';
        $this->custom = '';
        $this->parent_menu_id = null;
        $this->select_menu = null;
    }
    #close modal
    public function closeModal()
    {
        $this->modal = false;
    }

    #save data
    public function saveModal()
    {
        if($this->parent_menu_id == "No Parent"){
            $this->parent_menu_id = null;
        }
        if($this->select_menu){
            $this->select_menu->update([
                'page_url' => $this->page_url,
                'title' => $this->title,
                'parent_menu_id' => $this->parent_menu_id,
                'order_no' => $this->order_no,
            ]);
            $this->modal = false;
            $this->mount();
            return;
        }
        Menu::create([
            'page_url' => $this->page_url,
            'title' => $this->title,
            'parent_menu_id' => $this->parent_menu_id,
            'order_no' => $this->order_no,
        ]);
        $this->modal = false;
        $this->mount();
    }

    #menu delete and its child
    public function delete($id)
    {
        $menu = Menu::find($id);
        foreach($menu->children as $child){
            $child->delete();
        }
        $menu->delete();
        $this->mount();
        $this->menus = Menu::all();
        return redirect(route('dashboard'));
    }

    public function edit($id){
        $this->modal = true;
        $this->select_menu = Menu::find($id);
        $this->custom = $this->select_menu->page_url;
        $this->page_url = $this->select_menu->page_url;
        $this->title = $this->select_menu->title;
        $this->parent_menu_id = $this->select_menu->parent_menu_id;
        $this->order_no = $this->select_menu->order_no;
    }
}
