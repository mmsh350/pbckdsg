<?php
namespace App\Livewire\Admin\Leadership;
use App\Models\Leadership;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component {
    use WithPagination;
    public $search = "";
    
    public function delete(Leadership $leadership) { 
        $leadership->delete(); 
        session()->flash("message", "Deleted successfully."); 
    }
    
    public function render() { 
        return view("livewire.admin.leadership.index", [
            "items" => Leadership::latest()->paginate(10)
        ])->layout("layouts.app"); 
    }
}