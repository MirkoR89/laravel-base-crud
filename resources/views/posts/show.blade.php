@extends('layout.app')

@section('main')
<section class="show_post">
    <div class="container">
        <div class="content mt-5">
            <h1>{{$post->title}}</h1>
            <p>{{$post->body}}</p>
        </div>
    </div>
</section>
@endsection

