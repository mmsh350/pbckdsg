<?php

namespace App\Mail;

use App\Models\Document;
use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewDocumentPublished extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public Document $document;
    public Subscriber $subscriber;

    /**
     * Create a new message instance.
     */
    public function __construct(Document $document, Subscriber $subscriber)
    {
        $this->document = $document;
        $this->subscriber = $subscriber;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Official Document Uploaded: ' . $this->document->title,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.new-document-published',
        );
    }
}
