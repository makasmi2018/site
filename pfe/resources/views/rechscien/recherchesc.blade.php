@extends('layout.application')
    @section('title')
        Recherche Scientifique
    @endsection
   @section('main')
   <div class="rechscien">
       <div class="tete_rech">
           <h1>RECHERCHE SCIENTIFIQUE</h1><hr>
       </div>
       <div class="rech_droit">
           <p>
               <a href="#">PRODUCTION SCIENTIFIQUE</a><br><br>
                   ----------------------<br><br>
               <a href="{{url('projetrech')}}">PROJETS DE RECHERCHE</a><br><br>
                   ----------------------<br><br>
               <a href="{{url('labo')}}">LABORATOIRES</a><br>
               
           </p>
       </div>
       <div class="contenu_rech">
         <h2>LES LABOS DE RECHERCHES </h2>
           <hr><br>
          <div class="con_1">
           <h3>LE LABORATOIRE DE RECHERECE EN EDUCATION ET EN FORMATION  (REF)</h3>
           <p>
               <span>Responsable :</span>  <span style="font-style:italic !important; color:black !important; font-">Abdelali Kaaouachi</span><br>
               <span>Mission : </span>Le LaREF se donne pour mission de conduire des études et des recherches en éducation et formation, pour faire progresser les connaissances et les pratiques dans le champ de l’éducation et de la formation. 
               <br><br><br>
               <span style="color:#9e9e9e !important; margin-left:100px; font-weight:bold !important;">------------------------------------------------------------------------</span>
           </p>
           </div>
           <div class="con_1">
           <h3>LE LABORATOIRE DE RECHERECE EN MANAGEMENT ET DEVELLOPEMENT DES ENTREPRISES ET DES ORGANISATIONS (MADEO)</h3>
           <p>
               <span>Responsable :</span>  <span style="font-style:italic !important; color:black !important; font-">Elkadiri Driss</span><br>
               <span>Mission : </span>Le laboratoire MADEO se propose d’effectuer des recherches de toute nature (fondamentale, appliquée, recherche–intervention...) dans le domaine du management, de développement des entreprises et des organisations et surtout dans le domaine des relations entre les deux.
               <br><br><br>
               <span style="color:#9e9e9e !important; margin-left:100px; font-weight:bold !important;">------------------------------------------------------------------------</span>
           </p>
           </div>
           <div class="con_1">
           <h3>LE LABORATOIRE DE RECHERECE EN  GENIE ELACTRIQUE ET MAINTENANCE (GEM)</h3>
           <p>
               <span>Responsable :</span>  <span style="font-style:italic !important; color:black !important; font-">Smail ZOUGGAR</span><br>
               <span>Thème de recherche:  </span>Génie Electrique et énergie renouvelable. 
               <br><br><br>
               <span style="color:#9e9e9e !important; margin-left:100px; font-weight:bold !important;">------------------------------------------------------------------------</span>
           </p>
           </div>
           <div class="con_1">
           <h3>LE LABORATOIRE DE RECHERECE ENMATHEMATIQUES APPLIQUEES, TRAITEMENT DU SIGNAL INFORMATIQUE (MATSI)</h3>
           <p>
               <span>Responsable :</span>  <span style="font-style:italic !important; color:black !important; font-">Moussaoui Mimoun</span><br>
               <br><br><br>
               <span style="color:#9e9e9e !important; margin-left:100px; font-weight:bold !important;">------------------------------------------------------------------------</span>
           </p>
           </div>
       </div>
</div>
    @endsection