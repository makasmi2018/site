<!DOCTYPE html>
<html>
    <head>
        <title>Dashbord-Ecole Supérieure de Technologie</title>
            <meta charset="UTF-8">
            
            <link rel="stylesheet"  href="./css/back_office/bstyle.css" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
            
           
            </head>
        <body>
             <header>
                
                   <!--              LOGO              -->
                       <div class="logo">
                            <img src="images/socialNetwork/logouniv.png" alt="Logo ump">
                            <SPAN >
                                <img src="images/socialNetwork/logoest.png" alt="logo Est">
                            </SPAN>
                       </div>
                      <div class="bonde_marron">
                      </div>
            </header>
             <div class="header">
                   
                        @guest
                           
                        @else
                            <div class="name" >
                                
                                   Bienvenue {{ Auth::user()->name }} !
                            </div>                                
   
                                <div class="logout" >
                                    <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <img src="./images/bo/logout.png">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                                        @csrf
                                    </form>
                                </div>
                        </div>
                            
                        @endguest
                
        
            <div class="menu">
                 <ul>
                    <li><a href="admin/actualite"><img src="./images/bo/actus.png"><br>Actualités</a>
                     </li>
                     <li><a href=""><img src="./images/bo/slider.png"><br>Slider</a></li>
                     <li><a href=""><img src="./images/bo/events.png"><br>Evénements</a></li>
                     <li><a href=""><img src="./images/bo/users.png"><br>Utilisateurs</a></li>

                </ul>        
            </div>
        </body>
</html>