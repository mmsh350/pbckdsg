<?php

namespace App\Mail;

use App\Models\News;
use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewArticlePublished extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    public News $news;
    public Subscriber $subscriber;

    /**
     * Create a new message instance.
     */
    public function __construct(News $news, Subscriber $subscriber)
    {
        $this->news = $news;
        $this->subscriber = $subscriber;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Publication: ' . $this->news->title,
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.new-article-published',
        );
    }
}
