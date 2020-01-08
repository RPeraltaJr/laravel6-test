{{-- header --}}
@include('global.header')

{{-- navbar --}}
@include('global.navbar')

{{-- jumbotron --}}
@include('shared.jumbotron', [
    "title" => "Jumbotron",
    "body" => "<p>Lorem <strong>ipsum dolor</strong> sit amet consectetur adipisicing elit. Rem, totam, sint perferendis, laborum magni recusandae aliquid harum impedit blanditiis alias nam corrupti dolores labore placeat odit quasi! Aut, dignissimos est?</p>",
])

{{-- content --}}
@section('title', 'About us') {{-- [About Us] is the default copy --}}
@section('body', 'It is a long established fact that a reader...')
@include('shared.content')

{{-- content --}}
@section('title') {{-- Overwrite option --}}
    Content Section
@overwrite
@section('body')
    <p>Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
@overwrite
@include('shared.content')

{{-- cards --}}
@include('shared.cards', [
    'cards' => [
        (object) ['title' => 'Post One', 'image' => 'https://i.picsum.photos/id/500/300/200.jpg'],
        (object) ['title' => 'Post Two', 'image' => 'https://i.picsum.photos/id/200/300/200.jpg'],
        (object) ['title' => 'Post Three', 'image' => 'https://i.picsum.photos/id/300/300/200.jpg'],
        (object) ['title' => 'Post Four', 'image' => 'https://i.picsum.photos/id/400/300/200.jpg'],
    ]
])

{{-- footer --}}
@include('global.footer')