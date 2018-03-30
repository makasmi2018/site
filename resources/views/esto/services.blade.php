@extends('layout.application')
    @section('title')
        Les Services ESTO 
    @endsection
   @section('main')
               <div class="tete_serv">
                  <h1> SERVICES DE L’ADMINISTRATION </h1>
               </div>
               <div class="esto_droit">
                  <p>
                   <a href="{{ url('motdirecteur') }}">MOT DE DIRECTEUR</a><br><br>

                   ----------------------<br><br>

                      <a href="{{url('ecolechiffre')}}">L’ECOLE EN CHIFFRE</a><br><br>

                  ----------------------<br><br>

                  <a href="{{ url('direction') }}">DIRECTION</a><br><br>

                  ----------------------<br><br>

                  <a href="{{ url('cahiernormespeda') }}">CAHIER DES NORMES  
	     	     PEDAGOGIQUES</a><br><br>

                  ----------------------<br><br>

                  SERVICES DE L’ADMINISTRATION<br>
                   </p>
               </div>
               <div class="serv">
                   <h2>LES SERVICES :</h2>
                   <hr style="color:#5889d4; height: 6px; width: 100%; background: #5889d4;">
                   <p>
                   <a href="{{url('ressourceshumaines')}}">Service Resources Humaines </a><br>- - - - - - - - - - - - - - - - - - - - - <br><br>
                   <a href="{{ url('independance') }}">Service Intendance</a><br>- - - - - - - - - - - - - - - - - - - - - <br><br>
                   <a href="{{ url('informatique') }}">Service Informatique </a><br>- - - - - - - - - - - - - - - - - - - - - <br><br>
                   <a href="{{ url('comcoop') }}">Coopération et Communication </a><br>- - - - - - - - - - - - - - - - - - - - - <br><br>
                   <a href="{{ url('interface') }}">Interface EST/Entreprises </a><br>- - - - - - - - - - - - - - - - - - - - - <br><br>
                   <a href="#">Affaires estudiantines</a><br>- - - - - - - - - - - - - - - - - - - - - <br><br>
                   <a href="{{ url('biblio') }}">Bibliothèque</a><br>- - - - - - - - - - - - - - - - - - - - - <br><br>
                   </p>
               </div>
   @endsection