<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    public function logout(Logout $logout): void
    {
        $logout();
        $this->redirect('/portal/login', navigate: false);
    }
}; ?>

<div class="flex shrink-0 z-50 relative lg:w-64">
    <!-- Mobile Off-Canvas Sidebar -->
    <div x-show="sidebarOpen" class="fixed inset-0 z-40 flex lg:hidden" style="display: none;" aria-modal="true">
        <div x-show="sidebarOpen" x-transition.opacity class="fixed inset-0 bg-slate-900/80 backdrop-blur-sm" @click="sidebarOpen = false"></div>
        <div x-show="sidebarOpen" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="relative flex-1 flex flex-col max-w-xs w-full bg-slate-900 sidebar-scroll">
            <div class="absolute top-0 right-0 -mr-12 pt-2">
                <button @click="sidebarOpen = false" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                    <svg class="h-6 w-6 text-white" stroke="currentColor" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>
            <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                <div class="flex-shrink-0 flex items-center px-6">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center">
                        <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="PBC Admin" class="h-10 w-auto">
                    </a>
                </div>
                <nav class="mt-8 px-4 space-y-2">
                    <x-sidebar-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')" icon="home">Dashboard</x-sidebar-nav-link>
                    <x-sidebar-nav-link :href="route('admin.news.index')" :active="request()->routeIs('admin.news.*')" icon="newspaper">News</x-sidebar-nav-link>
                    <x-sidebar-nav-link :href="route('admin.documents.index')" :active="request()->routeIs('admin.documents.*')" icon="document-text">Documents</x-sidebar-nav-link>

                    <x-sidebar-nav-link :href="route('admin.sliders.index')" :active="request()->routeIs('admin.sliders.*')" icon="photograph">Sliders</x-sidebar-nav-link>
                    <x-sidebar-nav-link :href="route('admin.settings.index')" :active="request()->routeIs('admin.settings.*')" icon="cog">Settings</x-sidebar-nav-link>
                </nav>
            </div>
            <!-- Mobile User Profile -->
            <div class="flex-shrink-0 flex bg-slate-950 p-4">
                <div class="flex items-center w-full">
                    <div class="inline-block h-9 w-9 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">{{ substr(auth()->user()->name, 0, 1) }}</div>
                    <div class="ml-3 flex-1">
                        <p class="text-sm font-medium text-white">{{ auth()->user()->name }}</p>
                        <button wire:click="logout" class="text-xs font-medium text-slate-400 hover:text-white">Log Out</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Static Desktop Sidebar -->
    <div class="hidden lg:flex lg:flex-shrink-0 h-screen sticky top-0">
        <div class="flex flex-col w-64 bg-slate-900 border-r border-slate-800 sidebar-scroll">
            <div class="flex-1 flex flex-col pt-6 pb-4 overflow-y-auto">
                <div class="flex items-center flex-shrink-0 px-6">
                    <a href="{{ route('admin.dashboard') }}" class="flex items-center">
                        <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="PBC Admin" class="h-10 w-auto">
                    </a>
                </div>
                <nav class="mt-8 flex-1 px-4 space-y-2">
                    <x-sidebar-nav-link :href="route('admin.dashboard')" :active="request()->routeIs('admin.dashboard')" icon="home">Dashboard</x-sidebar-nav-link>
                    <x-sidebar-nav-link :href="route('admin.news.index')" :active="request()->routeIs('admin.news.*')" icon="newspaper">News</x-sidebar-nav-link>
                    <x-sidebar-nav-link :href="route('admin.documents.index')" :active="request()->routeIs('admin.documents.*')" icon="document-text">Documents</x-sidebar-nav-link>

                    <x-sidebar-nav-link :href="route('admin.sliders.index')" :active="request()->routeIs('admin.sliders.*')" icon="photograph">Sliders</x-sidebar-nav-link>
                    <x-sidebar-nav-link :href="route('admin.settings.index')" :active="request()->routeIs('admin.settings.*')" icon="cog">Settings</x-sidebar-nav-link>
                </nav>
            </div>
            <!-- Desktop User Profile -->
            <div class="flex-shrink-0 flex bg-slate-950 p-4">
                <div class="w-full relative" x-data="{ userMenuOpen: false }">
                    <button @click="userMenuOpen = !userMenuOpen" @click.away="userMenuOpen = false" class="w-full flex items-center justify-between group">
                        <div class="flex items-center">
                            <div class="inline-block h-9 w-9 rounded-full bg-blue-600 flex items-center justify-center text-white font-bold">{{ substr(auth()->user()->name, 0, 1) }}</div>
                            <div class="ml-3 text-left hidden xl:block">
                                <p class="text-sm font-medium text-white truncate w-32" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"></p>
                                <p class="text-xs font-medium text-slate-400 group-hover:text-white">Admin</p>
                            </div>
                        </div>
                        <svg class="h-5 w-5 text-slate-400 group-hover:text-white hidden xl:block" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                    </button>
                    <!-- User Dropdown Menu -->
                    <div x-show="userMenuOpen" x-transition class="absolute bottom-12 right-0 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" style="display: none;">
                        <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" wire:navigate>Profile</a>
                        <button wire:click="logout" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Log Out</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Topbar Header -->
    <div class="absolute top-0 left-0 w-full lg:hidden flex flex-col z-30 pointer-events-none">
        <div class="flex-shrink-0 flex h-16 bg-white/90 backdrop-blur-md border-b border-gray-200 pointer-events-auto">
            <button @click="sidebarOpen = true" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500 lg:hidden">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
            </button>
            <div class="flex-1 px-4 flex items-center justify-between">
                <span class="text-lg font-bold text-slate-800">PBC Admin</span>
            </div>
        </div>
    </div>
</div>
