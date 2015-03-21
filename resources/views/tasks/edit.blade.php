@extends('app')
 
@section('content')
    <h2>Edit Todo</h2>

        {!! Form::model($task, ['method' => 'PATCH', 'route' => ['tasks.update', $task->id]]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name') !!}
            </div>



            <div class="form-group">
                {!! Form::label('completed', 'Completed:') !!}
                {!! Form::checkbox('completed') !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description:') !!}
                {!! Form::textarea('description') !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Edit Todo') !!}
            </div>
        {!! Form::close() !!}
@endsection