@extends('layout.application')
    @section('title')
        DUEF(Bac+3) Formation Continue 
    @endsection
   @section('main') 
             <div class="contenu_lp">
             <div class="tete">
                  <h2> Diplôme D’Université d’Etudes Fondamentales ( Bac+3) <br>
                      Informatique et Gestion d’Entreprise</h2>
               </div>
              <div class="org_mod">
                  <h3>ORGANISATION MODULAIRE</h3>
                         <div class="contenu_org">
                          <p>
                             @foreach($formationlis as $f_li)
                              <span style="color: #cc3118;">M{{$f_li->id_mod}} : </span><span>{{$f_li->module}}</span><br><br>
                              @endforeach
                         </p>
                         </div>
              </div>
              <div class="obj_for">
                  <h3>OBJECTIFS DE LA FORMATION </h3>
                  <div class="contenu_obj">
                  <p>
                  Le présent diplôme d’université (DU)  répond à une demande de la part des entreprises et des cabinets de conseil, pour  la formation et la préparation des cadres adaptés aux problématiques de l’informatique et de la gestion des entreprises, cette préoccupation  professionnelle  constitue la vocation primordiale de cette formation qui permet : 
                  </p>
                  @foreach($objectifformationlis as $obj)
                  <p align="left" style="margin-left:40px; margin-bottom:20px !important;">
                     <img src="img/icones/ico1.png" style="width:17px;">
                     {{$obj->obj}}
                  </p>
                  @endforeach
                  <p style="margin-top:50px !important;">
                   Les diplômés de cette formation seront des intermédiaires entre les spécialistes de l’informatique maitrisant les bases de données et le stockage de l’information et les spécialistes de la gestion maitrisant les concepts comptables financiers juridiques et les mécanismes du contrôle de gestion.
                  </p>
                  </div>
              </div>
              <div class="doss_cand">
                  <h3>DOSSIER DE CANDIDATURE </h3>
                  <div class="contenu_doss">
                  <p>
                  Copie légalisée du Baccalauréat   <br>
                      <span > ---------------------- </span><br>
Copie légalisée du diplômes post baccalauréat (DUT, DEUG,  BTS,  DTS ou équivalent     <br>
                      <span>---------------------- </span><br>
Copies des relevés des notes     <br>
                      <span>---------------------- </span><br>
Curriculum Vitae      <br>
					   <span>---------------------- </span><br>
Lettre de motivation     <br>
					   <span>---------------------- </span><br>
Attestation de travail      <br>
					   <span>---------------------- </span><br>
Deux photos d’identité     <br>
					   <span>---------------------- </span><br>
Deux enveloppes timbrées portant l’adresse du candidat    <br> 
					   <span>---------------------- </span><br>
Une copie certifiée conforme de la C.I.N <br>
                  </p>
                  </div>
              </div>
              <div class="pub_conc">
                  <h4>PUBLIC CONCERNES</h4>
                  <hr style="height: 7px; color: #e6e6e6; width: 100%; background: #e6e6e6;">
                  <div class="contenu_pub">
                  <p>
                  Les professionnels et salariés ayant un DUT, DEUG, BTS, DTS ou équivalent appartenant au secteur tertiaire,(management, droit, économie, langues étrangères appliquées). 
                  </p>
                  </div>
              </div>
               <div class="date_imp">
                  <h3>DATES IMPORTANTES</h3>
                  <hr style="height: 0.5px; color: #cc3118; width: 80%; background: #cc3118;">
                  <br>
                  <div class="contenu_date">
                  <div class="date_num">31 Octob.</div>
                  <p>
                  Date limite de dépôt des dossiers des candidatures<br>
                  <span>---------------------- </span>
                  </p>
                  <div class="date_num"> 07 au 14 novem.</div>
                  <p>
                  Sélection (examen des dossiers, entretiens) <br>
                  <span>---------------------- </span>
                  </p>
                  <div class="date_num"> 16   novem.</div>
                  <p>
                  Affichage (sur le Site Web) de la liste définitive des admis.<br>
                  <span>---------------------- </span>
                  </p>
                  <div class="date_num"> 21    novem.</div>
                  <p>
                  Début des cours.<br>
                  <span>---------------------- </span>
                  </p>
                  </div>
              </div>
              <div class="res_ped">
                  <h3> RESPONSABLE PEDAGOGIQUE</h3>
                  <hr style="height: 7px; color: #e6e6e6; width: 100%; background: #e6e6e6;">
                  <div class="contenu_res">
                  <p>M.Hajbi Rachid <br>Mail : hajbirac@gmail.com <br>Tel :   0668168736
                  </p>
                  </div>
              </div>
             <div class="res_adm">
                  <h3>  RESPONSABLE ADMINISTRATIF </h3>
                  <hr style="height: 7px; color: #e6e6e6; width: 100%; background: #e6e6e6;">
                  <div class="contenu_adm">
                  <p>Mme Boulouiz Ouafae<br>Mail : oboulouiz@yahoo.fr <br>Tel :   0661435811
                  </p>
                  </div>
              </div>
              <div class="condi">
                  <div class="contenu_condi">
                      <p><span>Conditions : </span>Être titulaire d’un bac + 2 ou équivalent + une expérience  Professionnelle. 
                  </p>
                  <p><span>Admissibilité : </span>Sélection sur dossier, entretien individuel pour tester les connaissances de chaque candidat, l’admission définitive sera prononcée par l’équipe pédagogique de la filière lorsque le candidat  passera  avec succès son entretien. 
                  </p>
                  </div>
              </div>
              
</div>
@endsection
           
                  
           