@extends('layout.application')
    @section('title')
        Services Independance ESTO 
    @endsection
   @section('main')
             <div class="indep">
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
                   <h2>Service Independance </h2>
               </div>
               <div class="miss">
                   <h2>Les Missions : </h2>
                   <p>__________________________________________________</p>
               </div>
               <div class="con_ind">
               <h2>L'independance :</h2>
               <p>
               Exerce des responsabilités de nature     	    	    	      	    	   	    	      	       administrative, économique, financière et comptable. <br>
               Cette mission très générale se décline notamment avec les domaines suivants :  	 
               </p>
               <p>
               <img src="/img/icones/ico2.png">
               <span style="font-family:cursive; color:black; font-weight:bold;">Gestion matérielle :</span> elle comprend l’entretien courant de l’Ecole, la sécurité des locaux, l’hébergement.<br>
               <img src="/img/icones/ico2.png">
               <span style="font-family:cursive; color:black; font-weight:bold;">Gestion financière : </span>elle consiste à réaliser les dépenses et recettes nécessaires au fonctionnement de l’établissement, en conformité avec le budget préalablement établi et voté (par le conseil de l'Ecole).<br>
               <img src="/img/icones/ico2.png">
               <span style="font-family:cursive; color:black; font-weight:bold;">Gestion comptable : </span>il s’agit en quelque sorte de tenir le rôle de « trésorier » ou encore de « caissier » de l’Ecole. Cette gestion implique la tenue des divers documents officiels de comptabilité.<br>
               </p>
               </div>
</div>
              
@endsection