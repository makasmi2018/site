<?php
namespace App\Http\Controllers;
use App\Models\Actualite;
use Illuminate\Http\Request;



class actualiteController extends Controller
{
    public function ajouterActu(Request $request){
        $actu= new Actualite;
        $actu->texte_actu=$request->input('texte_actu');
        $actu->date_actu=$request->input('date_actu');
        $actu->image_actu=$request->input('image_actu');
       $actu->save();
    }
}

?>