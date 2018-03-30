<DOCTYPE! html>
<html>
<head>
    <title>events</title>
    <meta charset='UTF-8'>
    </head>
    <body>
         <ol>
             <!--</*?php foreach ($events as $event): ?>
            <li>
               <//?php echo $event; 
                endforeach ;?>
             </li>-->
             
             @foreach($events as $event)
             <li> {{ $event }}</li>
             @endforeach
        </ol>
    </body>

</html>