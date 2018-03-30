@extends('layout.application')
    @section('title')
        Mot de Directeur ESTO 
    @endsection
   @section('main')
    <div class="contenu_mdd">
               <div class="tete_mdd">
                  <h1> MOT DU DIRECTEUR </h1>
                   <p>Le Directeur: <span style="font-style:italic !important; color:#e5d4d4;">Mr Yassine ZARHLOULE</span></p>
               </div>
               <div class="esto_droit">
                  <p>
                   MOT DE DIRECTEUR<br><br>

                   ----------------------<br><br>

                      <a href="{{url('ecolechiffre')}}">L’ECOLE EN CHIFFRE</a><br><br>

                  ----------------------<br><br>

                  <a href="{{ url('direction') }}">DIRECTION</a><br><br>

                  ----------------------<br><br>

                  <a href="{{ url('cahiernormespeda') }}">CAHIER DES NORMES  
	     	     PEDAGOGIQUES</a><br><br>

                  ----------------------<br><br>

                  <a href="{{ url('services') }}">SERVICES DE L’ADMINISTRATION</a><br>
                   </p>
               </div>
               <div class="c_m_d">
                   <img src="images/socialNetwork/directeur.png">
                   <p>
                          
       -L’Ecole Supérieure de Technologie est au cœur d’un environnement de formation et de recherche de l’enseignement supérieur qui  permet de dispenser un enseignement de qualité et offre une formation pluridisciplinaire attrayante, diversifiée et inscrite dans les préoccupations régionales et nationales. 
</p>
      <p>
       -Notre vif engagement dans le changement que la nouvelle ère technologique impose et notre persévérance à relever les challenges d’un enseignement de qualité s’imbriquent dans notre projet dont l’ambition initiale est d’offrir une formation universitaire scientifique et technique de valeur aux jeunes bacheliers. La rigueur et la qualité sont les maîtres mots dans le cursus pédagogique diversifié que propose l’ESTO.
       </p>
       <p>
Nous sommes conscients des enjeux majeurs de l’insertion des jeunes diplômés, nos filières sont donc une réelle projection des besoins du marché de l’emploi, suivant ainsi les directives royales de SM le Roi Mohammed VI que dieu l’assiste et le glorifie.

</p>
      <p>
       -Notre philosophie pédagogique émane d’un souci permanent de perfectionnisme. Pour ce, nous nous engageons pleinement dans l’amélioration des structures formatrices qui garantissent l’épanouissement de nos étudiants en leur garantissant un contexte d’apprentissage fertile et motivant.
</p>
      <p>
       -Nous sommes profondément impliqués dans l’esprit de l’innovation et combinons dans notre vision l’anticipation que requiers la clairvoyance et la projection vers le futur que l’enseignement universitaire exige.  Notre projet s’inscrit dans une sémantique binaire de la formation alignant l’efficacité et l’ouverture inhérentes à la vision globale de l UMP.   
</p>
       <p>
        -L’École Supérieure de Technologie telle que nous l’entendons et œuvrons à promouvoir est, par excellence, le choix d’aujourd’hui pour les professionnels de demain. 
</p>
      <p>
       -C’est avec votre engagement, votre soutien, et votre confiance que nous poursuivons ensemble la conduite de nos projets d’amélioration continue.
                   </p>
               </div>
   </div>
   @endsection