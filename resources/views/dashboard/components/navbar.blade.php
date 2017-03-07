<div>
    <ul>
    @if (Auth::user()->role == 'superAdmin')
        <li><a href="{{ url('/admin')}}">Администраторы</a></li>
    @endif
        <li><a href="{{ url('/admin/faq')}}">Темы</a></li>
        <li><a href="{{ url('/admin/faq/unanswered')}}">Вопросы без ответов</a></li>
        <li><a href="{{ url('/admin/blocked')}}">Заблокированные вопросы</a></li>
    </ul>
    <ul>
        <li><a href="{{ url('/logout')}}">Выход</a></li>
    </ul>
</div>
