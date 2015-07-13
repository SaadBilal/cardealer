@extends('template')


@section('content')
        <div class='row'>
            <div class='col-lg-12'>
                <div class='row'>
                    <div class='col-lg-1 tableColumn'>
                        <b>Make</b>
                    </div>
                    <div class='col-lg-1 tableColumn'>
                        <b>Model</b>
                    </div>
                    <div class='col-lg-1 tableColumn'>
                        <b>Year</b>
                    </div>
                    <div class='col-lg-1 tableColumn'>
                        <b>Description</b>
                    </div>
                    <div class='col-lg-1 tableColumn'>
                        <b>HP</b>
                    </div>
                    <div class='col-lg-1 tableColumn'>
                        <b>MPG</b>
                    </div>
                    <div class='col-lg-1 tableColumn'>
                        <b>MSRP</b>
                    </div>
                    <div class='col-lg-2 tableColumn'>
                        <b>Offer</b>
                    </div>
                </div>

                @foreach($cars as $car)
                    <div class='row clickable-row' id={{ $car->id }}>
                        <div class='col-lg-1 tableColumn'>
                            {{ $car->make }}
                        </div>
                        <div class='col-lg-1 tableColumn'>
                            {{ $car->model }}
                        </div>
                        <div class='col-lg-1 tableColumn'>
                            {{ $car->year }}
                        </div>
                        <div class='col-lg-1 tableColumn'>
                            {{ $car->description }}
                        </div>
                        <div class='col-lg-1 tableColumn'>
                            {{ $car->hp }}
                        </div>
                        <div class='col-lg-1 tableColumn'>
                            {{ $car->mpg }}
                        </div>
                        <div class='col-lg-1 tableColumn'>
                            {{ $car->msrp }}
                        </div>
                        <div class='col-lg-2 tableColumn'>
                            {{ $car->offer }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@stop
