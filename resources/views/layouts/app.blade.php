<?php

?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FreeCodeGram') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <div>
                <img src="{{asset('images/Logo.png')}}" alt="Logo" style="height: 60px; width: 80px">
            </div>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="justify-content-center">
                    <a class="link-light ps-3" href="{{url('')}}" style="color: black; text-decoration: none">Hlavná stránka</a>
                </div>
               <div class="justify-content-center">
                   <a class="link-light ps-3" href="{{url('table')}}" style="color: black; text-decoration: none">Tabuľka menín</a>
               </div>
                <div class="col-md-4 ">
                    <form action="" method="get" role="search" id="search-form">
                        <div class="input-group">
                            <input type="text" id= "search" autocomplete="off" class="form-control" name="search" placeholder="Search Name">
                        </div>
                        <div class="dropdown-menu" id="search-autocomplete">


                        </div>
                    </form>

                </div>

            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>

<script>
    $( 'input' ).on('focusout', function () {
        setTimeout(() => {
            $("#search-autocomplete").hide();
        }, 100);
    });

    $("#search").on("input", function () {
        if ($("#search").val().length < 3) {
            $('#search-autocomplete').empty();
            $("#search-autocomplete").hide();
            return;
        }

        $.get(`{{route('profile.search')}}?search=${$("#search").val()}`, function (data) {
            $('#search-autocomplete').empty();

            data.results.forEach((result) => {
                $('#search-autocomplete').append('<a href="{{ URL::asset('/profile/detail') }}/'+result.name +'" class="dropdown-item" value="'+ result.name +'">'+ result.name+'</a>');
            })

            if (data.results.length > 0) {
                $("#search-autocomplete").show();
            }
        });
    });

</script>

