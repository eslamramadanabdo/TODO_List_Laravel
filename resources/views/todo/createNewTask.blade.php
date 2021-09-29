<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        body {
            background-color: black;
        }

        .h1 {
            font-size: 70px;
            color: rgb(22, 183, 189);
        }

        label {
            display: black;
            width: 100%;
            font-size: 40px;
            font-weight: bold;
            text-align: center
        }

        input {
            padding: 10px;
            margin: 5px;
        }

        .b1 {
            padding: 5px;
            margin: 5px;
            font-size: 40px;
            font-weight: bold;
        }

        .form-control {
            height: 60px;
            font-size: 2rem;
        }

        .link {
            font-size: 40px;
            font-weight: bold;
        }

    </style>

</head>

<body>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <h1 class="text-center m-5 h1">Welcom At TODO App</h1>
    <div class="container col-6">

        @if (Session::has('success'))
        <div class="div alert alert-success">
            <h1> {{ Session::get('success') }}</h1>
        </div>
        @endif
        <form method="POST" action="{{ route('savetask') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputTask " class="text-danger text-center">Add New Task</label>
                <input type="text" class="form-control" id="exampleInputTask" name="task">
                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>


            <button type="submit" class="btn btn-primary btn-block b1">Add</button>
        </form>


        <a href="{{route('show')}}" class="link d-block text-center">All Tasks =></a>
    </div>





    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
    </script>
</body>

</html>
