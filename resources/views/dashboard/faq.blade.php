@extends('layouts.app')
@section('title', 'Администрирование тем')
@section('content')

<!-- Page Layout here -->
<div class="row">
	<div class="col s3">
	<!-- Grey navigation panel -->
    @include('dashboard.components.navbar')
	</div>

	<div class="col s9">
    <!-- Teal page content  -->
    <h4>Темы</h4>
        {{-- ADD TOPIC --}}
        <div>Добавление новой темы</div>
            <form method="POST" action="{{ url('/admin/faq') }}">
                {{ csrf_field() }}
                <label for="title">Название</label>
                <input id="title" type="text" name="title" value="{{ old('title') }}" required autofocus>
                @if ($errors->has('title'))
                    <strong>{{ $errors->first('title') }}</strong>
                @endif
                <button type="submit" class="btn btn-primary">Создать</button>
           </form>

        {{-- SHOW TOPICS --}}
        <table class="striped">
        <thead>
            <tr>
                <th>Название</th>
                <th>Всего</th>
                <th>Опубликовано</th>
                <th>Без ответов</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($topics as $topic)
            <tr>
                <td>
                    <div><a href="{{ url('admin/faq/topic/' . $topic->id) }}">{{ $topic->title }}</a></div>
                </td>
                <td>
                    {{ $topic->totalQuestions() }}
                </td>
                <td>
                    {{ $topic->publishedQuestions() }}
                </td>
                <td>
                    {{ $topic->noAnswerQuestions() }}
                </td>

        {{-- EDIT --}}
                <td>
                    @include('dashboard.components.edit_topic')
                </td>
        {{-- DELETE --}}
                <td>
                    @include('dashboard.components.del_topic')
                </td>

            </tr>
          @endforeach
        </tbody>
    </table>

	</div>
</div>

@endsection