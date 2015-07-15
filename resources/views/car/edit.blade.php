@extends('template')


@section('content')

    {!! Form::model($car, ['method' => 'PATCH', 'route' => ['car.update', $car->id], 'class' => 'form-horizontal']) !!}
        @include('car.form')
    {!! Form::close() !!}

@stop
