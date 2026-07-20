<?php
namespace App\Livewire\Admin\Departments;
use App\Models\Department;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component {
    use WithPagination;
    public $search = "";
    
    public function delete(Department $department) { 
        $department->delete(); 
        session()->flash("message", "Deleted successfully."); 
    }
    
    public function render() { 
        return view("livewire.admin.departments.index", [
            "items" => Department::latest()->paginate(10)
        ])->layout("layouts.app"); 
    }
}