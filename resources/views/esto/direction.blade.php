@extends('layout.application')
    @section('title')
        Direction ESTO 
    @endsection
   @section('main')
   <div class="direction">
              <div class="tete_direc">
                  <h1> DIRECTION </h1>
               </div>
               <div class="esto_droit">
                  <p>
                   <a href="{{url('motdirecteur')}}">MOT DE DIRECTEUR</a><br><br>

                   ----------------------<br><br>

                   <a href="{{ url('ecolechiffre') }}">L’ECOLE EN CHIFFRE</a><br><br>

                  ----------------------<br><br>

                 DIRECTION<br><br>

                  ----------------------<br><br>

                  <a href="{{ url('cahiernormespeda') }}">CAHIER DES NORMES  
	     	     PEDAGOGIQUES</a><br><br>

                  ----------------------<br><br>

                  <a href="{{ url('services') }}">SERVICES DE L’ADMINISTRATION</a><br>
                   </p>
               </div>
               <div class="contenu_direc">
                  <div class="directeur">
                      <h2>Le Directeur </h2>
                      <hr style="height: 7px; color: #e6e6e6; width: 100%; background: #e6e6e6;">
                      <img src="images/socialNetwork/directeur.png">
                      <p>
                          Mr . Yassine ZARHLOULE
                      </p>
                      <p>
                      ...........................................
                      </p>
                  </div>
                  <div class="directeur_ad">
                      <h2>Le Directeur Adjoint </h2>
                      <hr style="height: 7px; color: #e6e6e6; width: 100%; background: #e6e6e6;">
                      <img src="images/socialNetwork/directeur_ad.png">
                      <p>
                          Mr. Rachid. HAJBI
                      </p>
                      <p>
                      ...........................................
                      </p>
                  </div>
                  <div class="secr_gen">
                      <h2>Le Secretaire General </h2>
                      <hr style="height: 7px; color: #e6e6e6; width: 100%; background: #e6e6e6;">
                      <p>
                          Mr. El hassane HAOULI
                      </p>
                  </div>
               </div>
</div>
   @endsection