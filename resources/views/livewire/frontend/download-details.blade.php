<div>
    @section('title', $document->title . ' | Planning & Budget Commission')

    <!-- Page Hero -->
    <section class="page-hero" style="background-color: #2e3e65; padding: 10rem 0 8rem; color: white;">
        <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 1.5rem;">
            <h1
                style="font-size: 3rem; font-weight: 800; color: white; margin: 0 0 1.5rem 0; line-height: 1.15; letter-spacing: -0.02em;">
                {{ $document->title }}
            </h1>
            <div style="display: flex; gap: 2rem; font-size: 0.9rem; font-weight: 600; color: rgba(255,255,255,0.8);">
                Publish
                <span>{{ $document->published_at ? $document->published_at->format('F d, Y') : $document->created_at->format('F d, Y') }}</span>
                {{-- <span>No Comments</span> --}}
            </div>
        </div>
    </section>

    <!-- Content Section -->
    <section class="section" style="padding: 5rem 0; background-color: #ffffff;">
        <div class="container" style="max-width: 1000px; margin: 0 auto; padding: 0 1.5rem;">
            <div style="display: grid; grid-template-columns: 300px 1fr; gap: 4rem;">

                <!-- Left Sidebar: Metadata Table -->
                <div>
                    <div
                        style="border: 1px solid #e2e8f0; border-radius: 8px; overflow: hidden; background: white; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);">
                        <div style="background-color: #f8fafc; padding: 1rem 1.5rem; border-bottom: 1px solid #e2e8f0;">
                            <span style="color: #041f56; font-weight: 700; font-size: 1rem;">Document Details</span>
                        </div>
                        <div style="display: flex; flex-direction: column; font-size: 0.9rem;">
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; padding: 1rem 1.5rem; border-bottom: 1px solid #e2e8f0;">
                                <span style="color: #475569; font-weight: 500;">Downloads</span>
                                <span
                                    style="background: #e0e7ff; padding: 0.2rem 0.6rem; border-radius: 4px; font-weight: 700; color: #3730a3; font-size: 0.8rem; white-space: nowrap;">{{ $document->download_count }}</span>
                            </div>
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; padding: 1rem 1.5rem; border-bottom: 1px solid #e2e8f0;">
                                <span style="color: #475569; font-weight: 500;">File Size</span>
                                @php
                                    $sizeBytes = $document->file_size ?? 0;
                                    $sizeFormatted =
                                        $sizeBytes > 1048576
                                            ? number_format($sizeBytes / 1048576, 2) . ' MB'
                                            : number_format($sizeBytes / 1024, 2) . ' KB';
                                @endphp
                                <span
                                    style="background: #f1f5f9; padding: 0.2rem 0.6rem; border-radius: 4px; font-weight: 700; color: #334155; font-size: 0.8rem; white-space: nowrap;">{{ $sizeFormatted }}</span>
                            </div>
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; padding: 1rem 1.5rem; border-bottom: 1px solid #e2e8f0;">
                                <span style="color: #475569; font-weight: 500;">File Count</span>
                                <span
                                    style="background: #f1f5f9; padding: 0.2rem 0.6rem; border-radius: 4px; font-weight: 700; color: #334155; font-size: 0.8rem; white-space: nowrap;">1</span>
                            </div>
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; padding: 1rem 1.5rem; border-bottom: 1px solid #e2e8f0;">
                                <span style="color: #475569; font-weight: 500;">Create Date</span>
                                <span
                                    style="background: #f1f5f9; padding: 0.2rem 0.6rem; border-radius: 4px; font-weight: 700; color: #334155; font-size: 0.8rem; white-space: nowrap;">{{ $document->created_at->format('M d, Y') }}</span>
                            </div>
                            <div
                                style="display: flex; justify-content: space-between; align-items: center; padding: 1rem 1.5rem;">
                                <span style="color: #475569; font-weight: 500;">Last Updated</span>
                                <span
                                    style="background: #f1f5f9; padding: 0.2rem 0.6rem; border-radius: 4px; font-weight: 700; color: #334155; font-size: 0.8rem; white-space: nowrap;">{{ $document->updated_at->format('M d, Y') }}</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content: Description & Download -->
                <div>
                    <h2
                        style="font-size: 2.5rem; font-weight: 800; color: #041f56; margin: 0 0 1.5rem 0; line-height: 1.15; letter-spacing: -0.02em;">
                        {{ $document->title }}
                    </h2>

                    <div style="font-size: 0.95rem; line-height: 1.8; color: #475569; margin-bottom: 3rem;">
                        @if ($document->description)
                            {!! nl2br(e($document->description)) !!}
                        @else
                            <p>No additional description provided for this document.</p>
                        @endif
                    </div>

                    <h3 style="font-size: 1.5rem; font-weight: 700; color: #041f56; margin: 0 0 1rem 0;">Attached Files
                    </h3>
                    <div
                        style="border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.5rem; background: #f8fafc; display: flex; align-items: center; justify-content: space-between;">
                        <span style="font-weight: 500; color: #334155;">{{ basename($document->file_path) }}</span>
                        <a href="{{ route('documents.download', $document) }}"
                            style="background: #4381f1; color: white; padding: 0.5rem 1.5rem; border-radius: 4px; font-weight: 600; text-decoration: none; font-size: 0.9rem; transition: background 0.2s;"
                            onmouseover="this.style.background='#2b62cc'" onmouseout="this.style.background='#4381f1'">
                            Download
                        </a>
                    </div>

                    <!-- Share Icons Box -->
                    <div
                        style="margin-top: 3rem; padding-top: 1.5rem; border-top: 1px solid #e2e8f0; display: flex; align-items: center; gap: 1rem;">
                        <span style="font-size: 0.9rem; color: #475569; font-weight: 500;">Share it :</span>
                        <div style="display: flex; gap: 0.5rem;">
                            <!-- Facebook -->
                            <a href="#"
                                style="width: 32px; height: 32px; background: #041f56; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none;">
                                <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor"
                                    stroke-width="2" fill="none">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </a>
                            <!-- Twitter -->
                            <a href="#"
                                style="width: 32px; height: 32px; background: #041f56; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none;">
                                <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor"
                                    stroke-width="2" fill="none">
                                    <path
                                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                    </path>
                                </svg>
                            </a>
                            <!-- WhatsApp (using a general link icon as placeholder) -->
                            <a href="#"
                                style="width: 32px; height: 32px; background: #041f56; color: white; border-radius: 50%; display: flex; align-items: center; justify-content: center; text-decoration: none;">
                                <svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor"
                                    stroke-width="2" fill="none">
                                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
