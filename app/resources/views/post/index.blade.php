<div style="width: 100vw; height: 100vh; display: flex; align-items: center; justify-content: center">
    <div>
        <div style="margin-top: 20px">
            <a href="{{route('post.create')}}">
                <button>Создать пост
                </button>
            </a>
        </div>
        <h2>Список постов</h2>
        <div style="margin-top: 20px">
            @foreach($posts as $post)
                <div><a href="{{route('post.show', $post->id)}}">{{$post->id}}. {{$post->title}}</a></div>
            @endforeach
        </div>
    </div>
</div>
