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
            'departments' => \App\Models\Department::count(),
            'sliders' => \App\Models\Slider::count(),
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

        return view('livewire.admin.dashboard', compact('stats', 'chartData'))->layout('layouts.app');
    }
}
