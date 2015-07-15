@extends('template')


@section('content')

    {!! Form::open(['url' => '', 'method' => 'post', 'class' => 'form-horizontal']) !!}
        
        @include('car.form')
        
    {!! Form::close() !!}

@stop
