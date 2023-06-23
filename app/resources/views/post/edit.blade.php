@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('post.update', $post->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name="title"
                       value="{{$post->title}}"
                       class="form-control" placeholder="Title"
                       id="title">
            </div>
            <div class="mb-3">
                <label for="content">Content</label>
                <textarea class="form-control"
                           name="content" placeholder="Content"
                          id="content">{{$post->content}}</textarea>
            </div>
            <div class="mb-3">
                <label for="comment">Comment</label>
                <input type="text" name="comment"
                       value="{{$post->comment}}"
                       class="form-control" placeholder="Comment"
                       id="comment">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
