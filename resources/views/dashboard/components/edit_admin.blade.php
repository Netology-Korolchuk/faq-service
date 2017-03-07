<!-- Modal Trigger editAdmin-->
<a class="waves-effect waves-light btn" href="#{{$admin->id }}">Редактировать</a>

<!-- Modal Structure editAdmin-->
<div id="{{$admin->id }}" class="modal">
    <div class="modal-content">

    <div class="right-align"><a href="#!" class="modal-action modal-close">x</a></div>
        <h4>Редактировать данные администратора</h4>
        <form action="{{ url('/admin/' . $admin->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <label for="new_login">Логин</label>
            <input type="text" name="new_login" value="{{ $admin->login }}">
            <label for="new_name">Имя</label>
            <input type="text" name="new_name" value="{{ $admin->name }}">
            <label for="new_surname">Фамилия</label>
            <input type="text" name="new_surname" value="{{ $admin->surname }}">
            <label for="new_password">Новый пароль</label>
            <input type="password" name="new_password">
            <label for="new_password_confirm">Подтверждение</label>
            <input type="password" name="new_password_confirmation">
            <button class="waves-effect waves-light btn" type="submit">Изменить и закрыть</button>
        </form>
    </div>
</div>


