var image = 4;
var k = 1;
function suivant() {if (k === image) { k = 0; }
        var pos_slider = k * (-740);
                     
         pos_slider = pos_slider + "px";
                     
         document.getElementById('contenu').style.marginLeft = pos_slider; k++; }

