<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/885c5126e0.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/scss/app.scss'])
    <title>Document</title>
</head>
<body class="form">
<div class="form__title">
    <h1>CREATE <span>BUCKETLIST</span> ITEM</h1>
    <a href="{{ redirect("/") }}"><i class="fa-solid fa-x   fa-xl" style="color: #000000;"></i></a>
</div>

<form method="post" action="{{ route('items.store') }}">
    @csrf
    <label>
        Titel van je bucketlist item
        <input name="name" type="text">
    </label>
    <label>
        Beschrijving van je bucketlist item
        <textarea name="description"></textarea>
    </label>

    <input type="submit" value="Submit">
</form>
</body>
</html>
