<DOCTYPE! html>
    <html>
        <head>
            <title>@yield('title')</title>
            <meta charset="UTF-8">
            <!--     icon       -->
            <link rel="stylesheet"  href="./css/style_accueil.css" type="text/css">
            <link rel="stylesheet"  href="./css/style_formation.css" type="text/css">
            <link rel="stylesheet"  href="./css/style_esto.css" type="text/css">
            <link rel="stylesheet"  href="./css/style_espace.css" type="text/css">
            <link rel="stylesheet"  href="./css/style_rechscien.css" type="text/css">
            <link rel="stylesheet"  href="./css/style_formation1.css" type="text/css">
            <link rel="stylesheet"  href="./css/style_ga.css" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
            <script type="text/javascript" src="./js/js_accueil.js"></script>
            <script type="text/javascript" src="./js/jQuery1.js"></script>
            <script type="text/javascript" src="js/jq.js"></script>
            <link rel="icon" href="favicon.ico" type="image/x-icon"/>
        </head>
        <body>
             <header>
                  <!--           PRE-HEADER           -->
                   <div class="preHeader">
                      <div class="a">
                       <div class="socialnetwork">
                            <a href=#><img src="images/socialNetwork/youtube.png"></a>
                            <a href=#><img src="images/socialNetwork/twitter.png"></a>
                            <a href=#><img src="images/socialNetwork/facebook.png"></a>
                       </div>
                       <div class="recherche">
                            <form>
                                <input type="text" placeholder="Rechercher dans le site">
                                <input type="image" src="images/chercher.png">
                           </form>
                       </div>
                       </div>
                    </div>
                   <!--              LOGO              -->
                       <div class="logo">
                            <img src="images/socialNetwork/logouniv.png" alt="Logo ump">
                            <SPAN >
                                <img src="images/socialNetwork/logoest.png" alt="logo Est">
                            </SPAN>
                       </div>
                      <div class="bonde_marron">
                          <!--<img src="images/marron.jpg" alt="bonde_marron"> -->
                      </div>
                      <div class="menu">
                       <nav>
                           <ul>
                               <li><a href="/" >Accueil</a></li>
                               <li><a href="#">Formation</a>
                                        <ul class="sous_menu">
                                               <li><a href="{{ url('formation_initiale') }}">Formation Initial</a>
                                                <ul class="sous_sous_menu">
                                                    <li><a href="#">Génie Appliqué</a>
                                                          <ul class="sous_sous_sous_menu">
                                                              <li><a href="#">GEER</a></li>
                                                              <li><a href="#">EII</a></li>
                                                              <li><a href="#">Génie Cinil</a></li>
                                                              <li><a href="#">MCT</a></li>
                                                              <li><a href="#">TDEA</a></li>
                                                              <li><a href="#">Licence Pro Génie Electrique</a></li>
                                                          </ul>
                                                    </li>
                                                    <li><a href="#">Génie Informatique</a>
                                                          <ul class="sous_sous_sous_menu1">
                                                              <li><a href="#">DAI</a></li>
                                                              <li><a href="#">ASR</a></li>
                                                              <li><a href="#">LPI</a></li>
                                                              <li><a href="#">LPID</a></li>
                                                          </ul>
                                                    </li>
                                                    <li><a href="#">Management</a>
                                                          <ul class="sous_sous_sous_menu2">
                                                              <li><a href="#">GBA</a></li>
                                                              <li><a href="#">FCF</a></li>
                                                              <li><a href="#">IGE</a></li>
                                                              <li><a href="#">GLT</a></li>
                                                              <li><a href="#">LP IGE</a></li>
                                                          </ul>
                                                    </li>
                                                </ul>
                                               </li>
                                               <li><a href="{{ url('formation_con') }}">Formation Continue</a></li>
                                        </ul>
                                </li>
                                    
                                <li><a href="#">Services en lignes</a>
                                       <ul class="sous_menu">
                                         <li><a href="http://bib.ump.ma/idara/opac_css/index.php?lvl=section_see&location=14">Bibliothèque</a></li>
                                         <li><a href="#">Messagerie</a></li>
                                       </ul>
                                </li>
                                <li><a href="{{url('recherchesc')}}">Recherche scientifique</a>
                                       <ul class="sous_menu">
                                          <li><a href="#">Production Scientifique</a></li>
                                          <li><a href="{{url('projetrech')}}">Projets De Recherche</a></li>
                                          <li><a href="{{url('labo')}}">Laboratoires</a></li>
                                        </ul>
                                </li>
                                <li><a href="#">Espace étudiant</a>
                                       <ul class="sous_menu">
                                          <li><a href="{{ url('emptem') }}">Emplois temps</a></li>
                                          <li><a href="{{ url('calendrier') }}">Calendrier 2017/2018</a></li>
                                          <li><a href="{{ url('projfin') }}">Projets de Fin d'Etudes</a></li>
                                          <li><a href="{{ url('bourses') }}">Bourses d'études</a></li>
                                          <li><a href="#">Activités parascolaires</a></li>
                                          <li><a href="#">Que faire après DUT?</a></li>
                                          <li><a href="#">Projets en vidéo</a></li>
                                       </ul>
                                 </li>
                                 <li><a href="#">Documents utiles</a></li>
                                 <li><a href="#" >Esto</a>
                                        <ul class="sous_menu" position="relative">
                                          <li><a href="{{ url('motdirecteur') }}">Mot de Directeur</a></li>
                                          <li><a href="{{ url('ecolechiffre') }}">L'Ecole en Chiffre</a></li>
                                          <li><a href="{{ url('direction') }}">Direction</a></li>
                                          <li><a href="{{ url('cahiernormespeda') }}">Cahier Des Normes Pedagogiques</a></li>
                                          <li><a href="{{ url('services') }}">Services de L'Administration</a>
                                               <ul class="sous_sous_menu1">
                                                  <li><a href="{{url('ressourceshumaines')}}">Service Resources Humaines </a></li>
                                                  <li><a href="{{ url('independance') }}">Service Intendance</a></li>
                                                  <li><a href="{{ url('informatique') }}">Service Informatique </a></li>
                                                  <li><a href="{{ url('comcoop') }}">Coopération et Communication </a></li>
                                                  <li><a href="{{ url('interface') }}">Interface EST/Entreprises </a></li>
                                                  <li><a href="#">Affaires estudiantines </a></li>
                                                  <li><a href="{{ url('biblio') }}">Bibliothèque </a></li>
                                               </ul>
                                          </li>
                                       </ul>
                                 </li>
                           </ul>
                        </nav>
                     </div>
                     <div class="bonde_gris">
                     </div>
                 
            </header>
            <div class="main">
                @yield('main')
            </div>
                  <!-- <a href="#" class="topbutton">
                    <input type="button" onclick="self.scrollTo(0, 1200); return false;" class="topbut" value="HAUT">
                       </a>-->
             <!--------le pied de la page---------->
                        <footer>
                           <div class="contact">
                               <h3>CONTACT</h3>
                               <div class="adresse">
                                  <img src="./images/footer/adresse.png">
                                   <p>
                                       
                                       BP 473 Complexe universitaire Al Qods Oujda 60000,
                                   </p>
                               </div>
                                <div class="tel">
                                  <img src="./images/footer/tel.png">
                                   <p>
                                       +212 36 500 224
                                   </p>
                               </div>
                                <div class="fax">
                                  <img src="./images/footer/fax.png">
                                   <p>
                                       +212 36 500 223
                                   </p>
                               </div>
                                <div class="email1">
                                  <img src="./images/footer/email.png">
                                   <p>
                                       <a href="#">esto.webmaster@ump.ma</a><br>
                                       <span class="com">
                                        Pour toute remarque , réclamation, suggestion concernant le site 
                                    </span>
                                   </p>
                                   
                               </div> <div class="email2">
                                  <img src="./images/footer/email.png">
                                   <p>
                                       <a href="#">support.esto@ump.ma</a><br>
                                   
                                    <span class="com">
                                        pour toute question , demande d'information concernant les études , l'internat...
                                    </span>
                                       </p>
                               </div>
                            </div>
                                <div class="location">
                                          <a href="#"> <img src="./images/footer/esto_img.png"></a>
                                           <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13128.875190999921!2d-1.8974078!3d34.6491769!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5226a42c88c53d39!2s%C3%89cole+Sup%C3%A9rieure+de+Technologie+d&#39;Oujda!5e0!3m2!1sfr!2sma!4v1520724571928" width="350" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div>

                            <div class="archive">
                                <h3>ARCHIVES</h3>
                                <ul>
                                    <li><a href="#">Octobre,2017</a></li>
                                    <li><a href="#">Juin,2016</a></li>
                                </ul>
                            </div>
                            
                            <div class="copyright">
                             <div><a href="#">Conditions d'utilisation</a> | 
                              <a href="#">Charte de vie privée</a> | 
                                 <a href="#">&copy; ESTO,tous droits réservés</a> </div> 
                            </div>
                            
                        </footer>
                         
        </body>
    </html>