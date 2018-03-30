<?php

    namespace App\Http\Controllers;
    use App\Models\Axeslabo;
    use App\Models\Equipeslabo;
    use App\Models\Labo;
    use App\Models\Membreslabo;
    use App\Http\Controllers\Controller;
    class LabosController extends Controller {
        
        public function index()
        {
            $axeslabos=Axeslabo::orderBy('id_axe','asc')->get();
            $equipeslabos=Equipeslabo::get();
            $labos=Labo::where('id_labo', 1)->get();
            $membreslabos=Membreslabo::orderBy('id_mem','asc')->get();
            return view ('rechscien/labo', compact('axeslabos','equipeslabos','membreslabos','labos'));
        }
        
    }
?>