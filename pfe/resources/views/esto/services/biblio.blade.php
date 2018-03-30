@extends('layout.application')
    @section('title')
        Interface EST/Entreprises ESTO 
    @endsection
   @section('main')
            <div class="biblio">
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
                  <img src="/img/icones/ico7.png" style="float:left; height:39px; align:center;"> <h2 style=" margin-top:13px; float:left;"> BIBLIOTHEQUE</h2>
               </div>
               <div class="bib1">
                   <p>
                       La bibliothèque de <span style="color:black; font-weight:bold;"> l'ESTO </span>abrite des ouvrages composés essentiellement de monographies avec plus de<span style="color: #5978aa; "> 5400 références </span>. L'essentiel de la documentation traite du domaine industriel et des techniques de management.<br><br>
                       <a href="http://196.200.156.189/bibli/public/">Bibliothèque en ligne</a>
                   </p>
               </div>
               <div class="image_bib">
               <img src="#">
                </div>
               <div class="bib2">
                   <p>
                       La bibliothèque de<span style="color:#2d5085; font-weight:bold;"> l’ESTO </span>abrite des ouvrages composés essentiellement de monographies avec plus de <span style="color:#e06834; font-weight:bold;">5063</span> références et plus de <span style="color:#e06834; font-weight:bold;">5000 </span>rapports de stage. L’ essentiel de la documantation traite du domaine industriel et des techniques de management.
                   </p>
               </div>
                <div class="image_bib">
               <img src="#">
                </div>
               <div class="contact_bib">
               <h3>CONTACT</h3>
                   <p>
                      <img src="/img/icones/ico10.png"> <span style="color:black; font-weight:bold;">Tel    : </span>    036 50 02 24<br>
                       <img src="/img/icones/ico9.png"><span style="color:black; font-weight:bold;">Fax   : </span>    036 50 02 23<br>
                       <img src="/img/icones/ico11.png"><span style="color:black; font-weight:bold;">Mail :  </span>   Bibliotheque@est.ump.ma <br>
                   </p>
               </div>
               <div class="bib3">
                  <img src="/img/icones/ico8.png"><h2>OUTIL D’ ADMINISTRATION DE L’ APPLICATION DE LA GESTION DE LA BIBLIOTHEQUE</h2>
                  <br>
                   <hr style="height: 6px; color: #e6e6e6; width: 100%; background: #e6e6e6;">
                   <p>
                       Le logiciel <span style="color:#2d5085; ">‘’PMB’’</span> est installé au sein du service pour faciliter l’accès at à aller dans le meme sens du développement technologique que connait l’univérsité.<br>
                       L’usage de la bibliothèque est soumis à une réglementation qui peut etre consultée auprès du responsable de la bibliothèque de l’ESTO.<br>
                       Une journée <span style="color:#2d5085; ">‘’Portes Ouvertes’’ </span>est organisée au mois de septembre de chaque année pour faciliter l’orientation des utilisateurs internes et externes.<br>
                       Cette journée est l’occasion d’exposer les differsntes ressources de la bibliothèque ainsi que les differentes voies d’accès à la documentation.<br>
                   </p>
               </div>
              
</div>
    @endsection