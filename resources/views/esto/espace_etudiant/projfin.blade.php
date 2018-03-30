@extends('layout.application')
    @section('title')
        Projets de Fin d'Etudes
    @endsection
   @section('main')
         <div class="projetfin">
               <div class="tete_espace">
                  <h1> PROJETS DE FIN D’ETUDES </h1>
               </div>
               <div class="espace_droit">
                  <p>
                   <a href="{{ url('emptem') }}">Emplois du temps </a><br><br>

                   ----------------------<br><br>

                   <a href="{{ url('calendrier') }}">Calendrier 2017/2018 </a><br><br>

                  ----------------------<br><br>

                 Projets de Fin d'Etudes <br><br>

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
               <div class="profin">
                   <p>
                       <span style="color:#517fc8; font-weight:bold;">PS: </span> &nbsp;&nbsp;&nbsp;Bientôt vous trouverez en ligne une plateforme d'archivage des PFEs (Codes sources + rapport + présentation power point)<br><br>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Chaque étudiant est tenu à faire un Projet de Fin d'Etudes, ci dessous des exemples de PFEs pour l'année universitaires <span style="color:#517fc8;">2013/2014</span> pour la filière TR du département GI  (pour avoir une idée sur les sujets de PFE , prière de contacter votre chef du département ou bien votre responsable de filière)
                   </p>
               </div>
               <div class="encad_ga">
                  <h2>Département Génie Appliqué</h2>
                  <hr style="height:7px; color:white; font-weight:bold; background:white;">
                   <p>
                       <span style="color:#244476; ">Conception et réalisation d'un bras robotique</span> <br>
                       <span style="color:#ffffff; ">=> Encadré par </span> 
                       <span style="color:#ad552e; ">Prof. Bourhaleb Mohammed / Prof KASSMI Kamal</span> <br><br>
                       <span style="color:#244476; ">Contrôle d'un moteur pas à pas avec un μc ATmega 16</span> <br>
                       <span style="color:#ffffff; ">=> Encadré par </span> 
                       <span style="color:#ad552e; ">Prof. Bourhaleb Mohammed</span> <br><br>
                       <span style="color:#244476; ">Réalisation d'une interface de commande pour un bras robotique</span> <br>
                       <span style="color:#ffffff; ">=> Encadré par </span> 
                       <span style="color:#ad552e; ">Prof. Bourhaleb Mohammed</span> <br><br>
                       <span style="color:#244476; ">Conception et Réalisation d'un suiveur solaire avec une base de données de la trajectoire du soleil</span> <br>
                       <span style="color:#ffffff; ">=> Encadré par </span> 
                       <span style="color:#ad552e; ">Prof. Bourhaleb Mohammed</span> <br><br>
                       <span style="color:#244476; ">Conception et Réalisation d'un robot distributeur de dominos . </span><br> 
                       <span style="color:#ffffff; ">=> Encadré par </span> 
                       <span style="color:#ad552e; ">Prof. Bourhaleb Mohammed</span> <br><br>
                   </p>
               </div>
               <div class="encad_gi">
                  <h2>Département Génie Informatique</h2>
                  <hr style="height:7px; color:white; font-weight:bold; background:white;">
                   <p></p>
             </div>
             <div class="encad_tm">
                  <h2>Département  Techniques de Management</h2>
                  <hr style="height:7px; color:white; font-weight:bold; background:white;">
                  <p></p>
             </div>
</div>
@endsection    