@extends('app')
 
@section('content')
    <h2>Create Todo</h2>

        {!! Form::model(new App\Task, ['route' => ['tasks.store']]) !!}
            {!!Form::hidden('user_id',Auth::user()->id)!!}
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
                {!! Form::submit('Create Todo') !!}
            </div>
        {!! Form::close() !!}
@endsection