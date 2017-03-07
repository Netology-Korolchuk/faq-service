<!-- Modal Trigger -->
<a class="waves-effect waves-light btn" href="#edit{{ $question->id }}">Редактировать</a>
<!-- Modal Structure -->
<div id="edit{{ $question->id }}" class="modal">
    <div class="modal-content">

    <div class="right-align"><a href="#!" class="modal-action modal-close">x</a></div>

        <form action="{{ url('/admin/faq/topic/' . $question->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <label for="new_text">Вопрос</label>
            <textarea rows="3" name="new_text">{{ $question->text }}</textarea>
            <label for="new_answer">Ответ</label>
            <textarea rows="3" name="new_answer">{{ $question->answer }}</textarea>
            <label for="new_topic">Выберете тему:</label>
            <select id="new_topic" name="new_topic">
                @foreach ($topics as $topic)
                    <option value="{{ $topic->id }}">{{ $topic->title }}</option>
                @endforeach
            </select>
            <label for="new_title">Имя автора</label>
            <input type="text" name="new_author_name" value="{{ $question->author_name }}">
            <button class="waves-effect waves-light btn" type="submit">Изменить и закрыть</button>
        </form>
    </div>
</div>