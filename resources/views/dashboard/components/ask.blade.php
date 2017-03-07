<!-- Modal Trigger -->
<strong><a href="#askQuestion">Задать вопрос</a></strong>
<hr/>

<!-- Modal Structure -->
<div id="askQuestion" class="modal">
    <div class="modal-content">

    <div class="right-align"><a href="#!" class="modal-action modal-close">x</a></div>

        <form action="{{ url('/faq') }}" method="POST">
            {{ csrf_field() }}
            <label for="email">Ваша электронная почта</label>
            <input type="email" name="email">
            <label for="author_name">Ваше имя</label>
            <input type="text" name="author_name">
            <label for="topic_id">Выберете тему:</label>
            <select id="new_topic" name="topic_id">
                @foreach ($topics as $topic)
	                <option value="{{ $topic->id }}">{{ $topic->title }}</option>
                @endforeach
            </select>
            <label for="text">Вопрос</label>
            <textarea rows="3" name="text"></textarea>
            <button class="waves-effect waves-light btn" type="submit">Отправить</button>
        </form>
    </div>
</div>