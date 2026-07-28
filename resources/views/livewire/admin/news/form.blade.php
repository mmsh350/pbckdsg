<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $news ? 'Edit' : 'Create' }} Article</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg border border-gray-100 sm:rounded-xl">
                <div class="px-8 py-6 border-b border-gray-100 bg-gray-50 flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-bold text-gray-900">Article Details</h3>
                        <p class="text-sm text-gray-500 mt-1">Write your news article and upload a featured image.</p>
                    </div>
                </div>

                <form wire:submit="save" class="p-8 space-y-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Article Title <span class="text-red-500">*</span></label>
                            <input type="text" wire:model="title" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 transition-colors px-4 py-2.5" placeholder="e.g. PBC Hosts Annual Review">
                            @error('title') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Category</label>
                            <input type="text" wire:model="categories" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 transition-colors px-4 py-2.5" placeholder="e.g. Press Release">
                            @error('categories') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Short Excerpt</label>
                        <textarea wire:model="excerpt" rows="2" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 transition-colors px-4 py-2.5" placeholder="A brief summary of the article..."></textarea>
                        @error('excerpt') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">Full Content <span class="text-red-500">*</span></label>
                        <textarea wire:model="content" rows="12" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 transition-colors px-4 py-2.5" placeholder="Write the full article content here. You can use paragraphs..."></textarea>
                        <p class="text-xs text-gray-500 mt-1">Line breaks will be preserved when displayed on the frontend.</p>
                        @error('content') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-gray-50 p-6 rounded-xl border border-gray-100">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-1">Publish Date</label>
                            <input type="date" wire:model="published_at" class="w-full rounded-lg border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 transition-colors px-4 py-2.5">
                            @error('published_at') <span class="text-red-500 text-xs mt-1 block font-medium">{{ $message }}</span> @enderror
                        </div>
                        <div class="flex flex-col justify-center">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Visibility Status</label>
                            <button type="button" 
                                    wire:click="$set('is_published', {{ $is_published ? 'false' : 'true' }})" 
                                    class="inline-flex items-center gap-3 group focus:outline-none cursor-pointer">
                                <div class="relative w-12 h-6 rounded-full transition-colors duration-200 {{ $is_published ? 'bg-blue-600' : 'bg-slate-300' }} p-0.5">
                                    <div class="w-5 h-5 rounded-full bg-white shadow-sm transform transition-transform duration-200 {{ $is_published ? 'translate-x-6' : 'translate-x-0' }}"></div>
                                </div>
                                <span class="text-sm font-bold {{ $is_published ? 'text-blue-700' : 'text-slate-600' }}">
                                    {{ $is_published ? 'Published to Frontend' : 'Draft (Hidden)' }}
                                </span>
                            </button>
                            @error('is_published') <span class="text-red-500 text-xs block mt-1 font-medium">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Featured Image</label>
                        
                        @if ($news && $news->featured_image && !is_object($featured_image))
                            <div class="mb-4 flex items-center gap-4">
                                <img src="{{ Storage::url($news->featured_image) }}" class="w-32 h-20 object-cover rounded-lg shadow-sm border border-slate-200">
                                <div>
                                    <p class="text-sm font-medium text-gray-800">Current Image</p>
                                    <p class="text-xs text-gray-500">Upload a new image below to replace it.</p>
                                </div>
                            </div>
                        @endif

                        @if (is_object($featured_image))
                            <div class="mb-4 flex items-center gap-4">
                                <img src="{{ $featured_image->temporaryUrl() }}" class="w-32 h-20 object-cover rounded-lg shadow-sm border border-blue-200">
                                <div>
                                    <p class="text-sm font-medium text-blue-800">New Image Selected</p>
                                </div>
                            </div>
                        @endif

                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-xl hover:border-blue-500 transition-colors bg-gray-50 relative">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600 justify-center">
                                    <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500 px-2">
                                        <span>Upload an image</span>
                                        <input id="file-upload" type="file" wire:model="featured_image" accept="image/*" class="sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 5MB</p>
                            </div>
                        </div>

                        <div wire:loading wire:target="featured_image" class="mt-3 flex items-center justify-center gap-2 text-sm text-blue-600 font-medium bg-blue-50 p-3 rounded-lg border border-blue-100">
                            <svg class="animate-spin h-5 w-5 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                            Uploading image... please wait.
                        </div>
                        @error('featured_image') <span class="text-red-500 text-xs mt-2 block font-medium">{{ $message }}</span> @enderror
                    </div>

                    <div class="pt-6 border-t border-gray-100 flex items-center justify-end gap-4">
                        <a href="{{ route('admin.news.index') }}" class="px-5 py-2.5 text-sm font-medium text-gray-700 hover:text-gray-900 transition-colors" wire:navigate>Cancel</a>
                        <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2.5 rounded-lg font-medium shadow-sm transition-colors flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Save Article
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
