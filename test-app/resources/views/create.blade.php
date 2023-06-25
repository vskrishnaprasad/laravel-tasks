<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lara-about</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

<body>
    <h1>create user</h1>
    <div class="container">
        <form action="{{ route('store')}}" method="post">
            @csrf
            @method('post')
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name"value="{{'name'}}"class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter Your Name">
               
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Email</label>
                <input type="email"  name="email"value="{{'email'}}"class="form-control" id="" placeholder="Enter Your Email">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>