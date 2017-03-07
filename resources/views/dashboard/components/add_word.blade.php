<!-- Modal Trigger -->
<a class="waves-effect waves-light btn" href="#addWord">Добавить слово</a>

<!-- Modal Structure -->
<div id="addWord" class="modal">
    <div class="modal-content">

    <div class="right-align"><a href="#!" class="modal-action modal-close">x</a></div>

	Добавить запретное слово

        <form role="form" method="POST" action="{{ url('/admin/blocked') }}">
           {{ csrf_field() }}
           {{-- WORD  --}}
           <label for="word">Cлово</label>
           <input type="text" name="word" required autofocus>
           {{-- SUBMIT --}}
           <button class="waves-effect waves-light btn" type="submit">Добавить</button>
        </form>
    </div>
</div>
