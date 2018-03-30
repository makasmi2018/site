@extends('layout.application')
    @section('title')
        L’Ecole en Chiffre ESTO 
    @endsection
   @section('main')
             <div class="contenu_ec_ch">
              <div class="ec_ch">
                  <h1> L’ECOLE EN CHIFFRE </h1>
               </div>
               <div class="esto_droit">
                  <p>
                   <a href="{{url('motdirecteur')}}">MOT DE DIRECTEUR</a><br><br>

                   ----------------------<br><br>

                   L’ECOLE EN CHIFFRE<br><br>

                  ----------------------<br><br>

                  <a href="{{ url('direction') }}">DIRECTION</a><br><br>

                  ----------------------<br><br>

                  <a href="{{ url('cahiernormespeda') }}">CAHIER DES NORMES  
	     	     PEDAGOGIQUES</a><br><br>

                  ----------------------<br><br>

                  <a href="{{ url('services') }}">SERVICES DE L’ADMINISTRATION</a><br>
                   </p>
               </div>
               <div class="contenu_ec">
                   <p>
                       <span style="font-family: cursive; color:black;">L’ESTO</span> est l’unique institution du genre dans toute la région nord-est du pays. Sa vocation se présente sous deux aspects : 
                   </p>
                         <p>
                          -Former des <span style="color:#35578d;">techniciens supérieurs hautement qualifiés et immédiatement opérationnels </span>dans divers secteurs d’activité.
Entreprendre des actions de développement et de coopération avec toutes les composantes de son environnement, et ce, en vue de promouvoir la recherche scientifique et technique, le transfert technologique ainsi que l’échange d’expériences. 
                  <br><br>
                       -Sa mission est de former des techniciens qualifiés dans<span style="color:#35578d;"> différents domaines de technologie</span> afin de répondre aux besoins de la Région et du pays en matière de ressources humaines.
                   </p>
                   <p>
                   <span style="font-family: cursive; color:black;">L’ESTO</span> est en croissance continue pour correspondre aux exigences de développement de l’économie de la Région.
                   </p>
                   <p>
                   Elle a été créée en 1990
                   </p>
               </div>
               <div class="pers">
                   <h2>Personnel : </h2>
                  <hr style="height: 5px; color: white; width: 100%; background: white;">
                   <p><span style="font-family: cursive; color:black;">102   :</span> personnes<br><span style="font-family: cursive; color:black;">57     :</span> dans les services administratifs.<br><span style="font-family: cursive; color:black;">45     :</span> enseignants et 
                       assistants.
                   </p>
               </div>
               <div class="num_et">
                   <h2>Nombre des étudiants :<span style="font-family: cursive; color:black; font-size:14pt;"> ‘’ 1200’’</span></h2>
                  <hr style="height: 5px; color: #9eb7de; width: 100%; background: #9eb7de;">
                   <p><span style="font-family: cursive; color:black;">52% :</span> Filles<br><span style="font-family: cursive; color:black;">2% :</span> Etudiants étrangers<br><span style="font-family: cursive; color:black;">70% :</span> de la Région 
                   </p>
               </div>
               <div class="est_del">
                   <h2>ESTO délivre actuellement :</h2>
                  <hr style="height: 5px; color: #9eb7de; width: 100%; background: #9eb7de;">
                   <p>DUT <br>Licence Professionnelle 
                   </p>
               </div>
               <div class="orien">
                   <h2>L’Oriental :</h2>
                   <p>A l'Est du Maroc, la Région de l'Oriental s'étend sur 82820 km<sup>2</sup>, soit 11,6% du territoire national. 
                   </p>
               </div> 
               <div class="fron">
                   <h2>3 frontières :</h2>
                   <div class="contenu_fron">
                   <ul> 
                       <li>   <span style="font-family: calibri; color:black;">l'Algérie à l'Est</span>, avec une frontière de 550 km depuis la station balnéaire de Saïdia, au Nord jusqu'à Figuig au Sud .</li>
                      <li> <span style="font-family: calibri; color:black;">l'Espagne</span>, par le fait de l'enclave occupée de la ville de Melilla jouxtant la ville de Nador .</li>
                      <li> <span style="font-family: calibri; color:black;">Les pays du Sud de l'Europe</span>, avec une façade maritime de 200 km sur la Méditerranée.</li>
                   </ul>
                   <p> 
                   La Région revêt une importance stratégique par sa position géographique par son potentiel économique elle constitue l'interface incontournable pour conforter le Maroc dans sa position géostratégique de carrefour entre l'Europe, le Grand Maghreb et le monde méditerranéen.
                   </p>
                   </div>
               </div> 
</div>
   @endsection