@extends('layouts.base')

@section('title', 'descript')


@section('content')

<h1>Détail de mes personnages</h1>

<body>
    <p>{{$personnage->name}}</p>
    <p>{{$personnage->date}}</p>
    <p>{{$personnage->annonce}}</p>
    <p>{{$personnage->genre}}</p>
    <p>{{$personnage->createur}}</p>
    <p>{{$personnage->detail}}</p>
</body>

@endsection