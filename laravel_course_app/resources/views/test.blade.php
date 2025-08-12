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
        @foreach ( $users as $user )
            <h4>{{ $user->name }}</h4>
            @foreach ( $user->addresses as $address)
                <p>Address: {{ $address->country }}</p>
            @endforeach
            <hr>
        @endforeach
    </div>
    {{-- <div>
        @foreach ( $addresses as $address )
            <h4>{{ $address->country }}</h4>
            <p>User: {{ $address->user_id ? $address->user->name : '' }}</p>
            <hr>
        @endforeach
    </div> --}}
</body>
</html>