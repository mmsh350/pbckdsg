<?php
namespace App\Livewire\Admin\Documents;
use App\Models\Document;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component {
    use WithPagination;
    public $search = "";
    
    public function delete(Document $document) { 
        $document->delete(); 
        session()->flash("message", "Deleted successfully."); 
    }
    
    public function togglePublish(Document $document) {
        $document->update(['is_published' => !$document->is_published]);
        session()->flash("message", "Status updated successfully.");
    }
    
    public function render() { 
        return view("livewire.admin.documents.index", [
            "items" => Document::where('title', 'like', '%' . $this->search . '%')
                       ->latest()
                       ->paginate(10)
        ])->layout("layouts.app"); 
    }
}