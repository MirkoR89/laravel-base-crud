@extends('layout.app')

@section('main')
<section class="create">
    <div class="container">
        <h1>Create a new post</h1>
    
        <form action="{{ route('posts.store') }}" method="post">
            @csrf
            <div class="form-group">
                <h4><label for="title">Title</label></h4>
                <input type="text" name="title" id="title">
            </div>
    
            <div class="form-group">
                <h4><label for="body">Body</label></h4>
                <textarea name="body" id="body" cols="50" rows="10"></textarea>
            </div>
    
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>
@endsection
