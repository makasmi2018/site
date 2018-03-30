@extends('layout.application')
    @section('title')
        Emplois Du Temps
    @endsection
   @section('main')
              <div class="espaceetudiant">
               <div class="tete_espace">
                  <h1> EMPLOIS DU TEMPS </h1>
               </div>
               <div class="espace_droit">
                  <p>
                   Emplois du temps <br><br>

                   ----------------------<br><br>

                   <a href="{{ url('calendrier') }}">Calendrier 2017/2018 </a><br><br>

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
               <div class="emp_manag">
                   <h2>Département Techniques de Managment</h2>
                   <hr style="height:7px; color:white; font-weight:bold; background:white;">
                   <p>
                       <a href="#"><img src="/img/icones/ico3.png">FCF 1ère année </a><br>
                       <span><a href="#"><img src="/img/icones/ico3.png">FCF 2ème année </a></span><br>
                       <a href="#"><img src="/img/icones/ico3.png">IGE 1ère année </a><br>
                       <span><a href="#"><img src="/img/icones/ico3.png">IGE 2ème année</a></span> <br>
                       <a href="#"><img src="/img/icones/ico3.png">GBA 1ère année </a><br>
                       <span><a href="#"><img src="/img/icones/ico3.png">GBA 2ème année </a></span><br>
                       <a href="#"><img src="/img/icones/ico3.png">GLT 1ère année  </a><br>
                       <span><a href="#"><img src="/img/icones/ico3.png">GLT 2ème année </a></span><br>
                       <a href="#"><img src="/img/icones/ico3.png">Licence Pro IGE</a>
                   </p>
               </div>
               <div class="emp_gi">
                   <h2>Département Génie Informatique</h2>
                   <hr style="height:7px; color:white; font-weight:bold; background:white;">
                   <p> 
                       <a href="#"><img src="/img/icones/ico3.png">DAI 1ère année </a><br>
                       <span><a href="#"><img src="/img/icones/ico3.png">DAI 2ème Année </a></span><br>
                       <a href="#"><img src="/img/icones/ico3.png">ASR 1ère année </a><br>
                       <span><a href="#"><img src="/img/icones/ico3.png">ASR 2ème année</a></span> <br>
                       <a href="#"><img src="/img/icones/ico3.png">LP Informatique <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Décisionnelle </a><br>
                       <span><a href="#"><img src="/img/icones/ico3.png">LP Informatique </a></span><br>
                   </p>
               </div>
               <div class="emp_ga">
                   <h2>Département Génie Appliqué</h2>
                   <hr style="height:7px; color:white; font-weight:bold; background:white;">
                   <p> 
                       <a href="#"><img src="/img/icones/ico3.png">GEER 1ère année</a><br>
                       <span><a href="#"><img src="/img/icones/ico3.png">GEER 2ème année </a></span><br>
                       <a href="#"><img src="/img/icones/ico3.png">EII 1ère année </a><br>
                       <span><a href="#"><img src="/img/icones/ico3.png">EII 2ème année</a></span> <br><br>
                       <a href="#"><img src="/img/icones/ico3.png">Génie Civil 1ère année Gr A </a><br>
                       <a href="#"><img src="/img/icones/ico3.png">Génie Civil 1ère année  Gr B</a><br><br>
                       <span><a href="#"><img src="/img/icones/ico3.png">Génie Civil 2ère année  </a></span> <br>
                       <a href="#"><img src="/img/icones/ico3.png">MCT 1ère année  </a><br>
                       <span><a href="#"><img src="/img/icones/ico3.png">MCT 2ème année</a></span> <br>
                       <a href="#"><img src="/img/icones/ico3.png">TDEA 1ère année   </a><br>
                       <a href="#"><img src="/img/icones/ico3.png">Licence Pro Génie Electrique</a><br>
                   </p>
               </div>
</div>
   @endsection