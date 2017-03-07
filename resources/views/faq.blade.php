@extends('layouts.app')
@section('title', 'FAQ')
@section('content')
<div class="row">
    <div class="col s3">
        <ul>
	    @include('dashboard.components.ask')
            @foreach ($topics as $topic)
            <li><a href="#{{ $topic->title }}">{{ $topic->title }}</a></li>
            @endforeach
        </ul>
    </div>
    <div class="col s9">
        @foreach ($topics as $topic)
            @if ($topic->publishedQuestions() > 0)
            <h4 id="{{ $topic->title }}"><span>{{ $topic->title }}</span></h4>
                @foreach ($topic->questions as $question)
                    @if ($question->status != 0 && $question->answer)
                        <div><h5>{{ $question->text }}</h5></div>
                        <div><blockquote>{{ $question->answer }}</blockquote></div>
                    @endif
                @endforeach
            @endif
        @endforeach
    </div>
</div>
@endsection