@extends('layouts.app')
@section('title', 'Вход')
@section('content')
    <div class="row">
        <div class="col s4"></div>
    	<div class="col s4">
		<center>
		    Авторизация для администраторов
	    	<div class="card-panel #e0f2f1 teal lighten-5">
        		<form role="form" method="POST" action="{{ url('/login') }}">
	                {{ csrf_field() }}
    			    <label for="login">Логин</label>
	        		<input id="login" type="text" name="login" required autofocus>
			        <label for="password">Пароль</label>
        			<input id="password" type="password" name="password" required>
		        	<button type="submit" class="waves-effect waves-light btn">Войти</button>
        		</form>
		    </div>
		</center>
	    </div>
        <div class="col s4"></div>
    </div>
@endsection