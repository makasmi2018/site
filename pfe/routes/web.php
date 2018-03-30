<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'AccueilController@index');
Route::get('/formation_con', 'FormationsController@index');
Route::get('/formation_li','FormationliController@index');
Route::get('/labo', 'LabosController@index');
Route::get('/formation_li1',function(){
    return view('formation/formation_li1');
});
Route::get('/motdirecteur',function(){
    return view('esto/motdirecteur');
});
Route::get('/ecolechiffre',function(){
    return view('esto/ecolechiffre');
});
Route::get('/direction',function(){
    return view('esto/direction');
});
Route::get('/cahiernormespeda',function(){
    return view('esto/cahiernormespeda');
});
Route::get('/services',function(){
    return view('esto/services');
});
Route::get('/ressourceshumaines',function(){
    return view('esto/services/ressourceshumaines');
});
Route::get('/independance',function(){
    return view('esto/services/independance');
});
Route::get('/informatique',function(){
    return view('esto/services/informatique');
});
Route::get('/comcoop',function(){
    return view('esto/services/comcoop');
});
Route::get('/interface',function(){
    return view('esto/services/interface');
});
Route::get('/biblio',function(){
    return view('esto/services/biblio');
});
Route::get('/emptem',function(){
    return view('esto/espace_etudiant/emptem');
});
Route::get('/calendrier',function(){
    return view('esto/espace_etudiant/calendrier');
});
Route::get('/projfin',function(){
    return view('esto/espace_etudiant/projfin');
});
Route::get('/bourses',function(){
    return view('esto/espace_etudiant/bourses');
});
Route::get('/qfadut',function(){
    return view('esto/espace_etudiant/qfadut');
});
Route::get('/recherchesc',function(){
    return view('rechscien/recherchesc');
});
Route::get('/formation_initiale',function(){
    return view('formation/formation_initiale');
});

Route::get('/EII',function(){
    return view('filieres_ga/EII');
});
Route::get('/projetrech',function(){
    return view('rechscien/projetrech');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/connexion',[
    'uses'=>'LoginController@login',
    'as' => 'connexion'
]);
Route::group(['middleware' =>'auth'],function(){
        route::get('admin.dashbord',function(){
            return view('admin/dashbord');
            })->name('admin.dashbord');
        route::get('dashbord',function(){
            return view('dashbord');
        });
    route::get('admin/actualite',function(){
        return view('admin.actualites');
    });
    });

Route::post('/actus',[
    'uses'=>'actualiteController@ajouterActu',
    'as' => 'actus'
]);