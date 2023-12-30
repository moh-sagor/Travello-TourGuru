<form method="post" action="{{ route('sitemaps.store') }}" enctype="multipart/form-data">
    @csrf
    {{-- Include file input for logo --}}
    <div>
        <label for="image">Logo:</label>
        <input type="file" name="image" accept="image/*">
    </div>

    {{-- Other input fields --}}
    <div>
        <label for="contact">Contact:</label>
        <input type="text" name="contact" value="{{ old('contact') }}">
    </div>

    <div>
        <label for="address">Address:</label>
        <input type="text" name="address" value="{{ old('address') }}">
    </div>

    <div>
        <label for="facebook">Facebook:</label>
        <input type="text" name="facebook" value="{{ old('facebook') }}">
    </div>

    <div>
        <label for="twitter">Twitter:</label>
        <input type="text" name="twitter" value="{{ old('twitter') }}">
    </div>

    <div>
        <label for="linkedin">LinkedIn:</label>
        <input type="text" name="linkedin" value="{{ old('linkedin') }}">
    </div>

    <button type="submit">Store</button>
</form>
