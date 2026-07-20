<div>
    <section class="section" style="background-color: #f1f5f9; padding: 4rem 0 6rem;">
        <div class="container">
            <div
                style="background-color: white; padding: 2.5rem; border-radius: 8px; box-shadow: 0 5px 20px rgba(0,0,0,0.02);">

                <!-- Section Heading -->
                <div style="margin-bottom: 2.5rem; border-bottom: 2px solid #f1f5f9; padding-bottom: 1.25rem;">
                    <h2 style="font-size: 1.75rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0; letter-spacing: -0.02em;">Document Library</h2>
                    <p style="margin: 0; color: #64748b; font-size: 0.95rem;">Search, filter, and download our collection of official reports, policies, and publications.</p>
                </div>

                <!-- Filter Bar -->
                <div class="filter-bar" style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center; background: white; padding: 1.5rem; border-radius: 12px; border: 1px solid #e2e8f0; margin-bottom: 2rem;">
                    <input type="text" wire:model.live.debounce.300ms="search" class="filter-input" placeholder="Search Keyword..." style="flex: 1; min-width: 200px; padding: 0.75rem 1rem; border: 1px solid #cbd5e1; border-radius: 8px; outline: none; transition: all 0.2s;">

                    <select wire:model.live="category" class="filter-select" style="padding: 0.75rem 1rem; border: 1px solid #cbd5e1; border-radius: 8px; background: #f8fafc; outline: none; min-width: 150px;">
                        <option value="">All Categories</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat }}">{{ ucfirst($cat) }}</option>
                        @endforeach
                    </select>

                    <select wire:model.live="sort_by" class="filter-select" style="padding: 0.75rem 1rem; border: 1px solid #cbd5e1; border-radius: 8px; background: #f8fafc; outline: none; min-width: 150px;">
                        <option value="">Order By:</option>
                        <option value="published_at">Publish Date</option>
                        <option value="title">Title</option>
                        <option value="updated_at">Update Date</option>
                        <option value="download_count">Downloads</option>
                    </select>

                    <select wire:model.live="direction" class="filter-select" style="padding: 0.75rem 1rem; border: 1px solid #cbd5e1; border-radius: 8px; background: #f8fafc; outline: none;">
                        <option value="desc">Descending</option>
                        <option value="asc">Ascending</option>
                    </select>

                    <button type="button" wire:click="clearFilters" class="filter-btn" style="padding: 0.75rem 1.5rem; background: #ef4444; color: white; border: none; border-radius: 8px; font-weight: 600; cursor: pointer; transition: background 0.2s;">CLEAR</button>
                </div>

                <!-- Documents Grid -->
                <div class="document-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); gap: 1.5rem;">
                    @forelse($documents as $doc)
                        <div class="doc-card" style="background: white; border: 1px solid #e2e8f0; border-radius: 12px; padding: 1.5rem; transition: all 0.3s ease; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); display: flex; flex-direction: column; justify-content: space-between;" onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 10px 15px -3px rgba(0, 0, 0, 0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 6px -1px rgba(0, 0, 0, 0.05)'">
                            <div class="doc-card-top" style="display: flex; align-items: flex-start; gap: 1rem;">
                                @php
                                    $ext = strtoupper($doc->file_type ?: pathinfo($doc->file_path, PATHINFO_EXTENSION));
                                    if (!$ext || $ext === '-') {
                                        $ext = 'DOC';
                                    }

                                    $bg = '#f1f5f9';
                                    $color = '#475569';
                                    $border = '#cbd5e1';
                                    if ($ext === 'PDF') {
                                        $bg = '#fef2f2';
                                        $color = '#ef4444';
                                        $border = '#fecaca';
                                    } elseif (in_array($ext, ['XLS', 'XLSX', 'CSV'])) {
                                        $bg = '#ecfdf5';
                                        $color = '#10b981';
                                        $border = '#a7f3d0';
                                    } elseif (in_array($ext, ['DOC', 'DOCX'])) {
                                        $bg = '#eff6ff';
                                        $color = '#3b82f6';
                                        $border = '#bfdbfe';
                                    }

                                    $sizeBytes = $doc->file_size ?? 0;
                                    $sizeFormatted =
                                        $sizeBytes > 1048576
                                            ? number_format($sizeBytes / 1048576, 2) . ' MB'
                                            : number_format($sizeBytes / 1024, 2) . ' KB';
                                @endphp
                                <div class="doc-icon"
                                    style="background-color: {{ $bg }}; color: {{ $color }}; display: flex; align-items: center; justify-content: center; width: 48px; height: 48px; border-radius: 10px; font-weight: 800; font-size: 0.75rem; border: 1px solid {{ $border }}; flex-shrink: 0;">
                                    {{ $ext }}
                                </div>
                                <div style="flex: 1; min-width: 0;">
                                    <h4 style="margin: 0; font-size: 1.05rem; font-weight: 700; color: #0f172a; line-height: 1.4; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;" title="{{ $doc->title }}">
                                        {{ $doc->title }}
                                    </h4>
                                    <div class="doc-meta" style="display: flex; flex-direction: column; gap: 0.25rem; font-size: 0.85rem; color: #64748b;">
                                        @if($doc->category)
                                        <span style="display: inline-flex; align-items: center; gap: 0.25rem; background: #f1f5f9; padding: 0.1rem 0.5rem; border-radius: 4px; font-weight: 600; font-size: 0.75rem; width: fit-content;">
                                            {{ strtoupper($doc->category) }}
                                        </span>
                                        @endif
                                        <div style="display: flex; align-items: center; gap: 0.25rem;">
                                            <svg viewBox="0 0 24 24" width="12" height="12" stroke="currentColor"
                                                stroke-width="2" fill="none">
                                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                                <polyline points="13 2 13 9 20 9"></polyline>
                                            </svg>
                                            <span>1 file &bull; {{ $sizeFormatted }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-top: 1.25rem; display: flex; gap: 0.5rem;">
                                <a href="{{ route('downloads.show', $doc) }}"
                                    style="flex: 1; padding: 0.75rem; background: #f8fafc; color: #041f56; border: 1px solid #e2e8f0; border-radius: 8px; text-decoration: none; text-align: center; font-weight: 600; font-size: 0.9rem; transition: all 0.2s;"
                                    onmouseover="this.style.background='#041f56'; this.style.color='white'" onmouseout="this.style.background='#f8fafc'; this.style.color='#041f56'">
                                    View Details
                                </a>
                                <a href="{{ route('documents.download', $doc) }}"
                                    style="flex: 1; padding: 0.75rem; background: #4381f1; color: white; border: 1px solid #4381f1; border-radius: 8px; text-decoration: none; text-align: center; font-weight: 600; font-size: 0.9rem; transition: all 0.2s;"
                                    onmouseover="this.style.background='#2b62cc'; this.style.borderColor='#2b62cc'" onmouseout="this.style.background='#4381f1'; this.style.borderColor='#4381f1'">
                                    Download
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center text-gray-500 py-8" style="width: 100%;">
                            No documents available at this time.
                        </div>
                    @endforelse
                </div>

                <!-- Pagination -->
                <div class="mt-8" style="margin-top: 2rem;">
                    {{ $documents->links() }}
                </div>

            </div>
        </div>
    </section>
</div>
