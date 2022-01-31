

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-1" >
                    <div class="card-header text-center">
                        <h1 class="p-lg-2">Dnes je {{date("d. M. Y")}}</h1>
                    </div>
                    <div class="card-body text-center">
                        <h3>Dnes má meniny {{$name->name}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
