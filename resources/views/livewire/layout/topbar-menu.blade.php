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

<div x-data="{ open: false }" class="relative ml-4">
    <button @click="open = !open" class="flex items-center text-sm font-medium text-slate-600 hover:text-slate-800 focus:outline-none transition ease-in-out duration-150 bg-slate-50 hover:bg-slate-100 rounded-full py-1.5 pl-1.5 pr-4 border border-slate-100">
        <div class="inline-flex h-8 w-8 rounded-xl bg-[#1DA1F2] items-center justify-center text-white font-bold text-sm mr-1">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</div>
        <div class="ml-1">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </div>
    </button>
    
    <div x-show="open" x-transition @click.away="open = false" style="display: none;" class="absolute right-0 mt-2 w-48 rounded-lg shadow-lg py-1 bg-white ring-1 border border-slate-100 focus:outline-none z-50">
        <a href="{{ route('profile') }}" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50" wire:navigate>Profile</a>
        <button wire:click="logout" class="block w-full text-left px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">Log Out</button>
    </div>
</div>
