@extends('template')


@section('content')
        <div class='row'>
            <div class='col-lg-12'>
                <div class='row'>
                    <div class='col-lg-1 tableColumn'>
                        Make
                    </div>
                    <div class='col-lg-1 tableColumn'>
                        Model
                    </div>
                    <div class='col-lg-1 tableColumn'>
                        Year
                    </div>
                    <div class='col-lg-1 tableColumn'>
                        Description
                    </div>
                    <div class='col-lg-1 tableColumn'>
                        HP
                    </div>
                    <div class='col-lg-1 tableColumn'>
                        MPG
                    </div>
                    <div class='col-lg-1 tableColumn'>
                        MSRP
                    </div>
                    <div class='col-lg-1 tableColumn'>
                        Offer
                    </div>
                </div>

                @foreach($cars as $car)
                    <div class='row'>
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
                        <div class='col-lg-1 tableColumn'>
                            {{ $car->offer }}
                        </div>


                    </div>
                @endforeach
            </div>
        </div>
@stop
