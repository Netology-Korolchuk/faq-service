<!-- Modal Trigger addAdmin-->
<a class="waves-effect waves-light btn" href="#addAdmin">Создать администратора</a>

<!-- Modal Structure addAdmin-->
<div id="addAdmin" class="modal">
    <div class="modal-content">

    <div class="right-align"><a href="#!" class="modal-action modal-close">x</a></div>

	    <h4>Создать администратора</h4>
            <form method="POST" action="{{ url('/admin') }}">
                {{ csrf_field() }}
                <label for="login">Логин</label>
                <input id="login" type="text" name="login" value="{{ old('login') }}" required autofocus>
                <label for="surname">Фамилия</label>
                <input id="surname" type="text" name="surname" value="{{ old('surname') }}" required autofocus>
                    @if ($errors->has('surname'))
                    @endif
                <label for="name">Имя</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
                <label for="password" >Пароль</label>
                <input id="password" type="password" name="password" required>
                <label for="password-confirm">Подтвердите</label>
                <input id="password-confirm" type="password" name="password_confirmation" required>
                <button class="waves-effect waves-light btn" type="submit">Создать</button>
            </form>
    </div>
</div>

