<!-- Modal Trigger посмотреть передачу id -->
<a class="waves-effect waves-light btn" href="#edit{{ $topic->id }}">Редактировать</a>

<!-- Modal Structure -->
<div id="edit{{ $topic->id }}" class="modal">
    <div class="modal-content">

    <div class="right-align"><a href="#!" class="modal-action modal-close">x</a></div>

        <h4 id="myModalLabel">Изменение темы {{ $topic->title }}</h4>
        <form action="{{ url('/admin/faq/' . $topic->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <label for="new_title">Название</label>
            <input type="text" name="new_title" value="{{ $topic->title }}">
            <br>
            <button class="waves-effect waves-light btn" type="submit">Изменить и закрыть</button>
        </form>
    </div>
</div>

