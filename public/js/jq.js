/*jslint browser: true*/
/*global $, jQuery*/
$(function () { setInterval(function () { $(".slider ul").animate({marginLeft: -800}, 2000, function () { $(this).css({marginLeft: 0}).find("li:last").after($(this).find("li:first"));
         }); }, 8000); 
    $(".suiv").click(function () {
        $(".slider").animate({marginLeft: -200}, 0, function () { $(this).css({marginLeft: 0}).find("li:last").after($(this).find("li:first")); });
    });
      $(".prec").click(function () {
        $(".slider").animate({marginLeft: 200}, 0, function () { $(this).css({marginLeft: 0}).find("li:first").before($(this).find("li:last")); });
    });
               $(".stop").click(function () { $(".slider ul").stop(); });
               
               setInterval(function () { $(".galerie").animate({marginLeft: -650}, 2000, function () { $(this).css({marginLeft: 0}).find(".gal_img img:last").after($(this).find(".gal_img img:first"));
         }); }, 4000); 
               $(".suiv_g").click(function () {
        $(".gal_outer").animate({marginLeft: -200}, 0, function () { $(this).css({marginLeft: 0}).find(".gal_img img:last").after($(this).find(".gal_img img:first")); });
    });
              });
/*chercher le dernier li de notre liste (find("li:last")) 
et nous y plaçons juste après (after()) le premier 
élément de notre liste ($(this).find("li:first"))*/