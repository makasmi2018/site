<?php

    namespace App\Http\Controllers;
    use App\Models\Formationli;
    use App\Models\Objectifformationli;
    class FormationliController extends Controller {
        
        public function index()
        {
            $objectifformationlis=Objectifformationli::orderBy('id_obj','asc')->get();
            $formationlis=Formationli::orderBy('id_mod','asc')->get();
            return view ('formation/formation_li', compact('formationlis','objectifformationlis'));
        }
        
    }
?>