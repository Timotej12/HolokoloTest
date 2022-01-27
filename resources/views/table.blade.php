

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-1" >

                    <div class="card-header text-center">
                        <h1 class="p-lg-2">Tabulka menin</h1>
                    </div>
                    <div class="card-body text-center">
                        <table class="table table-striped">
                            <tr>
                                <td>Meno</td>
                                <td>Datum</td>
                            </tr>
                            @foreach ($data as $value)
                                <tr>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->date }}</td>
                                    <td><button class="btn btn-secondary">checkout</button></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

