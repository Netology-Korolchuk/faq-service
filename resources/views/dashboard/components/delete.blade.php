<!-- Modal Trigger -->
<a class="waves-effect waves-light btn" href="#del{{ $question->id }}">Удалить</a>
<!-- Modal Structure -->
<div id="del{{ $question->id }}" class="modal">
    <div class="modal-content">

    <div class="right-align"><a href="#!" class="modal-action modal-close">x</a></div>

        <form action="{{ url('/admin/faq/topic/' . $question->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <h5>Вы точно хотите удалить вопрос: "{{$question->text}}"</h5>
            <button type="submit" class="waves-effect waves-light btn">Удалить</button>
        </form>
    </div>
</div>


