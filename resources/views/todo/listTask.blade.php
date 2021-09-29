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
            background-color: gray;
        }

        .h1 {
            font-size: 70px;
            color: rgb(22, 183, 189);
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
    @if (Session::has('success'))
    <div class="div alert alert-success">
        <h1> {{ Session::get('success') }}</h1>
    </div>
    @endif
    <a href="{{ route('add new task') }}" class="link">Add New Task=></a>

    <h1 class="text-center m-5 h1">All Tasks</h1>

    <div class="container col-6">
        <table class="table table-dark table-bordered">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TasK</th>
                    <th scope="col">Created At</th>
                    <th scope="col" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <th scope="row">{{ $task->id }}</th>
                        <td>{{ $task->task }}</td>
                        <td>{{ $task->created_at }}</td>
                        <td><button class="btn btn-primary"><a class="text-white" href="{{ route('update', $task->id) }}">Edit</a></button></td>
                        <td><button class="btn btn-danger"><a class="text-white"
                                    href="{{ route('delete', $task->id) }}">Delete</a></button></td>

                    </tr>
                @endforeach
            </tbody>
        </table>
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
