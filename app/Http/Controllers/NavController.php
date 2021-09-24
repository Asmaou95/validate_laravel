<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnage;
use App\Models\Createur;
use App\Models\Genre;

class NavController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function rajout(){
        $createurs = Createur:: all()->sortBy('name');
        $genres = Genre::all();
        return view('rajout', ['createurs' => $createurs, 'genres' => $genres]);
    }
    //@dd($personnage) = remplace vardump
    public function list(){
        $personnages = Personnage::all();
        return view('list', ['personnages' => $personnages]);
        
    }

    public function descript($id){
        $personnages = Personnage::find($id);
        return view('descript', ['personnage' => $personnages]);
    }

    public function actualisePersonnage($id) {
        $personnage = Personnage::findOrFail($id);
        $createurs = Createur::all()->sortBy('name');
        $genres = Genre::all();
        return view('actualise', [
            'personnage' => $personnage, 
            'createurs' => $createurs, 
            'genres' => $genres
        ]);
    }
}