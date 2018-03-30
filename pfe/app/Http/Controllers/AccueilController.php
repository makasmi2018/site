<?php

    namespace App\Http\Controllers;
    use App\Models\Actualite;
    use App\Models\Event;
    use App\Models\Slide;
    use App\Models\Galerie;
    use App\Models\Presse;
    use App\Models\Formationscontinue;
    use Illuminate\Http\Request;
    use App\User;
    use App\Http\Controllers\Controller;
    class AccueilController extends Controller {
        
        public function index()
        {
            $actus=Actualite::where('archived',0)->orderBy('date_actu','desc')->paginate(2);
            $evenements=Event::orderBy('date_event','desc')->get()->take(3);
            $slides=Slide::orderBy('date_img','desc')->get()->take(7);
            $galeries=Galerie::orderBy('id_galerie_img','desc')->get();
            $presses=Presse::orderBy('id_prs','desc')->get();
            return view ('Accueil', compact('actus','evenements','slides','galeries','presses'));
        }
        
    }
?>