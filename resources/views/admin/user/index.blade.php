@extends('app')

@section('content')
    <h1>Registered Users</h1>
    <ul>

        @forelse($users as $user)
            {!! Form::open(array(
            'class' => 'form-inline',
            'method' => 'DELETE',
            'route' => array('admin.user.destroy', $user->id))) !!}
            <li>{{$user->name}} ({{$user->email}})</li>

            <ul>
                @foreach($user->tasks as $task)
                   <li>{{$task->name}}</li>
                @endforeach

            </ul>
            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}

            {!! Form::close() !!}

        @empty
            <li>No registered users</li>
        @endforelse
    </ul>








@endsection

