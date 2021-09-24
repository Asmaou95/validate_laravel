<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnage;

class ActionController extends Controller
{
    public function rajout(Request $request){
        $personnage = new Personnage;

        $personnage->nom = $request->name;
        $personnage->date = $request->date;
        $personnage->annonce = $request->annonce;
        $personnage->createur_id = $request->createur_id;
        $personnage->detail = $request->detail;
        $personnage->save();
        $personnage->genre()->attach($request->genre);

        return redirect('/acteurs');
    }

    public function deletepersonnage(Request $request){
        $personnage = Personnage::find($request->id);
        $personnage->delete();
        $personnage = Personnage::find($request->id);
        $personnage->genres()->detach();
        $personnage->delete();
        // Personnage::destroy($request->id);
        return redirect('/acteurs');
    }

    
    public function actualisePersonnage(Request $request, $id){
        $personnage = Personnage::findOrFail($id);
        $personnage->nom = $request->nom;
        $personnage->createur_id = $request->createur_id;
        $personnage->date = $request->date;
        $personnage->annonce = $request->annonce;
        $personnage->detail = $request->detail;
        $personnage->save();
        $personnage->genres()->sync($request->genres);
        return redirect('/acteurs');
    }
}