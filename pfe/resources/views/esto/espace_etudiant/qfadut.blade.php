@extends('layout.application')
    @section('title')
        Que faire après DUT?
    @endsection
   @section('main')
         <div class="qfadut">
               <div class="tete_espace">
                  <h1> QUE FAIRE APRES DUT? </h1>
               </div>
               <div class="espace_droit">
                  <p>
                   <a href="{{ url('emptem') }}">Emplois du temps </a><br><br>

                   ----------------------<br><br>

                   <a href="{{ url('calendrier') }}">Calendrier 2017/2018 </a><br><br>

                  ----------------------<br><br>

                  <a href="{{ url('projfin') }}">Projets de Fin d'Etudes</a> <br><br>

                  ----------------------<br><br>

                  <a href="{{ url('bourses') }}">Bourses d'études </a><br><br>

                  ----------------------<br><br>

                  <a href="#">Activités parascolaires </a><br><br>

                  ----------------------<br><br>
                  Que faire après DUT?<br><br>

                  ----------------------<br><br>
                  <a href="#">Projets en vidéo  </a><br>
                   </p>
               </div>
               <div class="intro1">
               <img src="/img/dut/1.jpg">
               <p>
                   <span style="margin-left:60px !important; color:black; font-weight:bold;">1. Une insertion professionnelle rapide.</span> Voilà l’objectif principal du DUT (diplôme universitaire de technologie). <br><br>
                   .   Trouver un emploi après un DUT : Les diplômés d’un DUT n’ont pas de problème à trouver un emploi. 
                   En effet, le DUT est une formation permettant de mettre un pied dans le monde de l’entreprise (stages, alternance, intervenants issus du monde professionnel, projets tutorés…). Plus de la moitié des enseignements suivis en DUT sont d’ailleurs destinés à acquérir un savoir-faire. Les étudiants diplômés de ces cursus n’ont donc aucun mal à trouver une entreprise lorsqu’ils se lancent sur le marché du travail. 
 
               </p>
               </div>
               <div class="intro2">
               <img src="/img/dut/2.jpg">
               <p>
                   <span style="color:black !important; font-weight:bold !important;">2.      Passerelle vers d'autres établissements de l'enseignement supérieur : </span><br>
                Chaque année, une majorité des diplômés de DUT font le choix de poursuivre leurs études. Voici les choix qui s’offrent à vous si vous voulez poursuivre vos études :<br>
                   <span>Après un DUT :</span> intégrer une licence ou une licence pro puis un master/master pro ensuite un cycle doctoral (selon les modalités d'admission et dans la limite des places disponibles) <br><br>
                <span>Après un DUT :</span> intégrer une école d’ingénieurs puis un cycle de doctorat  (selon les modalités d'admission et dans la limite des places disponibles)<br><br>
                <span>Après un DUT :</span> intégrer une école de commerce puis un cycle de doctorat  (selon les modalités d'admission et dans la limite des places disponibles)
 
               </p>
               </div>
               <div class="intro3">
               <p>
                            <span>NB   : </span>  la passerelle vers les autres établissements n'est pas automatique , il faut avoir une mention, passer des concours ... <br>(Ceci sera décrit dans les modalités d'admission et l'avis du concours d'accès  en question)
               </p>
               <img src="/img/dut/3.jpg">
               </div>
</div>
@endsection