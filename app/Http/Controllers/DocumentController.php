<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Increment download counter and serve file download stream.
     */
    public function download(Document $document)
    {
        $document->increment('download_count');
        $extension = pathinfo($document->file_path, PATHINFO_EXTENSION);
        $filename = Str::slug($document->title) . '.' . $extension;

        return Storage::disk('public')->download($document->file_path, $filename);
    }
}
