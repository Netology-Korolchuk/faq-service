<!-- Modal Trigger deleteAdmin-->
<a class="waves-effect waves-light btn" href="#del{{ $admin->id }}">Удалить</a>

<!-- Modal Structure addAdmin-->
<div id="del{{ $admin->id }}" class="modal">
    <div class="modal-content">

    <div class="right-align"><a href="#!" class="modal-action modal-close">x</a></div>

        <h4>Удалить администратора</h4>
            <form action="{{ url('/admin/' . $admin->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <h5>Вы точно хотите удалить админстратора {{ $admin->login }} ?</h5>
                <button class="waves-effect waves-light btn" type="submit">Удалить</button>
            </form>
    </div>
</div>

