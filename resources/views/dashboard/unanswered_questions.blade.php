@extends('layouts.app')
@section('title', 'Вопросы без ответов')
@section('content')

<!-- Page Layout here -->
<div class="row">
	<div class="col s3">
	<!-- Grey navigation panel -->
	  @include('dashboard.components.navbar')
	</div>

	<div class="col s9">
    <!-- Teal page content  -->

    @if (count($questions) > 0)
        <h4>Вопросы без ответов</h4>
        <table class="striped">
        <thead>
            <tr>
                <th>Текст</th>
                <th>Дата создания</th>
                <th>Тема</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($questions as $question)
                <tr>
                @include('dashboard.components.text_and_date')
                    <td>{{ $question->topic->title }}</td>
                    <td>@include('dashboard.components.answer_question')</td>
                    <td>@include('dashboard.components.edit')</td>
                    <td>@include('dashboard.components.delete')</td>
                </tr>
            @endforeach
        </tbody>
        </table>
    @else
        <h4>На данный момент нет неотвеченных вопросов</h4>
    @endif

    </div>
</div>

@endsection
