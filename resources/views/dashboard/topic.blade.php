@extends('layouts.app')
@section('title', 'Управление темой')
@section('content')

<!-- Page Layout here -->
<div class="row">
	<div class="col s3">
	<!-- Grey navigation panel -->
    @include('dashboard.components.navbar')
	</div>

	<div class="col s9">
    <!-- Teal page content  -->
    <h4>Тема {{ $topic->title }}</h4>
    @if ($topic->totalQuestions())
    {{-- SHOW QUESTIONS --}}
        <table>
        <thead>
            <tr>
                <th>Вопрос</th>
                <th>Дата создания</th>
                <th>Статус</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($topic->questions as $question)
                @if ($question->status != 2)
            <tr>
            @include('dashboard.components.text_and_date')
                {{-- STATUS --}}
                <td>
                    @if ($question->answer && $question->status == 1)
                        <span>Опубликован</span>
                    @elseif ($question->answer && $question->status == 0)
                        <span>Скрыт</span>
                    @elseif (!$question->answer)
                        <span>Ожидает ответ</span>
                    @endif
                </td>
                {{-- PUBLIC --}}
                <td>
                    @if ($question->answer && $question->status == 1)
                        <form action="{{ url('/admin/faq/topic/' . $question->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <button type="submit" class="btn btn-warning">скрыть</button>
                        </form>
                    @elseif ($question->answer && $question->status == 0)
                        <form action="{{ url('/admin/faq/topic/' . $question->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <button type="submit" class="btn btn-success">опубликовать</button>
                        </form>
                    @else
                        @include('dashboard.components.answer_question')
                    @endif
                </td>
            	<td>
                   @include('dashboard.components.edit')
            	</td>
            	<td>
                   @include('dashboard.components.delete')
            	</td>
            </tr>
                @endif
          @endforeach
        </tbody>
        </table>

{{-- SHOW QUESTIONS --}}
    @else
        <h4>В этой теме нет вопросов</h4>
    @endif
	</div>
</div>

@endsection

