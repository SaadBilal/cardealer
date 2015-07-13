@extends('template')


@section('content')
        <div class='row'>
            <div class='col-lg-12'>
                <table class='table table-hover'>
                    <thead>
                        <tr>
                            <td><b>Make</b></td>
                            <td><b>Model</b></td>
                            <td><b>Year</b></td>
                            <td><b>Description</b></td>
                            <td><b>HP</b></td>
                            <td><b>MPG</b></td>
                            <td><b>MSRP</b></td>
                            <td><b>Offer</b></td>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($cars as $car)
                            <tr class='clickable-row' id={{ $car->id }}>
                                <td>{{ $car->make }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->year }}</td>
                                <td>{{ $car->description }}</td>
                                <td>{{ $car->hp }}</td>
                                <td>{{ $car->mpg }}</td>
                                <td>{{ $car->msrp }}</td>
                                <td>{{ $car->offer }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@stop
