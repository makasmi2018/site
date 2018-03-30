<DOCTYPE! html>
<html>
    <head>
        <title>Actualtés-admin</title>
        <meta charset="utf-8">
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
        <form method="post" action="{{ route('actus') }}">
            <fieldset>
                <legend>Ajouter une actualité</legend>
            <table>
                <tr>
                    <td>
           <label for="texte_actu">texte d'actualité</label>
                    </td>
                    <td>
                        <textarea  name="texte_actu" id="texte_actu"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
             <label for="date_actu">date d'actualité</label>
                    </td>
                    <td>
            <input type="date" name="date_actu" id="date_actu">
                    </td>
                    </tr>
                    <tr>
                       <td>
             <label for="image_actu">image d'actualité</label>
                        </td>
                        <td>
            <input type="file" name="image_actu" "image_actu">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
            <input type="submit" value="Ajouter">
            <input type="reset" value="Annuler">
                        </td>
                        </tr>
            </table>
            </fieldset>
            <input type="hidden" name="_token" value="{{csrf_token()}}">
        </form>
                
    </body>
</html>