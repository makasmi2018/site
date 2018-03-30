@extends('layout.application')
    @section('title')
        Formation Continue ESTO
    @endsection
   @section('main') 
                <div class="et_space">
                       <h3>Espace Etudiant</h3>
                          <p> <a href="{{url('emptem')}}">- Emplois temps</a><br><br>
                              <a href="{{url('calendrier')}}"> -Calendrier 2017/2018 </a><br><br>
                              <a href="{{url('projfin')}}">  -Projets de Fin d'Etudes</a><br><br>
                              <a href="{{url('bourses')}}">  -Bourses d'études</a><br><br>
                              <a href="#"> -Activités parascolaires</a><br><br>
                              <a href="{{url('qfadut')}}">  -Que faire après DUT?</a><br><br>
                              <a href="#">   -Projets en vidéo</a><br><br>
                         </p>
                </div>
                <div class="for_con">
                    <h2>FORMATION CONTINUE</h2>  
                    <hr style="height: 2px; color: #e84347; width: 100%; background: #e84347;"> 
                    <div class="contenu_for">
                      @foreach($formationscontinues as $forcon)
                        <p>
                         <a href="{{ url($forcon->for_url)}}">
                        <span style="font-size: 16pt; color:black;">{{$forcon->for_con}} </span><span style="font-size: 14pt; ">{{$forcon->filiere_for}}</span> <span style="color:#168d0d;">(Payante)</span>
                        <br> 
                        </a>
                        </p>
                        <p style="text-align:center !important; color:#e84347;">- - - - - - - - - - - - - - - - - - - - - - - - - - - - -</p>
                        @endforeach
                    </div>
                </div>
@endsection
           
                  
           