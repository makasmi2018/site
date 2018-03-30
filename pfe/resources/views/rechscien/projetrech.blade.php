@extends('layout.application')
    @section('title')
        Recherche Scientifique
    @endsection
   @section('main')
   <div class="tete_rech">
           <h1>RECHERCHE SCIENTIFIQUE</h1><hr>
       </div>
       <div class="rech_droit">
           <p>
               <a href="#">PRODUCTION SCIENTIFIQUE</a><br><br>
                   ----------------------<br><br>
               PROJETS DE RECHERCHE<br><br>
                   ----------------------<br><br>
               <a href="{{url('labo')}}">LABORATOIRES</a><br>
               
           </p>
       </div>
       <div class="contenu_pro">
         <h2>PROJETS DE RECHERCHE </h2>
           <hr><br>
          <div class="con_projet1">
           <h2>Pr-Erramdani</h2>
           <p>
               Le projet aura le nom de : <span style="color: #2c65bc  !important; margin-left: 0px !important;">entrepreneur-coaching</span><br>
               Développé par  :  <br><span>M.Mohammed Erramdani ,</span><br><span>M.Rachid Hajbi , </span><br><span>M.Mouad El Omari<br></span>
           </p>
             </div>
              <div class="con_projet2">
              <h3>INTRODUCTION</h3>
              <hr><br>
              <p>
                  Si on veut vraiment promouvoir et  encourager l’entrepreneuriat, il faut comprendre comment il fonctionne vraiment. Or c’est loin d’être le cas. Quant à la population, elle perçoit l’entrepreneuriat, et les entrepreneurs, aux travers de mythes qui ont la vie dure : l’entrepreneur est un héros, ou un escroc, un visionnaire, un individu charismatique, un lutteur seul contre tous, un chanceux.<br><br>

                  La plateforme informatique de notre projet entrepreneur-coaching  vise à :<br><br>

                  1.     Tester les points faibles et points forts de l’entrepreneur dans les 4 domaines ci-dessous.<br><br>

                  2.     Mesurer les écarts entre le profil entreprenariat de l’utilisateur de l’application et celui exigé<br><br>

                  3.     Dresser un plan de coaching avec un tableau de bord d’action pour le futur entrepreneur<br><br>
              </p>
              
           </div>
            <div class="con_projet3">
              <h3>PUBLICATIONS SCIENTIFIQUES</h3>
              <hr><br>
              <p>
                 "For Formed Entrepreneurial Culture" in Europe and MENA Cooperation Advances in Information and Communication Technologies
Volume 520 of the series Advances in Intelligent Systems and Computing pp 459-467 
              </p>
              
           </div>
     </div>
   @endsection