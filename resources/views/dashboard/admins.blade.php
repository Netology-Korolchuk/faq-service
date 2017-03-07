@extends('layouts.app')
@section('title', 'Администрирование')
@section('content')

<!-- Page Layout here -->
<div class="row">
    <div class="col s3">
    <!-- Grey navigation panel -->
    @include('dashboard.components.navbar')
    @include('dashboard.components.add_admin')
    </div>

    <div class="col s9">
    <!-- Teal page content  -->
    {{-- SHOW ADMINS --}}
        @if (count($admins) > 1)
        <table class="striped">
        <thead>
            <tr>
                <th>Логин</th>
                <th>Фамилия</th>
                <th>Имя</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admins as $admin)
                @if ($admin->role == 'admin')
                <tr>
                    <td>{{ $admin->login }}</td>
                    <td>{{ $admin->surname }}</td>
                    <td>{{ $admin->name }}</td>
		 {{-- EDIT --}}
                    <td>
            		 @include('dashboard.components.edit_admin')
                    </td>
		{{-- DELETE --}}
                    <td>
            		@include('dashboard.components.del_admin')
            		</td> {{-- DELETE --}}
                </tr>
                @endif
            @endforeach
        </tbody>
        </table>
        @else
            <h3>Пока что нет администраторов</h3>
        @endif
   </div>
</div>
@endsection