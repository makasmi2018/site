@extends('layout.application')
    @section('title')
        Cahier Des Normes Pedagogiques ESTO 
    @endsection
   @section('main')
               <div class="tete_c_n_p">
                  <h1> CAHIER DES NORMES PEDAGOGIQUES </h1>
               </div>
               <div class="esto_droit">
                  <p>
                   <a href="{{url('motdirecteur')}}">MOT DE DIRECTEUR</a><br><br>

                   ----------------------<br><br>

                   <a href="{{ url('ecolechiffre') }}">L’ECOLE EN CHIFFRE</a><br><br>

                  ----------------------<br><br>

                 <a href="{{ url('direction') }}">DIRECTION</a><br><br>

                  ----------------------<br><br>

                  CAHIER DES NORMES  
	     	     PEDAGOGIQUES<br><br>

                  ----------------------<br><br>

                  <a href="{{ url('services') }}">SERVICES DE L’ADMINISTRATION</a><br>
                   </p>
               </div>
               <div class="c_n_p">
                   <p>
                       <span style="color:#4578c7; font-size:18pt;">NORME 1 :</span><br><br><a href="cahierNormes/cahier1.pdf">Cahier des Normes Pédagogiques Nationales de la Licence d’Etudes Fondamentales et de la Licence Professionnelle (PDF)</a>
                       <br><br><span style="color:#8c9595; font-size:18pt;">.....................................</span>
                   </p>
                   <br><p><span style="color:#4578c7; font-size:18pt;">NORME 2 :</span><br><br><a href="cahierNormes/cahier2.pdf">Cahier des Normes Pédagogiques Nationales de la DUT (PDF)</a>
                   </p>
               </div>
   @endsection