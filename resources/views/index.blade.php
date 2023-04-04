<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <script src="https://kit.fontawesome.com/885c5126e0.js" crossorigin="anonymous"></script>
    <title>TEST</title>
    <style>
        h1 {
            font-size: 2.5rem;
            font-weight: 300;
            color: black;
        }

        body {
            background-color: #f5f5f5;
            font-family: roboto;
        }

        nav {
            margin: 2.5rem 0 0 5rem;
            display: flex;
            gap: 10px;
            align-items: center;
        }

        ul {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }

        li {
            list-style: none;
            margin: 1rem 2rem;
            padding: 1rem;
            border: 1px solid black;
        }

        span {
            color: grey;
        }
    </style>
</head>
<body>
    <nav>
        <h1>MY <span>BUCKETLIST</span></h1>
        <a href="{{ route('items.create') }}"><i class="fa-solid fa-plus fa-xs" style="color: #000000;"></i></a>
    </nav>
    <ul>
        @foreach ($items as $item)
            <li>{{ $item->name }}</li>
        @endforeach
    </ul>
<p>TEST</p>
</body>
</html>
