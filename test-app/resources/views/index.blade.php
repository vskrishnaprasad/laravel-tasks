<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lara</title>

</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<body>
    <h1>Welcome</h1>

    <div style="float:right; margin-right:100px;"> <a href="{{ route('create')}}" class="btn btn-primary">new</a></div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">action</th>

            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <a href="{{ route('edit',$user->id) }}" class="btn btn-success">Edit</a>
                    <a href="{{ route('distroy', $user->id )}}" class="btn btn-danger">Delete</a>
                </td>

            </tr>
            @endforeach

        </tbody>
    </table>