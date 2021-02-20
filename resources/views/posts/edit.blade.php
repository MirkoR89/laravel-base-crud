@extends('layout.app')

@section('main')

<section class="edit">
    <div class="container">
        <h1>Edit {{$post->title}}</h1>
    
        <form action="{{ route('posts.update', ['post'=> $post->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <h4><label for="title">Title</label></h4>
                <input type="text" name="title" id="title" value="{{$post->title}}">
            </div>
    
            <div class="form-group">
                <h4><label for="body">Body</label></h4>
                <textarea name="body" id="body" cols="50" rows="10">{{$post->body}}</textarea>
            </div>
    
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>

@endsection