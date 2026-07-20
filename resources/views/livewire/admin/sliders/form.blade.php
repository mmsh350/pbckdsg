<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ $slider ? 'Edit' : 'Create' }} Sliders</h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg border border-gray-100 sm:rounded-xl">
                <div class="px-8 py-6 border-b border-gray-100 bg-gray-50/50">
                    <h3 class="text-lg font-bold text-gray-800">{{ $slider ? 'Update' : 'Upload New' }} Slider</h3>
                    <p class="text-sm text-gray-500 mt-1">Select and configure the images to display in the homepage banner.</p>
                </div>
                
                <form wire:submit="save">
                    <div class="p-8 space-y-8">

                        <!-- Image Upload Area -->
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Slider Images <span class="text-red-500">*</span></label>
                            
                            @if ($slider && $slider->image && empty($images))
                                <div class="mb-4">
                                    <img src="{{ Storage::url($slider->image) }}" class="w-full h-48 object-cover rounded-xl shadow-sm border border-slate-200">
                                </div>
                            @endif
                            
                            @if (!empty($images))
                                <div class="mb-4 grid grid-cols-2 sm:grid-cols-4 gap-4">
                                    @foreach($images as $img)
                                        <div class="relative group">
                                            <img src="{{ $img->temporaryUrl() }}" class="w-full h-24 object-cover rounded-lg shadow-sm border border-blue-200">
                                            <div class="absolute inset-0 bg-blue-500/10 rounded-lg"></div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif

                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-xl hover:border-blue-400 hover:bg-blue-50/50 transition-all cursor-pointer relative bg-gray-50/30">
                                <div class="space-y-1 text-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="flex justify-center text-sm text-gray-600 mt-2">
                                        <label for="file-upload" class="relative cursor-pointer rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                            <span>Upload images</span>
                                            <input id="file-upload" wire:model="images" accept="image/*" multiple type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-1">PNG, JPG, GIF up to 2MB</p>
                                </div>
                                <div wire:loading wire:target="images" class="absolute inset-0 bg-white/80 rounded-xl flex items-center justify-center z-10 backdrop-blur-sm">
                                    <div class="flex flex-col items-center">
                                        <svg class="animate-spin -ml-1 mr-3 h-6 w-6 text-blue-600 mb-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
                                        <span class="text-sm font-medium text-blue-800">Processing images...</span>
                                    </div>
                                </div>
                            </div>
                            @error('images') <p class="mt-2 text-sm text-red-600 font-medium">{{ $message }}</p> @enderror
                            @error('images.*') <p class="mt-2 text-sm text-red-600 font-medium">{{ $message }}</p> @enderror
                            @if(!$slider)
                                <p class="text-xs text-blue-600 bg-blue-50 p-2 rounded-lg mt-3 inline-block font-medium">Tip: You can select multiple images at once to create multiple sliders simultaneously.</p>
                            @endif
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Display Order</label>
                                <input type="number" wire:model="sort_order" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-lg transition-colors bg-gray-50 focus:bg-white px-4 py-2.5">
                                <p class="text-xs text-gray-500 mt-1">Lower numbers appear first (e.g., 0, 1, 2).</p>
                                @error('sort_order') <p class="mt-2 text-sm text-red-600 font-medium">{{ $message }}</p> @enderror
                            </div>

                            <div class="flex items-center pt-6">
                                <div class="relative flex items-start">
                                    <div class="flex items-center h-5">
                                        <input id="is_active" wire:model="is_active" type="checkbox" class="focus:ring-blue-500 h-5 w-5 text-blue-600 border-gray-300 rounded cursor-pointer transition-colors">
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label for="is_active" class="font-semibold text-gray-700 cursor-pointer">Active Status</label>
                                        <p class="text-gray-500 text-xs mt-0.5">If unchecked, this slider will be hidden from the public.</p>
                                    </div>
                                </div>
                                @error('is_active') <p class="mt-2 text-sm text-red-600 font-medium ml-2">{{ $message }}</p> @enderror
                            </div>
                        </div>

                    </div>

                    <div class="px-8 py-5 bg-gray-50 border-t border-gray-100 flex items-center justify-end gap-3 rounded-b-xl">
                        <a href="{{ route('admin.sliders.index') }}" class="px-5 py-2.5 border border-gray-300 shadow-sm text-sm font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors" wire:navigate>
                            Cancel
                        </a>
                        <button type="submit" class="inline-flex justify-center px-5 py-2.5 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Save Slider
                        </button>
                    </div>
                </form>
            </div>
        </div>
</div>