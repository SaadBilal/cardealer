@extends('template')


@section('content')

    {!! Form::open(['url' => '', 'method' => 'post', 'class' => 'form-horizontal']) !!}
        
        <div class='form-group'>
            {!! Form::label('make', 'Make:', ['class' => 'control-label col-lg-1']) !!}
            <div class='col-lg-2'>
                {!! Form::text('make', '', ['class' => 'form-control', 'maxlength' => '15', 'size' => '15']) !!}
            </div>
        </div>
        
        <div class='form-group'>
            {!! Form::label('model', 'Model:', ['class' => 'control-label col-lg-1']) !!}
            <div class='col-lg-2'>
                {!! Form::text('model', 'Model', ['class' => 'form-control', 'maxlength' => '15', 'size' => '15']) !!}
            </div>
        </div>
        
        <div class='form-group'>
            {!! Form::label('year', 'Year:', ['class' => 'control-label col-lg-1']) !!}
            <div class='col-lg-2'>
                {!! Form::number('year', '2015', ['class' => 'form-control', 'min' => '1950', 'max' => '2020']) !!}
            </div>
        </div>
        
        <div class='form-group'>
            {!! Form::label('description', 'Description:', ['class' => 'control-label col-lg-1']) !!}
            <div class='col-lg-4'>
                {!! Form::textarea('description', 'Description', ['class' => 'form-control', 'maxlength' => '255', 'rows' => 3]) !!}
            </div>
        </div>
        
        <div class='form-group'>
            {!! Form::label('mpg', 'MPG:', ['class' => 'control-label col-lg-1']) !!}
            <div class='col-lg-2'>
                {!! Form::number('mpg', '0', ['class' => 'form-control', 'min' => '0', 'max' => '100']) !!}
            </div>
        </div>
        
        <div class='form-group'>
            {!! Form::label('hp', 'HP:', ['class' => 'control-label col-lg-1']) !!}
            <div class='col-lg-2'>
                {!! Form::number('hp', '0', ['class' => 'form-control', 'min' => '0', 'max' => '1200']) !!}
            </div>
        </div>
        
        <div class='form-group'>
            {!! Form::label('msrp', 'MSRP:', ['class' => 'control-label col-lg-1']) !!}
            <div class='col-lg-2'>
                {!! Form::number('msrp', '0', ['class' => 'form-control', 'min' => '0', 'max' => '9999999']) !!}
            </div>
        </div>
        
        <div class='form-group'>
            {!! Form::label('offer', 'Offer:', ['class' => 'control-label col-lg-1']) !!}
            <div class='col-lg-4'>
                {!! Form::textarea('offer', 'Offer', ['class' => 'form-control', 'maxlength' => '255', 'rows' => 3]) !!}
            </div>
        </div>
        
    {!! Form::close() !!}

@stop
