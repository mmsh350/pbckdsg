<?php
namespace App\Livewire\Admin\Documents;

use App\Models\Document;
use App\Models\Setting;
use App\Services\SubscriberAlertService;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Carbon\Carbon;

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

        $baseSlug = Str::slug($this->title);
        $slugCheck = Document::where('slug', $baseSlug);
        if ($this->document && $this->document->exists) {
            $slugCheck->where('id', '!=', $this->document->id);
        }
        if ($slugCheck->exists()) {
            $baseSlug .= '-' . uniqid();
        }

        $data = [
            'title' => $this->title,
            'slug' => $baseSlug,
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

        $syncDates = (bool) Setting::get('sync_document_dates', 0);
        $wasPublishedBefore = $this->document && $this->document->exists ? $this->document->is_published : false;

        if ($this->document && $this->document->exists) {
            $this->document->fill($data);
            if ($syncDates && $this->published_at) {
                $customDate = Carbon::parse($this->published_at);
                $this->document->created_at = $customDate;
                $this->document->updated_at = $customDate;
                $this->document->timestamps = false;
            }
            $this->document->save();
            $docRecord = $this->document;
        } else {
            $docRecord = new Document($data);
            if ($syncDates && $this->published_at) {
                $customDate = Carbon::parse($this->published_at);
                $docRecord->created_at = $customDate;
                $docRecord->updated_at = $customDate;
                $docRecord->timestamps = false;
            }
            $docRecord->save();
        }

        // Send automated broadcast alert to subscribers if newly published
        if ($docRecord->is_published && !$wasPublishedBefore) {
            SubscriberAlertService::notifyNewDocument($docRecord);
        }

        session()->flash("message", "Saved successfully.");
        return $this->redirectRoute("admin.documents.index", navigate: true);
    }

    public function render() { 
        return view("livewire.admin.documents.form")->layout("layouts.app"); 
    }
}