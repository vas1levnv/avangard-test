@extends('layouts.main')
@section('content')
    <div>
        <a class="btn btn-dark my-3" href="{{route('post.edit', $post->id)}}">Edit post</a>
    </div>
    <div>
        <form action="{{route('post.delete', $post->id)}}" method="post">
            @csrf
            @method('delete')
            <input class="btn btn-warning my-3"
                   type="submit"
                   value="Delete post"
            >
        </form>

    </div>
    <div>
        <div>{{$post->id}}. {{$post->title}}</div>
        <div>{{$post->content}}</div>
        <div>{{$post->comment}}</div>
    </div>
    <div>
        <a href="{{route('post.index')}}">Back</a>
    </div>
@endsection
