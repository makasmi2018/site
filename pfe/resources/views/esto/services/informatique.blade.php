@extends('layout.application')
    @section('title')
        Services Informatique ESTO 
    @endsection
   @section('main')
         <div class="info">
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
                   <h2>Service Informatique </h2>
               </div>
               <div class="equipe">
                   <h2>Equipe :</h2>
                   <hr style="height: 7px; color: #e6e6e6; width: 100%; background: #e6e6e6;">
                   <p>
                   <img src="/img/icones/ico2.png"> Mr Mounir GRARI<br>
                   <img src="/img/icones/ico2.png"> Mr Mohammed Amine KASMI
                   </p>
               </div>
               <div class="intro">
               <p>
                 Le service informatique est très impliqué dans la gestion du système d'information de l’ESTO. Il est constitué d’une équipe chargée d’intervenir dans le périmètre englobant toutes les activités informatiques d'intérêt général pour l’école. La gestion du parc informatique, sa maintenance matérielle et logicielle, l'administration des serveurs et la gestion du réseau constituent les versants essentiels de l'activité du service
               </p>
               </div>
               <div class="ass_fonc">
                   <h3>Assurer le fonctionnement de l'infrastructure réseau (câble, switch, architecture réseau ….)</h3>
                   <hr style="height: 7px; color: black; width: 100%; background: black;">
                   <p>
                   Assurer la sécurité du réseau en appliquant les directives du chef du service et de la cellule Informatique.
                    Effectuer un audit interne de manière périodique, et rédiger des rapports de d'états pour faire des statistiques a long terme.
Opérer l'agrandissement du réseau 
en cas de besoin.
Mettre en place des serveurs de base 
de données tel que MySql ou SQL 
Server (utiliser dans les TPS).
Aider dans le développement du laboratoire Réseau (faire des teste d'amélioration de la sécurité, d'amélioration des performances …).
Gérer l'administration du domaine des salles de TP (la gestion du serveur de fichier et du contrôleur de domaine l'installation des salles ne relève pas de la responsabilité de cette division).
                   </p>
                   <p>
                   Assurer le fonctionnement 
des serveurs<br>
Messagerie<br>
Web<br>
FTP<br>
Passerelle Internet<br>
Proxy<br>
Serveur de fichier<br>
Contrôleur de Domaine<br>
….
                   </p>
               </div>
               <div class="proj_serv">
               <h3>Les Projets du service (encadrés par Mr Grari) :</h3>
                   <p>
                       <span>1 </span>   - Projet proESTO <br>
                       <span>2 </span>   - Projet Systeme d'information ESTO <br>
                       <span>3 </span>   - Restructuration réseau ESTO <br>
                       <span>4 </span>   - Forum <br>
                       <span>5 </span>   - Géstion des Notes <br>
                       <span>6 </span>   - Gestion du parc informatique<br>
                       <span>7 </span>   - Amélioration de la qualité du réseau ESTO<br>
                       <span>8 </span>   - Sécurisation du réseau ESTO<br>
                       <span>9 </span>   - Mise en place de l'intranet<br> 
                       <span>10 </span> - Couverture wifi
                   </p>
               </div>
               <div class="proj_serv1">
               <h3>Les Projets du service (encadrés par Mr Kasmi en collaboration avec Mr Grari) :</h3>
                  <hr style="height: 6px; color: #e6e6e6; width: 50%; background: #e6e6e6;">
                   <p>
                            -Projet de Gestion des inscriptions , notes et délibérations des étudiants (sous l'outil APOGEE)<br>
     -Création des Projets web (site web de l'école , applications web de préinscriptions DUT , LP IGE ...) (CMS Joomla , Ez Publish ... et la plateforme LAMP : Linux Apache Mysql PHP)<br>
     -Projet de création des application de gestions de service économique et de gestion des ressources humaines .... (outils: langages web HTML, CSS,JS, PHP, framework symfony, SGBD:MSQL / langage Java , Swing et SGBD : Oracle) <br>
     -Projet de switching du réseau de l'EST (Configuration et          	    	     -Managment des Switchs de l'école : VLANs , attribution des @ IP, et autres configs pour éviter les boucles et les conflits d'@ IP...)<br>

                   </p>
                   <p>
                               -Projet de supervision du réseau ESTO (Outils : Nagios, Centreon, Nagvis)<br>
        -Projet de service de déploient à distance (installation des machines du réseau depuis un serveur : WDS Windows server)<br>
        -Projet de création d'un annuaire LDAP couplé avec un Serveur d'authentification CAS<br>
        -Projet de création d'une plateforme de collaboration et de travail en équipe (outil SVN)<br>
        -Projet de création d'une passerelle : NAT , filtrage ..(Pfsense)<br>
        -Participation au projet d'audit et de migration du réseau de l'EST avec l'équipe réseau de l'EST et l'UMP<br>
        -Encadrement des Projets de fin d'études<br>
                   </p>
               </div>
               <div class="att_div_m">
                   <h3>Les attributions de la division Maintenance Matériel et du Système Client </h3>
                   <hr style="height: 6px; color: black; width: 70%; background: black;">
                   <p>
                                 -Maintenance et réparation de tout matériel Informatique de l'Ecole ( en cas de problème majeur la division fait parfois appel a des sociétés spécialisées).<br>
        -Installation du Système d'Exploitation (2000 pro, win Xp, ou Linux …).<br>
        -Assurer le fonctionnement du domaine des étudiants<br>
        -Installation et configuration de tous les logiciels utiliser dans l’établissement.<br>   
        -Installation des pilotes des périphériques Informatique.<br>
        -Gestion de l'affectation du matériel Informatique de l'Etablissement.<br>
        -Installation et configuration des antivirus dans toutes les machines de l'Etablissement.<br>
        -Validation des commandes et des pièces de rechange du matériel Informatique  
                   </p>
               </div>
               <div class="att_div_s">
                 <h3>Les attributions de la division Système d'Information et développement  </h3>
                   <hr style="height: 6px; color: black; width: 70%; background: black;">
                   <p>
                           
        -Assurer le bon fonctionnement du Système d'Information de l'ESTO (Applications de gestion des pré-inscriptions ,l'ERP Apogee...) <br>
        -Assurer le développement de ce Système (ajouter de nouvelles fonctionnalités).<br>
        -Créer , administrer et assurer la mise à jour du site Web de l'ESTO en collaboration avec la Division   <br>                   		     -Réseaux et Serveurs (La mise en place sur serveur web est assuré en collaboration avec  la division Réseaux et Serveurs).<br>
       -Mettre en place un service de Documentation.<br>
       -Développer et assurer le fonctionnement du forum de discussion de l’établissement.
                   </p>
               </div>
</div>
   @endsection