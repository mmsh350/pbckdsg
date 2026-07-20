<?php
namespace App\Livewire\Admin\Pages;
use App\Models\Page;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component {
    use WithFileUploads;

    public ?Page $page = null;
    public $title, $slug, $content, $featured_image;

    public function mount(Page $page = null) {
        if ($page && $page->exists) {
            $this->page = $page;
            $this->title = $page->title;
            $this->slug = $page->slug;
            $this->content = $page->content;
            $this->featured_image = $page->featured_image;
        }
    }

    public function save() {
        $this->validate([
            'title' => 'required',
            'slug' => 'required',
            'content' => 'nullable',
            'featured_image' => 'nullable|image|max:2048'
        ]);

        $imagePath = $this->page ? $this->page->featured_image : null;

        if (is_object($this->featured_image)) {
            $imagePath = $this->featured_image->store('pages', 'public');
        }

        $data = [
            'title' => $this->title,
            'slug' => \Illuminate\Support\Str::slug($this->title),
            'content' => $this->content,
            'featured_image' => $imagePath
        ];

        if ($this->page && $this->page->exists) {
            $this->page->update($data);
        } else {
            Page::create($data);
        }

        session()->flash("message", "Saved successfully.");
        return $this->redirectRoute("admin.pages.index", navigate: true);
    }

    public function render() { 
        return view("livewire.admin.pages.form")->layout("layouts.app"); 
    }
}