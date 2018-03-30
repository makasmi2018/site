@extends('layout.application')
    @section('title')
        Recherche Scientifique
    @endsection
   @section('main')
      <div class="labo">
       <div class="tete_rech">
          @foreach($labos as $nlb)
           <h1>{{$nlb->nom_labo}}</h1>
           @endforeach
       </div>
       <div class="labo_droit">
           <h2>LES MEMBRES :</h2>
           <hr >
           <p>
               @foreach($membreslabos as $mem)
               <span>{{$mem->nom_mem}} </span><br>
               {{$mem->spe_mem}}<br><br>
               <span>- - - - - - - - - - - - - - -</span><br>
               @endforeach
           </p>
           
       </div>
       <div class="labo_intro1">
       @foreach($labos as $lb)
         <p>
            <span style="color:#ec8963;">{{$lb->abrev_nom}}</span><br><br>
            {!!nl2br($lb->def_labo)!!}
         </p>
         @endforeach
       </div>
       
       <div class="axes">
          <h2>AXES DE  RECHERCHES </h2>
          <hr ><br><br><br>
          @foreach($axeslabos as $axe)
           <h3>Axe {{$axe->id_axe}} :</h3>
           <span>{{$axe->titre_axe}}</span>
           <p>
               {{$axe->contenu_axe}}
           </p>
           @endforeach
       </div>
       <div class="labo_equi">
       <h2>LES EQUIPES</h2>
       <hr ><br><br>
       @foreach($equipeslabos as $equi)
         <p>
            {{$equi->nom_equi}}<br>
         </p>
         @endforeach
       </div>
       <div class="exp_pro">
       @foreach($labos as $exp)
          <h2>Expertise et production scientifique </h2>
           <p>
            {!!nl2br($exp->expe_prod)!!}
         </p>
         @endforeach
       </div>
       <div class="trav_rech">
       <h2>Travaux de Recherche en cours </h2><br>
          <hr ><br><br>
       @foreach($labos as $trav)
           <p>
            {!!nl2br($trav->trav_cours)!!}
         </p>
         @endforeach
       </div>
        <div class="contact_labo">
          <h2>CONTACT </h2><br>
          @foreach($labos as $con)
          <hr ><br><br>
           <p>
            Adresse postale : {{$con->ad_po}}<br><br>
            Site Web : {{$con->site_web}}<br><br>
            E-mail : {{$con->email_labo}}
         </p>
         @endforeach
       </div>
</div>
@endsection