<?php

namespace App\Livewire\Frontend;

use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use App\Models\Document;

#[Layout('layouts.frontend')]
class Downloads extends Component
{
    use WithPagination;

    public $search = '';
    public $category = '';
    public $sort_by = 'created_at';
    public $direction = 'desc';

    public function paginationView()
    {
        return 'livewire.frontend.downloads-pagination';
    }

    protected $queryString = [
        'search' => ['except' => ''],
        'category' => ['except' => ''],
        'sort_by' => ['except' => 'created_at'],
        'direction' => ['except' => 'desc'],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingSortBy()
    {
        $this->resetPage();
    }

    public function updatingDirection()
    {
        $this->resetPage();
    }

    public function updatingCategory()
    {
        $this->resetPage();
    }

    public function clearFilters()
    {
        $this->reset(['search', 'category', 'sort_by', 'direction']);
        $this->resetPage();
    }

    public function render()
    {
        $query = Document::where('is_published', true);

        if (!empty($this->search)) {
            $query->where('title', 'like', '%' . $this->search . '%');
        }

        if (!empty($this->category)) {
            $query->where('category', $this->category);
        }

        $allowedSorts = ['published_at', 'title', 'updated_at', 'download_count', 'created_at'];
        $sortBy = in_array($this->sort_by, $allowedSorts) ? $this->sort_by : 'created_at';
        $direction = $this->direction === 'asc' ? 'asc' : 'desc';

        $documents = $query->orderBy($sortBy, $direction)->paginate(12);

        $categories = Document::where('is_published', true)->whereNotNull('category')->distinct()->pluck('category');

        return view('livewire.frontend.downloads', [
            'documents' => $documents,
            'categories' => $categories
        ]);
    }
}
