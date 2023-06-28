<div style="width: 100vw; height: 100vh; display: flex; align-items: center; justify-content: center">
    <div>
        <div style="margin-top: 20px">

            <a href="{{route('post.edit', $post->id)}}">
                <button>Редактировать пост</button>
            </a>

        </div>
        <div style="margin-top: 20px">
            <form action="{{route('post.delete', $post->id)}}" method="post">
                @csrf
                @method('delete')
                <input
                    type="submit"
                    value="Удалить пост"
                >
            </form>

        </div>
        <h2>Информация поста</h2>
        <div style="margin-top: 20px">
            <div>{{$post->id}}. {{$post->title}}</div>
            <div>{{$post->content}}</div>
            <div>{{$post->comment}}</div>
        </div>
        <div style="margin-top: 20px">
            <a href="{{route('post.index')}}">Назад</a>
        </div>
    </div>
</div>

