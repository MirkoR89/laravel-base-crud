@extends('layout.app')

@section('main')
<section class="container post">
    <h1>All posts for the admin</h1>

    <a href="{{ route('posts.create') }}">
        <button type="button" class="btn btn-info my-2">
            Create
        </button>
    </a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
                <th>Created at</th>
                <th>Updated at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td>{{$post->created_at}}</td>
                <td>{{$post->updated_at}}</td>
                <td>
                    <a href=" {{route('posts.show', ['post'=>$post->id] )}} ">
                        <button type="button" class="btn btn-primary">
                            View
                            <i class="fas fa-eye"></i>
                        </button>
                    </a>
                </td>
                <td>
                    <a href="{{route('posts.edit', ['post'=>$post->id] )}}">
                        <button type="button" class="btn btn-success">
                            Edit
                            <i class="fas fa-edit"></i>
                        </button>
                    </a>
                </td>
                <td>
                    <form action="{{route('posts.destroy', ['post'=> $post->id] )}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            Delete
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
@endsection
