@extends('layouts.main')
@section('content')
    <div>
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" placeholder="Title"
                       id="title">
            </div>
            <div class="mb-3">
                <label for="content">Content</label>
                <textarea class="form-control" name="content" placeholder="Content"
                          id="content"></textarea>
            </div>
            <div class="mb-3">
                <label for="comment">Comment</label>
                <input type="text" name="comment" class="form-control" placeholder="Comment"
                       id="comment">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
