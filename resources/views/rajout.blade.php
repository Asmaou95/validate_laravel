@extends('layouts.base')

@section('title', 'rajout')

@section('css', 'rajout')

<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/rajout.css">

@section('content')

<h1>Ajouter une Dessinateur</h1>
    <div class="container">
        <form action="/rajouter" method="POST">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Nom</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="title" placeholder="Titre" value="Yasmina Picquart">
                </div>
            </div>

            <div class="form-group row">
                <label for="date" class="col-sm-4 col-form-label">Année de naissance</label>
                <div class="col-sm-8">
                        <input type="number" class="form-control" name="date" placeholder="date" value="1990">
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="createur" class="col-sm-4 col-form-label">Nationalité</label>
                <div class="col-sm-8">
                    <select name="createur_id">
                        @foreach ($createurs as $createur)
                            <option value="{{ $createur->id }}">{{ $createur->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="genre" class="col-sm-4 col-form-label">Genres</label>
                <div class="col-sm-8">
                    @foreach ($genres as $genre)
                        <input type="checkbox" class="form-check-input" name="genres[]" value="{{$genre->id}}">
                        <label for="">{{ $genre->name }}</label>
                    @endforeach
                </div>
            </div>
            <div class="form-group row">
                <label for="detail" class="col-sm-4 col-form-label">Détail</label>
                <div class="col-sm-8">
                    <textarea name="detail" id="" cols="24" rows="2">detail du personnage!</textarea>
                </div>
            </div>
            <div class="btn-div">
                <button type="submit" class="btn btn-light">Ajouter !</button>
            </div>
        </form>
    </div>
@endsection