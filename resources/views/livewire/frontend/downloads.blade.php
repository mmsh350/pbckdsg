<div>
    <style>
        .dl-section {
            background-color: #F8FAFC;
            padding: 4rem 0 6rem;
        }

        .dl-card-container {
            background-color: #FFFFFF;
            padding: 3rem 2.5rem;
            border-radius: 16px;
            border: 1px solid #E2E8F0;
            box-shadow: 0 10px 30px -5px rgba(15, 23, 42, 0.04);
        }

        .dl-header {
            margin-bottom: 2.5rem;
            border-bottom: 2px solid #F1F5F9;
            padding-bottom: 1.5rem;
        }

        .dl-header-title {
            font-size: 1.875rem;
            font-weight: 800;
            color: #0F172A;
            margin: 0 0 0.5rem 0;
            letter-spacing: -0.02em;
        }

        .dl-header-desc {
            margin: 0;
            color: #64748B;
            font-size: 1rem;
        }

        /* Filter Controls */
        .dl-filter-bar {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
            align-items: center;
            background: #F8FAFC;
            padding: 1.5rem;
            border-radius: 12px;
            border: 1px solid #E2E8F0;
            margin-bottom: 2.5rem;
        }

        .dl-search-wrap {
            position: relative;
            flex: 1;
            min-width: 240px;
        }

        .dl-search-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #94A3B8;
            pointer-events: none;
        }

        .dl-filter-input {
            width: 100%;
            padding: 0.8rem 1rem 0.8rem 2.75rem;
            border: 1px solid #CBD5E1;
            border-radius: 10px;
            background-color: #FFFFFF;
            font-size: 0.9375rem;
            color: #0F172A;
            outline: none;
            transition: all 0.2s ease;
        }

        .dl-filter-input:focus {
            border-color: #0B3485;
            box-shadow: 0 0 0 3px rgba(11, 52, 133, 0.1);
        }

        .dl-filter-select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            padding: 0.8rem 2.5rem 0.8rem 1rem;
            border: 1px solid #CBD5E1;
            border-radius: 10px;
            background-color: #FFFFFF;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23041F56' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 1rem center;
            background-size: 14px;
            font-size: 0.9375rem;
            font-weight: 500;
            color: #0F172A;
            outline: none;
            cursor: pointer;
            transition: all 0.2s ease;
            min-width: 160px;
        }

        .dl-filter-select:focus {
            border-color: #0B3485;
            box-shadow: 0 0 0 3px rgba(11, 52, 133, 0.1);
        }

        .dl-clear-btn {
            padding: 0.8rem 1.5rem;
            background: #FF5A1F;
            color: #FFFFFF;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            font-size: 0.875rem;
            cursor: pointer;
            transition: background 0.2s ease, transform 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
        }

        .dl-clear-btn:hover {
            background: #E04810;
            transform: translateY(-1px);
        }

        /* Document Grid */
        .dl-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 1.75rem;
        }

        .dl-doc-card {
            background: #FFFFFF;
            border: 1px solid #E2E8F0;
            border-radius: 14px;
            padding: 1.75rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.03);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .dl-doc-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -10px rgba(15, 23, 42, 0.1);
            border-color: rgba(4, 31, 86, 0.15);
        }

        .dl-doc-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 52px;
            height: 52px;
            border-radius: 12px;
            font-weight: 800;
            font-size: 0.8125rem;
            flex-shrink: 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.04);
        }

        .dl-doc-title {
            margin: 0 0 0.5rem 0;
            font-size: 1.125rem;
            font-weight: 700;
            color: #0F172A;
            line-height: 1.4;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .dl-badge-category {
            display: inline-flex;
            align-items: center;
            background: #F1F5F9;
            color: #041F56;
            padding: 0.2rem 0.6rem;
            border-radius: 6px;
            font-weight: 700;
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            margin-bottom: 0.4rem;
        }

        .dl-doc-meta {
            display: flex;
            align-items: center;
            gap: 0.35rem;
            font-size: 0.8125rem;
            color: #64748B;
        }

        .dl-action-row {
            margin-top: 1.5rem;
            display: flex;
            gap: 0.75rem;
        }

        .dl-btn-details {
            flex: 1;
            padding: 0.75rem;
            background: #F8FAFC;
            color: #041F56;
            border: 1px solid #E2E8F0;
            border-radius: 10px;
            text-decoration: none;
            text-align: center;
            font-weight: 700;
            font-size: 0.875rem;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
        }

        .dl-btn-details:hover {
            background: #041F56;
            color: #FFFFFF;
            border-color: #041F56;
        }

        .dl-btn-download {
            flex: 1;
            padding: 0.75rem;
            background: #FF5A1F;
            color: #FFFFFF;
            border: 1px solid #FF5A1F;
            border-radius: 10px;
            text-decoration: none;
            text-align: center;
            font-weight: 700;
            font-size: 0.875rem;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.4rem;
            box-shadow: 0 4px 12px rgba(255, 90, 31, 0.2);
        }

        .dl-btn-download:hover {
            background: #E04810;
            border-color: #E04810;
            transform: translateY(-1px);
        }
        .dl-title-link {
            color: #0F172A;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .dl-title-link:hover {
            color: #FF5A1F;
        }
    </style>

    <section class="dl-section">
        <div class="container">
            <div class="dl-card-container">

                <!-- Section Heading -->
                <div class="dl-header">
                    <h2 class="dl-header-title">Official Document Library</h2>
                    <p class="dl-header-desc">Filter, inspect, and download current state publications, budget statements, and policy framework papers.</p>
                </div>

                <!-- Filter Bar -->
                <div class="dl-filter-bar">
                    <div class="dl-search-wrap">
                        <svg class="dl-search-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        <input type="text" wire:model.live.debounce.300ms="search" class="dl-filter-input" placeholder="Search by title, keyword, year...">
                    </div>

                    <select wire:model.live="category" class="dl-filter-select">
                        <option value="">All Categories</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat }}">{{ ucfirst($cat) }}</option>
                        @endforeach
                    </select>

                    <select wire:model.live="sort_by" class="dl-filter-select">
                        <option value="">Order By</option>
                        <option value="published_at">Publish Date</option>
                        <option value="title">Title</option>
                        <option value="updated_at">Update Date</option>
                        <option value="download_count">Downloads</option>
                    </select>

                    <select wire:model.live="direction" class="dl-filter-select" style="min-width: 130px;">
                        <option value="desc">Descending</option>
                        <option value="asc">Ascending</option>
                    </select>

                    <button type="button" wire:click="clearFilters" class="dl-clear-btn" title="Reset Filters">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        <span>Clear</span>
                    </button>
                </div>

                <!-- Documents Grid -->
                <div class="dl-grid">
                    @forelse($documents as $doc)
                        @php
                            $ext = strtoupper($doc->file_type ?: pathinfo($doc->file_path, PATHINFO_EXTENSION));
                            if (!$ext || $ext === '-') {
                                $ext = 'DOC';
                            }

                            $bg = '#F1F5F9';
                            $color = '#475569';
                            $border = '#CBD5E1';
                            if ($ext === 'PDF') {
                                $bg = '#FEF2F2';
                                $color = '#EF4444';
                                $border = '#FECACA';
                            } elseif (in_array($ext, ['XLS', 'XLSX', 'CSV'])) {
                                $bg = '#ECFDF5';
                                $color = '#10B981';
                                $border = '#A7F3D0';
                            } elseif (in_array($ext, ['DOC', 'DOCX'])) {
                                $bg = '#EFF6FF';
                                $color = '#3B82F6';
                                $border = '#BFDBFE';
                            }

                            $sizeBytes = $doc->file_size ?? 0;
                            $sizeFormatted = $sizeBytes > 1048576
                                ? number_format($sizeBytes / 1048576, 2) . ' MB'
                                : number_format($sizeBytes / 1024, 2) . ' KB';
                        @endphp
                        <div class="dl-doc-card">
                            <div>
                                <div style="display: flex; align-items: flex-start; gap: 1rem; margin-bottom: 1.25rem;">
                                    <a href="{{ route('downloads.show', $doc) }}" class="dl-doc-icon" style="background-color: {{ $bg }}; color: {{ $color }}; border: 1px solid {{ $border }}; text-decoration: none;">
                                        {{ $ext }}
                                    </a>
                                    <div style="flex: 1; min-width: 0;">
                                        @if($doc->category)
                                            <span class="dl-badge-category">
                                                {{ strtoupper($doc->category) }}
                                            </span>
                                        @endif
                                        <h4 class="dl-doc-title" title="{{ $doc->title }}">
                                            <a href="{{ route('downloads.show', $doc) }}" class="dl-title-link">
                                                {{ $doc->title }}
                                            </a>
                                        </h4>
                                        <div class="dl-doc-meta">
                                            <svg viewBox="0 0 24 24" width="13" height="13" stroke="currentColor" stroke-width="2" fill="none"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                            <span>{{ $sizeFormatted }} &bull; {{ $doc->download_count ?? 0 }} downloads</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dl-action-row">
                                <a href="{{ route('downloads.show', $doc) }}" class="dl-btn-details">
                                    <span>Details</span>
                                </a>
                                <a href="{{ route('documents.download', $doc) }}" class="dl-btn-download">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                    <span>Download</span>
                                </a>
                            </div>
                        </div>
                    @empty
                        <div style="grid-column: 1 / -1; text-align: center; padding: 4rem 2rem; background: #F8FAFC; border-radius: 12px; border: 1px dashed #CBD5E1;">
                            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#94A3B8" stroke-width="2" style="margin: 0 auto 1rem auto; display: block;"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                            <h4 style="font-size: 1.25rem; font-weight: 700; color: #0F172A; margin-bottom: 0.5rem;">No Documents Found</h4>
                            <p style="color: #64748B; font-size: 0.9375rem; margin: 0;">Try adjusting your search criteria or clearing your active filters.</p>
                        </div>
                    @endforelse
                </div>

                <!-- Custom Pagination -->
                @if($documents->hasPages())
                    <div style="margin-top: 3.5rem;">
                        {{ $documents->links('vendor.pagination.custom') }}
                    </div>
                @endif

            </div>
        </div>
    </section>
</div>
