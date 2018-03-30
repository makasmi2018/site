@extends('layout.application')
    @section('title')
        Bourses d'Etudes
    @endsection
   @section('main')
         <div class="bourses">
               <div class="tete_espace">
                  <h1> BOURSES D’ETUDES </h1>
               </div>
               <div class="espace_droit">
                  <p>
                   <a href="{{ url('emptem') }}">Emplois du temps </a><br><br>

                   ----------------------<br><br>

                   <a href="{{ url('calendrier') }}">Calendrier 2017/2018 </a><br><br>

                  ----------------------<br><br>

                 <a href="{{ url('projfin') }}">Projets de Fin d'Etudes </a><br><br>

                  ----------------------<br><br>

                  Bourses d'études <br><br>

                  ----------------------<br><br>

                  <a href="#">Activités parascolaires </a><br><br>

                  ----------------------<br><br>
                  <a href="{{ url('qfadut') }}">Que faire après DUT?  </a><br><br>

                  ----------------------<br><br>
                  <a href="#">Projets en vidéo  </a><br>
                   </p>
               </div>
               <div class="bour">
                   <p>
                   <a href="#"><img src="/img/icones/ico2.png"> Bourses Andounésie</a><br><br>
                       <span>--------------------------------------------</span><br><br>
                   <a href="#"><img src="/img/icones/ico2.png"> Bourses d’études en Hongrie au titre de l’année universitaire &nbsp; &nbsp; &nbsp; &nbsp; 2016-2017.   </a><br><br>
                  <span>--------------------------------------------</span><br><br>
                 <a href="#"><img src="/img/icones/ico2.png"> Programme Stipendium Hungaricum</a> <br><br>
                  <span>--------------------------------------------</span><br><br>
                  <a href="#"><img src="/img/icones/ico2.png"> Annex1_Call_for_Applications_2016_2017.pdf </a><br><br>
                  <span>--------------------------------------------</span><br><br>
                  <a href="#"><img src="/img/icones/ico2.png"> Annex2_SH_leporello.pdf </a><br>
                   </p>
               </div>
</div>
@endsection