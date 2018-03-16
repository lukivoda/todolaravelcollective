@extends('layouts.app')

@section('content')
    <h1 class="text-center">Edit todo</h1>
    {!! Form::open(['route' => ['todo.update',$todo->id ], 'method' => 'PUT']) !!}
    {{--empty string is value--}}
    {{ Form::bsText('text',$todo->text,array_merge(['placeholder' => 'Enter title']) ) }}
    {{ Form::bsTextArea('body',$todo->body) }}
    {{ Form::bsText('due',$todo->due) }}
    {{ Form::bsSubmit() }}

    {!! Form::close() !!}
@endsection