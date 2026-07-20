<?php
namespace App\Livewire\Admin\Pages;
use App\Models\Page;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component {
    use WithPagination;
    public $search = "";
    
    public function delete(Page $page) { 
        $page->delete(); 
        session()->flash("message", "Deleted successfully."); 
    }
    
    public function render() { 
        return view("livewire.admin.pages.index", [
            "items" => Page::latest()->paginate(10)
        ])->layout("layouts.app"); 
    }
}