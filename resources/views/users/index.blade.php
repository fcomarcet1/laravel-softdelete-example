<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>User list</h2>
    <h3>User count: {{$usersCount}}</h3>
    @foreach ($users as $user)
        <ul>
            <li>{{ $user->name }} || {{ $user->delete_at }}</li>
        </ul>
    @endforeach
    <br/>    
    {{-- <h3>count: {{ $usersCount}}</h3> --}}
    <h3>CountDeleted withTrashed: {{ $userWithTrashedCount}}</h3>
    @foreach ( $userWithTrashed as $uwt )
        <ul>
            <li>{{ $uwt }}</li>
        </ul>
    @endforeach
    <br/>    
    <h3>CountDeleted OnlyTrashed: {{ $userOnlyTrashedCount}}</h3>
    @foreach ( $userOnlyTrashed as $uot )
        <ul>
            <li>{{ $uot }}</li>
        </ul>
    @endforeach
    <h4>userOnlyTrashed: {{ $userOnlyTrashed }}</h4>
  
</body>
</html>