<?php

namespace App\Services;

use App\Models\Setting;
use App\Models\Subscriber;
use App\Models\News;
use App\Models\Document;
use App\Mail\NewArticlePublished;
use App\Mail\NewDocumentPublished;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class SubscriberAlertService
{
    public static function isAlertsEnabled(): bool
    {
        return (bool) Setting::get('send_subscriber_alerts', 1);
    }

    public static function notifyNewArticle(News $news)
    {
        if (!self::isAlertsEnabled() || !$news->is_published) {
            return;
        }

        $subscribers = Subscriber::where('is_active', true)->get();
        foreach ($subscribers as $subscriber) {
            try {
                Mail::to($subscriber->email)->queue(new NewArticlePublished($news, $subscriber));
            } catch (\Throwable $e) {
                Log::error("Failed to queue article alert for {$subscriber->email}: " . $e->getMessage());
            }
        }
    }

    public static function notifyNewDocument(Document $document)
    {
        if (!self::isAlertsEnabled() || !$document->is_published) {
            return;
        }

        $subscribers = Subscriber::where('is_active', true)->get();
        foreach ($subscribers as $subscriber) {
            try {
                Mail::to($subscriber->email)->queue(new NewDocumentPublished($document, $subscriber));
            } catch (\Throwable $e) {
                Log::error("Failed to queue document alert for {$subscriber->email}: " . $e->getMessage());
            }
        }
    }
}
