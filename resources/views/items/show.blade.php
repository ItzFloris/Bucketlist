<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/885c5126e0.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css', 'resources/scss/app.scss'])
    <title>TEST</title>

</head>
<body>
<nav>
    <h1><a href="">MY <span>BUCKETLIST ITEM</span></a></h1>
</nav>
    <div class="box">
        <h1>{{ $item->name }}</h1>
        <p>
            {{ $item->description }}
        </p>
    </div>
</body>
</html>
