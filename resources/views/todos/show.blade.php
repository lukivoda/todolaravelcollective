@extends('layouts.app')

@section('content')
    @if($todo)
        <h2 class="pull-left"><a href="{{route('todo.index')}}">Back</a></h2><h1 class="text-center">{{$todo->text}}</h1>
        <div class="well">
            <h3> {{$todo->body}} </h3>
            <span class="label label-danger">{{$todo->due}}</span> <br><br>
            <div><a class="btn btn-warning" href="{{route('todo.edit',$todo->id)}}">Edit</a>
                <div class="pull-right">
                {!! Form::open(['route' => ['todo.destroy',$todo->id ], 'method' => 'DELETE']) !!}
                {{ Form::bsSubmit('Delete',array_merge(['class' => 'btn btn-danger'])) }}
                {!! Form::close() !!}
                </div>
        </div>
    @endif
@endsection