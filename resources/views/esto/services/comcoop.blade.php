@extends('layout.application')
    @section('title')
        Services Informatique ESTO 
    @endsection
   @section('main')
             <div class="comcoop">
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
                   <h2>Service de communication et de coopération </h2>
               </div>
               <div class="com_intro">
                   <p>
                       Le service <span style=" color:#2b61b2; font-weight:bold;">Communication et Coopération</span> de <span style=" color:black; font-weight:bold;">l’Ecole Supérieure de Technologie d’Oujda</span> adopte une stratégie de communication bilatérale aussi bien externe qu’interne. Cette politique convoite la promotion de l’image et de l’identité de l’établissement ainsi que l’extension des échanges internationaux dans une philosophie d’ouverture sur l’environnement socioéconomique et sur les pôles universitaires internationaux.<br>
        <span style="color:black; font-weight:bold;">*Les impératifs généraux du service sont donc de satisfaire deux enjeux majeurs :</span><br> 
             &nbsp;  -<span style=" color:#2b61b2;">le premier</span> vise une communication externe de qualité tenant compte du développement de l'image et de la notoriété de l’ESTO au Maroc et à l’échelle internationale. Ceci s’opère via la coordination des actions et programmes de coopération et de partenariat.<br>
             &nbsp;  -<span style=" color:#2b61b2; ">Le second </span>enjeu concerne le développement de la communication interne axée sur l’amplification du sentiment d'appartenance à une vision pédagogique et éducative commune dans le lacis unissant les différents services administratif et le corps enseignant.<br>
                   </p>
               </div>
               
               <div class="miss_coop">
                 <h1>Missions et tâches : </h1>
                   <p>
                     <img src="/img/icones/ico3.png">  Promouvoir une politique active de coopération <br>
         
                     <img src="/img/icones/ico3.png">  Gérer et suivre les accords de coopération internationale et des conventions. <br>
                     <img src="/img/icones/ico3.png">  Gérer et programmer la mobilité des enseignants-chercheurs et du personnels administratifs dans le cadre des actions de coopération (stages / formations ou visites au Maroc ou à l’étranger) <br>

                     <img src="/img/icones/ico3.png">  Assurer un flux communicationnel régulier entre les différents acteurs de l’ESTO : Direction, enseignants, départements et étudiants... <br>

                     <img src="/img/icones/ico3.png">  Concevoir et réaliser des outils de communication : brochures, plaquettes, newsletters, flyers, affiches, kakemonos... <br>

                     <img src="/img/icones/ico3.png"> Manager l’organisation des événements internes et externes (colloques, conférences, séminaires journées d’accueil, journées portes ouvertes) pour des échanges autour des préoccupations et des bonnes pratiques universitaires. <br>

                     <img src="/img/icones/ico3.png"> Conseiller et supporter les départements et services dans leurs actions de communication et aider dans la conception de leurs outils de communications (articles, fiches, dépliants, plaquettes, visuels...  <br>

                     <img src="/img/icones/ico3.png"> Informer sur la vie estudiantine à l’ESTO / animer le site Internet de l’école. <br>

                     <img src="/img/icones/ico3.png"> Conseiller et accompagner les responsables pédagogiques pour la mise en place de leur communication web et médias sociaux. <br>

                   </p>
               </div>
</div>
  @endsection