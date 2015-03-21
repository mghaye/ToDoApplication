@extends('app')
 
@section('content')
   {{$task->name}}

   <br/>
   {{$task->description}}

   <br/>
   @if($task->completed)
        <input type="checkbox" disabled="disabled" class="checkbox" checked>
   @else
        <input type="checkbox" disabled="disabled" class="checkbox">
   @endif
   <br/>
   <a href="{{route('tasks.index')}}">Terug naar overzicht</a>
@endsection