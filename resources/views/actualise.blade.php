@extends('layouts.base')
@section('css', 'rajout')

@section('title', 'Modifier')

@section('content')
    <h1 class="title">Modifier une personnage</h1>
    <div>
        <form action="/actualise/{{ $personnage->id }}" method="POST">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Titre</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="title" placeholder="Titre" value="{{ $personnage->title }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="createur" class="col-sm-4 col-form-label">Créateur</label>
                <div class="col-sm-8">
                    <select name="createur_id">
                        @foreach ($createurs as $createur)
                            @if ($personnage->createur->id == $createur->id)
                            <option value="{{ $createur->id }}" selected>{{ $createur->name }}</option>
                        @else
                            <option value="{{ $createur->id }}">{{ $createur->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="date" class="col-sm-4 col-form-label">année de création</label>
                <div class="col-sm-8">
                    <input type="number" class="form-control" name="title" placeholder="date" value="{{ $personnage->date }}">
                </div>
            </div>
            <div class="form-group row">
                <label for="annonce" class="col-sm-4 col-form-label">bande annonce</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="title" placeholder="annonce" value="{{ $personnage->annonce }}">
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
                    <textarea name="detail" id="" cols="24" rows="2">{{ $personnage->detail }}</textarea>
                </div>
            </div>
            <div class="btn-div">
                <button type="submit" class="btn btn-light">Envoyer !</button>
            </div>
        </form>
    </div>
@endsection