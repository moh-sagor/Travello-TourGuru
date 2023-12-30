<div class="container">
    <h1>Sitemap Information</h1>

    <div class="mb-3">
        <label class="form-label">Logo:</label>
        @if ($sitemap->image)
            <img src="{{ asset($sitemap->image) }}" alt="Logo">
        @else
            <p>No logo available</p>
        @endif
    </div>

    <div class="mb-3">
        <label class="form-label">Contact:</label>
        <p>{{ $sitemap->contact ?? 'N/A' }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Address:</label>
        <p>{{ $sitemap->address ?? 'N/A' }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Facebook:</label>
        <p>{{ $sitemap->facebook ?? 'N/A' }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">Twitter:</label>
        <p>{{ $sitemap->twitter ?? 'N/A' }}</p>
    </div>

    <div class="mb-3">
        <label class="form-label">LinkedIn:</label>
        <p>{{ $sitemap->linkedin ?? 'N/A' }}</p>
    </div>

    <a href="{{ route('sitemaps.index') }}" class="btn btn-secondary">Back</a>
</div>
