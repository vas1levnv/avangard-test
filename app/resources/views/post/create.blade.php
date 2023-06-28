<div style="width: 100vw; height: 100vh; display: flex; align-items: center; justify-content: center">
    <div>
        <form action="{{route('post.store')}}" method="post">
            @csrf
            <div style="margin-top: 20px">
                <label for="title">Тайтл</label>
                <input type="text" name="title" class="form-control" placeholder="Тайтл"
                       id="title">
            </div>
            <div style="margin-top: 20px">
                <label for="content">Контент</label>
                <textarea class="form-control" name="content" placeholder="Контент"
                          id="content"></textarea>
            </div>
            <div style="margin-top: 20px">
                <label for="comment">Коммент</label>
                <input type="text" name="comment" class="form-control" placeholder="Коммент"
                       id="comment">
            </div>
            <button style="margin-top: 20px" type="submit">Создать</button>
        </form>
    </div>
</div>

