@extends('layouts.app')
@section('title', 'Заблокированные вопросы')
@section('content')

<!-- Page Layout here -->
<div class="row">
	<div class="col s3">
	<!-- Grey navigation panel -->
        @include('dashboard.components.navbar')
        {{-- ADD FORBIDDEN WORD --}}
        @include('dashboard.components.add_word')
       	<hr/>
        {{-- SHOW LIST OF WORDS  --}}
        @include('dashboard.components.show_words')
	</div>

	<div class="col s9">
    <!-- Teal page content  -->
     <h4>Заблокированные вопросы</h4>
    {{-- SHOW BLOCKED QUESTIONS --}}
    @if (count($questions) > 0)
        <table class="striped">
        <thead>
            <tr>
                <th>Текст</th>
                <th>Дата создания</th>
                <th>Тема</th>
                <th>Запрещенные слова</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($questions as $question)
            <tr>
            @include('dashboard.components.text_and_date')
                <td>{{ $question->topic->title }}</td>
                <td>
                    <ul>
                    @foreach ($question->getBlockedWords() as $word)
                        <li>{{ $word }}</li>
                    @endforeach
                    </ul>
                </td>

                <td>
            	  @include('dashboard.components.edit')
                </td>

                <td>
                @include('dashboard.components.delete')
                </td>
            </tr>
        @endforeach
        </tbody>
        </table>
    @else
        <h4 class="text-left">На данный момент нет заблокированных вопросов</h4>
    @endif
	</div>
</div>
@endsection