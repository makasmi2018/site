<?php

    namespace App\Http\Controllers;
    use App\Models\Formationscontinue;
    use App\Models\Formationli;
    class FormationsController extends Controller {
        
        public function index()
        {
            $formationlis=Formationli::orderBy('id_mod','asc')->get();
            $formationscontinues=Formationscontinue::orderBy('id_for_con','asc')->get();
            return view ('formation/formation_con', compact('formationscontinues'));
            return view ('formation/formation_li', compact('formationlis'));
        }
        
    }
?>