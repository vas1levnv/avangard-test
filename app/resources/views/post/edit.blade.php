<div style="width: 100vw; height: 100vh; display: flex; align-items: center; justify-content: center">
    <form action="{{route('post.update', $post->id)}}" method="post">
        @csrf
        @method('patch')
        <div style="margin-top: 20px">
            <label for="title">Тайтл</label>
            <input type="text" name="title"
                   value="{{$post->title}}"
                   class="form-control" placeholder="Тайтл"
                   id="title">
        </div>
        <div style="margin-top: 20px">
            <label for="content">Контент</label>
            <textarea class="form-control"
                      name="content" placeholder="Контент"
                      id="content">{{$post->content}}</textarea>
        </div>
        <div style="margin-top: 20px">
            <label for="comment">Коммент</label>
            <input type="text" name="comment"
                   value="{{$post->comment}}"
                   class="form-control" placeholder="Коммент"
                   id="comment">
        </div>
        <button style="margin-top: 20px" type="submit">Изменить</button>
    </form>
</div>
