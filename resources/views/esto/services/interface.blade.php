@extends('layout.application')
    @section('title')
        Interface EST/Entreprises ESTO 
    @endsection
   @section('main')
            <div class="interface">
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
                   <h2> Interface EST/Entreprises </h2>
               </div>
               <div class="inter">
                   <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color:black; font-weight:bold;">La direction de l’ESTO,</span> consciente de l’importance de l’instauration d’un réseau de corrélations avec les entreprises marocaines et spécifiquement celles de l’oriental, dirige ses efforts afin d’instaurer des relations de partenariat et des conventions entre l’EST et les différents établissements publiques et privés successibles de satisfaire les besoins de nos étudiants en matière de stages, visites et insertion des lauréats dans la vie professionnelle. <span style="color:black; font-weight:bold; color:#2b61b2;">Le service Mission EST/Entreprises</span> est au cœur de cette optique dans le sens où ses activités se focalisent sur :
                   <br>
                   <br>
                   </p>
                   <p>
                   <img src="/img/icones/ico4.png">Les Stages 
                   </p>
                   <p>
                   <img src="/img/icones/ico4.png">Entreprises
                   <br><br>
                   </p>
                   <p>
                   <img src="/img/icones/ico4.png">Visites
                   </p>
                   <p>
                   <img src="/img/icones/ico4.png">Suivi des lauréats 
                   </p>
               </div>
               <div class="entre">
                   <h2><span>--------------------------------------------</span> Entreprises <span>---------------------------------------------</span></h2>
                   <p>
                       Mission EST-Entreprises est un service bilatéral et multidimensionnel dans la mesure où ses efforts vont également vers les entreprises en leur facilitant l’accès aux différents profils estudiantins de l’ESTO en les aidant à :   <br>
                       <img src="/img/icones/ico5.png">Trouver des stagiaires, <br>
                       <img src="/img/icones/ico5.png">Recruter des diplômés, débutants ou confirmés <br>
                       <img src="/img/icones/ico5.png">Consulter le calendrier des stages obligatoires   <br>
                       <img src="/img/icones/ico5.png">Elaborer toutes formes de partenariats, de rencontres    <br>
                       <img src="/img/icones/ico5.png">Consulter la base de données relative à nos lauréats ...  <br>
                       - L’école Supérieure de Technologie d’Oujda a connu un grand essor au niveau des contacts extra-univresitaires. Le service facilite l’échange avec les sociétés, entreprises et administrations. Dans ce sens, plusieurs conventions individuelles et générales de stage ont été signées avec des entreprises de renom dans la région orientale et autres régions (ONE, HOLCIM, SUCRAFOR, SONASID, MARJANE, ONCF, RADEEO…etc.). Ceci ne peut qu’être bénéfique pour nos étudiants qui voient leurs chances d’intégration professionnelle s’agrandir.<br>

                   </p>
                   
               </div>
               <div class="visites">
                   <h2> Visites </h2>
                   <p>
                       <span>-Mission EST/Entreprises</span> s’occupe également de l’organisation des visites d’entreprises. <br>
                        <span>-La politique pédagogique de l’école </span>insiste sur l’importance de ces visites dans le cursus universitaire de nos étudiants. Aussi, organise-t-on chaque trimestre un nombre important de visites vers les grandes entreprises de l’oriental et d’autres régions du Maroc.
                   </p>
               
               </div>
               <div class="sui_lau">
                   <h2>Suivi des lauréats</h2>
                   <p>
                       Le contact des étudiants avec le service Mission EST/Entreprises ne s’arrête pas l’obtention du DUT, l’école poursuit son intérêt pour ses lauréats et effectue leur suivi afin de mieux les aider dans leur recherche d’emploi et les orienter dans leurs études supérieures. Le service tente par tous les moyens de recenser les informations et garder le contact avec les lauréats de l’ESTO.
                   </p>
               </div>
               <div class="stages">
                   <h1>Les Stages</h1>
                   <hr style="height: 6px; color: black; width: 60%; background: black;">
                   <p> -Aider les étudiants dans la recherche des stages et en leur en procurant dans le cas où ils      	   	    	             n’aboutissent pas à en trouver par leurs propres efforts.<br>
                   </p>
                   <p>
                       <img src="/img/icones/ico6.png"><span> Conseiller les étudiants :</span> <br><br>  
                Dans la recherche de stage<br>
                Durant le déroulement du stage  <br>                      
                   </p>
                   <p>
                       <img src="/img/icones/ico6.png"><span> Leur procurer :</span><br>  <br>  
               Les documents de stage : une demande, une fiche de notation et un accord de stage<br>  
               Les dernières offres de stages ou d’emplois <br>  
               Les sites Internet utiles au moyen du Carnet d’Adresses consultable à partir du menu<br>  
               Les listes de données des entreprises nationales et régionales pour pouvoir les contacter. <br>                      
                   </p>
               </div>
</div>
   @endsection