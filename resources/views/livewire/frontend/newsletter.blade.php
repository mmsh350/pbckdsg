<div class="footer-col-newsletter">
    <h4 class="footer-heading">Subscribe to Newsletter</h4>
    <p class="newsletter-desc">Get free state policy & budget updates right in your inbox.</p>

    @if ($subscribed || session()->has('newsletter_success'))
        <div style="background-color: rgba(16, 185, 129, 0.15); border: 1px solid rgba(16, 185, 129, 0.3); color: #10B981; padding: 0.75rem 1rem; border-radius: 8px; font-size: 0.8125rem; font-weight: 600; margin-bottom: 1rem; display: flex; items-center; gap: 0.5rem;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
            <span>{{ session('newsletter_success', 'Thank you for subscribing!') }}</span>
        </div>
    @endif

    <form wire:submit="subscribe" class="newsletter-form">
        <div class="input-group">
            <input type="email" wire:model="email" placeholder="Your Email Address" required>
            <button type="submit" class="btn btn-blue" wire:loading.attr="disabled">
                <span wire:loading.remove wire:target="subscribe">SIGN UP</span>
                <span wire:loading wire:target="subscribe">WAIT...</span>
            </button>
        </div>
        @error('email')
            <span style="color: #EF4444; font-size: 0.75rem; font-weight: 600; margin-top: 0.4rem; display: block;">{{ $message }}</span>
        @enderror
    </form>
</div>
