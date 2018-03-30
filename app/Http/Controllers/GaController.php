<?php

    namespace App\Http\Controllers;
    use App\Models\GA\Filieresga;
    use App\Models\GA\Modulesga;
    use App\Models\GA\Objectivesformationsga;
    use App\Models\GA\Compacquerirega;
    use App\Models\GA\Competencesga;
    class GaController extends Controller {
        
        public function index()
        {
            $filieresgas=Filieresga::where('id_fil_ga',1)->get();
            return view ('filieres_ga/EII', compact('filieresgas'));
        }
        
    }
?>