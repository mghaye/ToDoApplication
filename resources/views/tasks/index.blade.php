@extends('app')
 
@section('content')
    <h2>Todos</h2>

        @if ( !$tasks->count() )
            You have no projects
        @else
            <table class="table table-striped">


                @foreach( $tasks as $task )
                    <tr>
                    <td>
                    {!! Form::open(array(
                        'class' => 'form-inline',
                        'method' => 'DELETE',
                        'route' => array('tasks.destroy', $task->id))) !!}
                        <a href="{{ route('tasks.show', $task->id) }}">{{ $task->name }}</a>
                    </td>
                    <td>
                        {!! link_to_route('tasks.edit', 'Edit', array($task->id), array('class' => 'btn btn-info')) !!}
                    </td>
                    <td>
                        {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                    </td>
                    {!! Form::close() !!}

                    </tr>
                @endforeach
            </table>
        @endif
        <p>
            {!! link_to_route('tasks.create', 'Create Todo') !!}
        </p>

@endsection