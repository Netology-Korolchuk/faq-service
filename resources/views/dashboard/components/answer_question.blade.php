<!-- Modal Trigger -->
<a class="waves-effect waves-light btn" href="#answer{{ $question->id }}">Ответить</a>

<!-- Modal Structure -->
<div id="answer{{ $question->id }}" class="modal">
    <div class="modal-content">

    <div class="right-align"><a href="#!" class="modal-action modal-close">x</a></div>

        <h4>Вопрос: {{ $question->text }}</h4>
        <form action="{{ url('/admin/faq/topic/' . $question->id . '/answer') }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <textarea rows="3" name="answer"></textarea>
            <input type="checkbox" id="cb1" name="with_publication" value="1" />
            <label for="cb1">Опубликовать</label>
            <hr/>
            <button class="waves-effect waves-light btn" type="submit">Добавить и закрыть</button>
        </form>
    </div>
</div>




