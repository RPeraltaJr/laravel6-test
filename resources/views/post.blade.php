@include('global.header')

<div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
</div>

@include('global.footer')