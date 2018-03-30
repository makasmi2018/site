@extends('layout.application')
    @section('title')
        Recherche Scientifique
    @endsection
   @section('main')
         <div class="eii">
         <div class="tete_ga">
            @foreach($filieresgas as $fga)
             <h1>DUT : {{$fga->}}</h1>
             <p>coordonnateur pédagogique : <span style="font-style:italic !important; color:#e5d4d4;"></span>
             </p>
             <p>EMail : <span style="font-style:italic !important; color:#e5d4d4;"></span>
             </p>
         </div>
         
</div>
   @endsection