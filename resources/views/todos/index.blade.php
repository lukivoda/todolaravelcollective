@extends('layouts.app')

@section('content')
@if(count($todos) > 0)
    <h1 class="text-center">Todos</h1>

      @foreach($todos as $todo)
          <div class="well">
              <h3><a href="{{route('todo.show',$todo->id)}}">{{$todo->text}}</a> <span class="label label-danger">{{$todo->due}}</span></h3>

          </div>
      @endforeach
   @endif
@endsection