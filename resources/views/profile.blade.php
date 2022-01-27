

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-1" >

                    <div class="card-header text-center">
                        <h1 class="p-lg-2">Profil</h1>
                    </div>
                    <div class="card-body text-center">
                        @foreach ($data as $value)
                        <h2>{{$value->name}} ma meniny {{$value->date}}</h2>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


