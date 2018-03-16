@extends('layouts.app')

@section('content')
    <h1 class="text-center">Create todo</h1>
    {!! Form::open(['route' => 'todo.store']) !!}
    {{--empty string is value--}}
    {{ Form::bsText('text','',array_merge(['placeholder' => 'Enter title']) ) }}
    {{ Form::bsTextArea('body') }}
    {{ Form::bsText('due') }}
    {{ Form::bsSubmit() }}

    {!! Form::close() !!}
@endsection