<h1>User Profile: {{ $user->username }}</h1>

<!-- Display other user details -->

@if ($sitemap)
    <h2>Sitemap Information</h2>
    <!-- Display sitemap information -->
    <p>Contact: {{ $sitemap->contact }}</p>
    <p>Address: {{ $sitemap->address }}</p>
    <!-- Add more fields as needed -->
@else
    <p>No sitemap information available for this user.</p>
@endif
