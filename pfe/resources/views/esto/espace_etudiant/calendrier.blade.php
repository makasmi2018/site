@extends('layout.application')
    @section('title')
        Clendrier 2017/2018
    @endsection
   @section('main')
            <div class="calendrier">
               <div class="tete_espace">
                  <h1> CALENDRIER 2017/2018  </h1>
               </div>
               <div class="espace_droit">
                  <p>
                   <a href="{{ url('emptem') }}">Emplois du temps </a><br><br>

                   ----------------------<br><br>

                   Calendrier 2017/2018 <br><br>

                  ----------------------<br><br>

                 <a href="{{ url('projfin') }}">Projets de Fin d'Etudes </a><br><br>

                  ----------------------<br><br>

                  <a href="{{ url('bourses') }}">Bourses d'études </a><br><br>

                  ----------------------<br><br>

                  <a href="#">Activités parascolaires </a><br><br>

                  ----------------------<br><br>
                  <a href="{{ url('qfadut') }}">Que faire après DUT?  </a><br><br>

                  ----------------------<br><br>
                  <a href="#">Projets en vidéo  </a><br>
                   </p>
               </div>
               <div class="calen">
                   <p>
                       <a href="#">Calendrier 1ère Année</a><br><br>.......................................................<br><br>
                       <a href="#">Calendrier 2ème Année</a>
                   </p>
               </div>
</div>
@endsection