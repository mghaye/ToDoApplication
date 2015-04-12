@extends('app')

@section('content')
    <h1>Registered Users</h1>
    <ul>
        @forelse($users as $user)
            <li>{{$user->name}}</li>({{$user->email}})</li>
        @empty
            <li>No registered users</li>
        @endforelse
    </ul>








@endsection

