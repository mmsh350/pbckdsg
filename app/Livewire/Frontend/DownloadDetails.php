<?php

namespace App\Livewire\Frontend;

use App\Models\Document;
use Livewire\Component;

class DownloadDetails extends Component
{
    public Document $document;

    public function mount(Document $document)
    {
        if (!$document->is_published) {
            abort(404);
        }
        $this->document = $document;
    }

    public function render()
    {
        return view('livewire.frontend.download-details')
            ->extends('layouts.frontend')
            ->section('content');
    }
}
