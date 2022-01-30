

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-1" >

                    <div class="card-header text-center">
                        <h1 class="p-lg-2">Tabuľka menin</h1>
                    </div>
                    <div class="card-body text-center">
                        <table class="table table-striped">
                            <tr>
                                <td><h4>Meno</h4></td>
                                <td><h4>Dátum</h4></td>
                            </tr>
                            @foreach ($data as $value)
                                <tr>
                                    <td><strong>{{ $value->name }}</strong></td>
                                    <td>{{ $value->date }}</td>
                                    <input type="hidden" value="{{$value->name}}" name="data-name"/>
                                    <td><button class="btn btn-secondary" onclick="window.location='{{ url("profile/detail/$value->name")}}'">Zobraz profil</button></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

