@extends('template')


@section('content')

        {!! Form::open(['url' => '/auth/login', 'method' => 'POST', 'class' => 'form-horizontal']) !!}

            <div class='form-group'>
                {!! Form::label('email', "Email:", ['class' => 'control-label col-lg-2']) !!}
                <div class='col-lg-2'>
                    {!! Form::email('email', old('email'),['class' => 'form-control']) !!}
                </div>
            </div>

            <div class='form-group'>
                {!! Form::label('password', 'Password:', ['class' => 'control-label col-lg-2']) !!}
                <div class='col-lg-2'>
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>
            </div>

            <div class='form-group'>
                    <div class='col-lg-2 text-right'>
                        {!! Form::checkbox('remember', 1, false) !!}
                    </div>
                    {!! Form::label('remember', 'Remember me', ['class' => 'col-lg-2 text-left']) !!}
            </div>

            <div class='form-group'>
                <div class='col-lg-1 col-lg-offset-2'>
                    {!! Form::submit('Login', ['class' => 'btn btn-primary form-control']) !!}
                </div>
            </div>

        {!! Form::close() !!}

    
@stop
