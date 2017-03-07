<!-- Modal Trigger -->
<a class="waves-effect waves-light btn" href="#del{{ $topic->id }}">Удалить</a>
<!-- Modal Structure -->
<div id="del{{ $topic->id }}" class="modal">
    <div class="modal-content">

    <div class="right-align"><a href="#!" class="modal-action modal-close">x</a></div>

        <h4 id="myModalLabel">Подтверждение удаления</h4>
        <form action="{{ url('/admin/faq/' . $topic->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <h5>Вы точно хотите удалить тему {{ $topic->title }} и все вопросы связанные с ней?</h5>
            <button class="waves-effect waves-light btn" type="submit">Удалить</button>
        </form>
    </div>
</div>