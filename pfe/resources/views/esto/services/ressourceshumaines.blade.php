@extends('layout.application')
    @section('title')
        Services Ressources Humaines ESTO 
    @endsection
   @section('main')
              <div class="ressou_hum">
               <div class="tete_serv">
                  <h1> SERVICES DE L’ADMINISTRATION </h1>
               </div>
               <div class="esto_droit">
                  <p>
                   <a href="{{url('motdirecteur')}}">MOT DE DIRECTEUR</a><br><br>

                   ----------------------<br><br>

                   <a href="{{ url('ecolechiffre') }}">L’ECOLE EN CHIFFRE</a><br><br>

                  ----------------------<br><br>

                 <a href="{{ url('direction') }}">DIRECTION</a><br><br>

                  ----------------------<br><br>

                  <a href="{{ url('cahiernormespeda') }}">CAHIER DES NORMES  
	     	     PEDAGOGIQUES</a><br><br>

                  ----------------------<br><br>

                  <a href="{{ url('services') }}">SERVICES DE L’ADMINISTRATION</a><br>
                   </p>
               </div>
               <div class="tete_s">
                   <h2>Service Resources Humaines </h2>
               </div>
               <div class="s_r_h">
               <div class="s_r_h1">
               <p>
                    <span style="font-family: cursive; color:black;">Le service des ressources humaines </span>a pour mission de mettre en oeuvre la politique de gestion des ressources humaines en accompagnant le parcours professionnel de chacun, au service de l'Ecole  et de ses membres, dans le respect des différents statuts.
               </p>
               </div>
               <div class="s_r_h2">
               <p>
                   <span style="font-family: cursive; color:black;">Sa mission s’articule en trois axes principaux :</span><br><br>
                  <img src="/img/icones/ico2.png">le recrutement<br>
                  <img src="/img/icones/ico2.png">le parcours professionnel<br>
                  <img src="/img/icones/ico2.png">l’accompagnement des personnes et des équipes<br>
               </p>
               </div>
               <div class="s_r_h3">
               <p>
                  <span style="font-family: cursive; color:black;"> Le service des ressources humaines </span>a également pour mission, en collaboration avec les interlocuteurs concernés, de contribuer à la qualité de l'environnement de travail de tous les membres du personnel (<span style="color:#849bc3;">relations sociales, relations interpersonnelles et conditions matérielles</span>).  
               </p>
               </div>
               </div>
</div>
   @endsection