<?php
namespace App\Livewire\Admin\Documents;
use App\Models\Document;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Form extends Component {
    use WithFileUploads;

    public ?Document $document = null;
    public $title, $category, $description, $file_path;
    public $is_published = true;
    public $published_at;

    public function mount(Document $document = null) {
        if ($document && $document->exists) {
            $this->document = $document;
            $this->title = $document->title;
            $this->category = $document->category;
            $this->description = $document->description;
            $this->file_path = $document->file_path;
            $this->is_published = $document->is_published;
            $this->published_at = $document->published_at ? $document->published_at->format('Y-m-d') : null;
        } else {
            $this->published_at = now()->format('Y-m-d');
        }
    }

    public function save() {
        $this->validate([
            'title' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'file_path' => $this->document ? 'nullable' : 'required|file|max:10240', // 10MB max
            'published_at' => 'nullable|date',
            'is_published' => 'boolean',
        ]);

        $data = [
            'title' => $this->title,
            'slug' => Str::slug($this->title),
            'category' => $this->category,
            'description' => $this->description,
            'is_published' => $this->is_published,
            'published_at' => $this->published_at,
        ];

        if (is_object($this->file_path)) {
            $data['file_path'] = $this->file_path->store('documents', 'public');
            $data['file_size'] = $this->file_path->getSize();
            $data['file_type'] = strtolower($this->file_path->getClientOriginalExtension());
        }

        if ($this->document && $this->document->exists) {
            $this->document->update($data);
        } else {
            Document::create($data);
        }

        session()->flash("message", "Saved successfully.");
        return $this->redirectRoute("admin.documents.index", navigate: true);
    }

    public function render() { 
        return view("livewire.admin.documents.form")->layout("layouts.app"); 
    }
}