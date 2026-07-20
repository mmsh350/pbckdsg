<?php

namespace App\Livewire\Admin\News;

use App\Models\News;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search = '';

    public function delete(News $news)
    {
        $news->delete();
        session()->flash('message', 'News deleted successfully.');
    }

    public function togglePublish(News $news)
    {
        $news->update(['is_published' => !$news->is_published]);
        session()->flash('message', 'Status updated successfully.');
    }

    public function render()
    {
        return view('livewire.admin.news.index', [
            'newsItems' => News::where('title', 'like', '%'.$this->search.'%')
                               ->latest()
                               ->paginate(10)
        ])->layout('layouts.app');
    }
}
