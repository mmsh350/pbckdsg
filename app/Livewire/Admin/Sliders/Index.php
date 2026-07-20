<?php
namespace App\Livewire\Admin\Sliders;
use App\Models\Slider;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component {
    use WithPagination;
    public $search = "";
    
    public function updateOrder(Slider $slider, $order) {
        $slider->update(['sort_order' => (int) $order]);
        session()->flash('message', 'Sort order updated successfully.');
    }

    public function toggleActive(Slider $slider) {
        $slider->update(['is_active' => !$slider->is_active]);
        session()->flash('message', 'Status updated successfully.');
    }

    public function delete(Slider $slider) { 
        $slider->delete(); 
        session()->flash("message", "Deleted successfully."); 
    }
    
    public function render() { 
        return view("livewire.admin.sliders.index", [
            "items" => Slider::orderBy('sort_order', 'asc')->paginate(10)
        ])->layout("layouts.app"); 
    }
}