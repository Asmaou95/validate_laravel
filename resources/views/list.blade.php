
@extends('layouts.base')

@section('title', 'acteurs')
@section('css', 'list')
<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/list.css">

@section('content')
<h1>Liste des personnages</h1>

<div class="list">
    <table>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th>année de création</th>
                <th>bande Annonce</th>
                <th>genre</th>
                <th>Createur</th>
                <th>detail</th>
                <th>supp</th>
            </tr>
    @foreach ($personnages as $personnage)
    <tr>
        <td>{{$personnage->id}}</td>
        <td><a href="/descript/{{$personnage->id}}">{{$personnage->name}}</a></td>
        <td>{{$personnage->date}}</td>
        <td>{{$personnage->annonce}}</td>
        <td>
            @foreach ($personnage->genres as $genre)
                <p>{{ $genre->name }}</p>
            @endforeach
        </td>
        <td>{{$personnage->createur->name}}</td>
        
        <td>
            <a href="/actualise/{{ $personnage->id }}" class="btn btn-primary">MAJ</a>
        </td>
        <td>
            <form action="/delete" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $personnage->id}}">
                <input type="submit" value="sup">
            </form>
        </td>
    </tr>
@endforeach
    </table>
</div>

@endsection