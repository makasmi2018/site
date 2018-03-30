@extends('layout.application')
    @section('title')
        Acceuil Ecole Supérieure de Technologie
    @endsection
   @section('main') 
                 <div class="content">
                    <div class="dirword">
                        <h3>MOT DU DIRECTEUR</h3>
                        <p>
                            <a href="{{url('motdirecteur')}}" title="Mr Yassine ZARHLOULE">
                              <img src="images/socialNetwork/directeur.png" alt="Directeur">
                         
                               -L’Ecole Supérieure de Technologie est au cœur d’un environnement de formation et de recherche de l’enseignement supérieur qui  permet de dispenser un enseignement de qualité et offre une formation pluridisciplinaire attrayante, diversifiée et inscrite dans les préoccupations régionales et nationales. [...]<br>
                               -L’École Supérieure de Technologie telle que nous l’entendons et œuvrons à promouvoir est, par excellence, le choix d’aujourd’hui pour les professionnels de demain. [...] 
                            </a>
                        </p>
                    </div>
                    <div class="slider_outer">
                     <input type="image" src="images/socialNetwork/flch_gch.png" title="Precedent" class="prec">
                    <input type="image" src="images/socialNetwork/fleche_droite.png" title="Suivant" class="suiv">
                    <input type="image" src="images/socialNetwork/pause.png" title="Pause de 8s" class="stop">
                    <div class="slider">
                        <ul>
                            @foreach($slides as $slid)
                            <li>
                                <div class="text"><p>{{$slid->titre_img}}</p></div>
                                <img src="{{$slid->images}}">
                            </li>
                            @endforeach
                        </ul>
                        
                     </div>
                     </div>
                </div>
                   <div class="news">
                      <div class="contenu_news">
                        <h3>ACTUALITES A LA UNE :</h3>
                          @foreach($actus as $actu)
                         <div class=newssection>
                          <img src="{{$actu->image_actu}}" alt="actualite_1">
                            <p>{{$actu->texte_actu}}</p>
                        </div>
                       @endforeach
                       {{$actus->links()}}
                  </div>
            </div>
                
                   
            
                    <div class="event">
                      <img src="images/socialNetwork/agenda.png"><h3>AGENDA</h3><!--<hr>-->
                        @foreach($evenements as $eve)
                         <div class="eventsection">
                            <div class="date">{{(new DateTime ($eve->date_event))->format('d M Y')}}</div>
                            <p>{{$eve->titre_event}}.</p>
                        </div>
                        <hr>
                        @endforeach
                    
                        <a href="#">Consulter tout l'agenda</a>
                    </div>
                    <div class="studentspace">
                       <h3>Espace Etudiant</h3>
                          <p> <a href="{{ url('emptem') }}">- Emplois temps</a><br>
                              <a href="{{ url('calendrier') }}"> -Calendrier 2017/2018 </a><br>
                              <a href="{{ url('projfin') }}">  -Projets de Fin d'Etudes</a><br>
                              <a href="{{ url('bourses') }}">  -Bourses d'études</a><br>
                              <a href="#"> -Activités parascolaires</a><br>
                              <a href="{{ url('qfadut') }}">  -Que faire après DUT?</a><br>
                              <a href="#">   -Projets en vidéo</a><br></p>
                    </div>
           
                    <div class="departement">
                     <br>
                      <h2>DEPARTEMENTS :</h2>
                      <div class="dep_1">
                        <a href="#">
                         <img src="images/socialNetwork/gi.png">
                            <div class="dep_1_contenu">
                              <h3>GÉNIE INFORMATIQUE</h3>
                              <p>
                              Offre une formation complète et très pointue dans un domaine toujours en mutation avec des révolutions continues en NTIC, E-Learning...
                              </p>
                            </div>
                        </a>
                      </div>
                    
                     <div class="dep_2">
                        <a href="#">
                         <img src="images/socialNetwork/tm.png">
                            <div class="dep_2_contenu">
                              <h3>TECHNIQUES DE MANAGEMENT</h3>
                              <p>
                              Offre une formation très pointue pour l’essor économique de notre région:Nous formons  des techniciens  en  Informatique et Gestion des Entreprises,  Finance Comptabilité ...
                              </p>
                            </div>
                        </a>
                     </div>
                    
                        <div class="dep_3">
                        <a href="#">
                         <img src="images/socialNetwork/ga.png">
                            <div class="dep_3_contenu">
                              <h3>GÉNIE APPLIQUÉ</h3>
                              <p>Dispense un enseignement portant sur les disciplines de l’électronique, l’électrotechnique et de l’informatique industrielle, la mécatronique..
                              </p>
                            </div>
                        </a>
                     </div>
                    </div>
                    <!--Comm Con -->
                    <div class="comm_con">
                       <h3>COMMISSION ET CONSEILS</h3>
                          <p> <a href="#">-Conseil de l'école</a><br>
                              <a href="#"> -Commission Scientifique </a><br>
                              <a href="#"> -Représentant de l'Ecole au Conseil</a><br>
                              <a href="#"> -D'université</a><br>
                              <a href="#"> -Comité Auto-évaluation/Qualité</a><br>
                              <a href="#">  -Formation</a><br>
                    </div>
                    <!-- Galerie -->
                    <div class="gal_outer">
                    <input type="image" src="images/socialNetwork/f_d.png" class="suiv_g">
                     <div class="galerie">
                       <h3>GALERIE</h3>
                       <div class="gal_img">
                       @foreach($galeries as $gal)
                       <img src="{{$gal->image}}">
                       @endforeach
                       
                       </div>
                    </div>
                    </div>
                    <!-- Press 
                    <div class="presse">
                       <h3>ESTO dans La Presse</h3>
                       <div class="prs_img">
                       @foreach($presses as $prs)
                       <img src="{{$prs->prs_img}}">
                       @endforeach
                       </div>
                    </div> -->
@endsection
           
                  
           