<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        @foreach ( $countries as $country )
            <h4>{{ $country->name }}</h4>
            <ul>
                @foreach ( $country->cities as $city )
                    <li>{{ $city->name }}</li>
                @endforeach
            </ul>
            <hr>
        @endforeach
    </div>
</body>
</html>