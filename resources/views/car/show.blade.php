@extends('template')


@section('content')

    <div class='row'>
        <div class='col-lg-2'> <b>Make:</b> </div>
        <div class='col-lg-10'> {{ $car->make }} </div>
    </div>

    <div class='row'>
        <div class='col-lg-2'> <b>Model:</b> </div>
        <div class='col-lg-10'> {{ $car->model }} </div>
    </div>
    
    <div class='row'>
        <div class='col-lg-2'> <b>Year:</b> </div>
        <div class='col-lg-10'> {{ $car->year }} </div>
    </div>
    
    <div class='row'>
        <div class='col-lg-2'> <b>MPG:</b> </div>
        <div class='col-lg-10'> {{ $car->mpg }} </div>
    </div>
    
    <div class='row'>
        <div class='col-lg-2'> <b>HP:</b> </div>
        <div class='col-lg-10'> {{ $car->hp }} </div>
    </div>
    
    <div class='row'>
        <div class='col-lg-2'> <b>MSRP:</b> </div>
        <div class='col-lg-10'> ${{ $car->msrp }} </div>
    </div>
    
    <div class='row'>
        <div class='col-lg-2'> <b>Description:</b> </div>
        <div class='col-lg-10'> {{ $car->description }} </div>
    </div>
    
    <div class='row'>
        <div class='col-lg-2'> <b>Offer:</b> </div>
        <div class='col-lg-10'> {{ $car->offer }} </div>
    </div>

@stop
