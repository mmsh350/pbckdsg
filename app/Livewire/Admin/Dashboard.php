<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $stats = [
            'news' => \App\Models\News::count(),
            'documents' => \App\Models\Document::count(),
            'downloads' => \App\Models\Document::sum('download_count') ?? 0,
            'subscribers' => \App\Models\Subscriber::count(),
            'contacts' => \App\Models\Contact::count(),
            'departments' => \App\Models\Department::count(),
            'sliders' => \App\Models\Slider::count(),
        ];

        $recentContacts = \App\Models\Contact::latest()->take(5)->get();
        $recentNews = \App\Models\News::latest()->take(4)->get();

        $systemStatus = [
            'bot_protection' => true,
            'mail_routing' => (bool) \App\Models\Setting::get('send_mail_to_primary', 1) || (bool) \App\Models\Setting::get('send_mail_to_secondary', 1),
            'primary_email' => \App\Models\Setting::get('contact_primary_email', 'info@pbc.kdsg.gov.ng'),
        ];

        $months = collect(range(5, 0))->map(function($i) {
            return now()->subMonths($i)->format('M Y');
        });

        $newsCounts = collect(range(5, 0))->map(function($i) {
            return \App\Models\News::whereMonth('created_at', now()->subMonths($i)->month)
                                   ->whereYear('created_at', now()->subMonths($i)->year)
                                   ->count();
        });

        $chartData = [
            'labels' => $months->toArray(),
            'data' => $newsCounts->toArray(),
        ];

        return view('livewire.admin.dashboard', compact('stats', 'chartData', 'recentContacts', 'recentNews', 'systemStatus'))->layout('layouts.app');
    }
}
