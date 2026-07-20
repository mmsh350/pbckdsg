<?php

namespace App\Livewire\Admin\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class Form extends Component
{
    use WithFileUploads;

    public ?News $news = null;

    public $title;
    public $excerpt;
    public $content;
    public $featured_image;
    public $is_published = false;
    public $categories;
    public $published_at;

    protected function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string|max:500',
            'content' => 'required|string',
            'featured_image' => 'nullable|image|max:5120', // 5MB max
            'is_published' => 'boolean',
            'categories' => 'nullable|string|max:255',
            'published_at' => 'nullable|date',
        ];
    }

    public function mount(News $news = null)
    {
        if ($news && $news->exists) {
            $this->news = $news;
            $this->title = $news->title;
            $this->excerpt = $news->excerpt;
            $this->content = $news->content;
            $this->is_published = $news->is_published;
            $this->categories = $news->categories;
            $this->published_at = $news->published_at ? $news->published_at->format('Y-m-d') : null;
        } else {
            $this->published_at = now()->format('Y-m-d');
        }
    }

    public function save()
    {
        $this->validate();

        $data = [
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'is_published' => $this->is_published,
            'categories' => $this->categories,
            'published_at' => $this->published_at,
            'user_id' => auth()->id(),
        ];

        if (!$this->news || !$this->news->exists) {
            // New record: generate slug
            $data['slug'] = Str::slug($this->title) . '-' . uniqid();
        } else {
            // Update record: regenerate slug if title changed significantly (optional, but let's keep it simple)
            // Or just leave the old slug
            if ($this->title !== $this->news->title) {
                $data['slug'] = Str::slug($this->title) . '-' . uniqid();
            }
        }

        if ($this->featured_image) {
            $data['featured_image'] = $this->featured_image->store('news', 'public');
        }

        if ($this->news && $this->news->exists) {
            $this->news->update($data);
            session()->flash('message', 'News updated successfully.');
        } else {
            News::create($data);
            session()->flash('message', 'News created successfully.');
        }

        return $this->redirect(route('admin.news.index'), navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.news.form')->layout('layouts.app');
    }
}
