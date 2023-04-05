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
    <h1>MY <span>BUCKETLIST</span></h1>
    <a href="{{ route('items.create') }}"><i class="fa-solid fa-plus fa-xs" style="color: #000000;"></i></a>
</nav>
<ul>
    @foreach ($items as $item)
        <li>
            <a href="{{ route('items.show', $item->id) }}">

                {{ $item->name }}
            </a>
        </li>
    @endforeach
</ul>
</body>
</html>
