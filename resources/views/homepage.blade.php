<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Homepage</h1>
    <p>Blade template test</p>
    <a href="/about">go to the about page</a>

    <h3>Name: {{ $name }}, Number: {{ $number }}</h3>

    <ul>
        @foreach ($allAnimals as $animal)
            <li>{{ $animal }}</li>
        @endforeach
    </ul>

</body>

</html>
