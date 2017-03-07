<!-- Modal Trigger -->
<a class="waves-effect waves-light btn" href="#listWords">Показать слова</a>
<!-- Modal Structure -->
<div id="listWords" class="modal">
    <div class="modal-content">

        <div class="right-align"><a href="#!" class="modal-action modal-close">x</a></div>

            <table class="striped">
            @foreach ($forbiddens as $forbidden)
            <tr>
                <td>{{ $forbidden->word }}</td>
                <td>
                <form action="{{ url('/admin/blocked/' . $forbidden->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button class="waves-effect waves-light btn" type="submit">Удалить</button>
                </form>
                </td>
            </tr>
            @endforeach
           </table>
    </div>
</div>