@extends('template')


@section('content')

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong>
            There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['url' => url('/car'), 'method' => 'post', 'class' => 'form-horizontal']) !!}
        
        @include('car.form')
        
    {!! Form::close() !!}

@stop
