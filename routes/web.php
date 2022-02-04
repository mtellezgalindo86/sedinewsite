<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', 'WelcomeController@index')->name("home");

//Quienes somos
Route::get('/historia-sedi', 'QuienesSomosController@historiaSedi')->name('historia-sedi');
Route::get('/mision', 'QuienesSomosController@mision')->name('mision');
Route::get('/vision', 'QuienesSomosController@vision')->name('vision');
Route::get('/valores', 'QuienesSomosController@valores')->name('valores');
Route::get('/certificaciones', 'QuienesSomosController@certificaciones')->name('certificaciones');


//Modelo educativo
Route::get('/modelo-educativo-integral-sedi', 'ModeloEducativoController@modeloeducativo')->name('modelo-educativo-integral-sedi');
Route::get('/educacion-positiva', 'ModeloEducativoController@educacionpositiva')->name('educacion-positiva');
Route::get('/educacion-en-valores', 'ModeloEducativoController@educacionenvalores')->name('educacion-en-valores');
Route::get('/disciplina-personal', 'ModeloEducativoController@disciplinapersonal')->name('disciplina-personal');
Route::get('/inteligencia-emocional', 'ModeloEducativoController@inteligenciaemocional')->name('inteligencia-emocional');

Route::get('/perfil-de-egresado', 'ModeloEducativoController@perfilEgresado')->name('perfil-de-egresado');
//Programas
Route::get('/programas-de-desarollo-y-cuidado-infantil-guarderia-kinder', 'ProgramasController@programasdesarrollo')->name('programas-de-desarollo-y-cuidado-infantil-guarderia-kinder');
Route::get('/after-school', 'ProgramasController@afterschool')->name('after-school');
Route::get('/programa-de-verano', 'ProgramasController@verano')->name('programa-de-verano');

//Servicios
Route::get('/servicios-de-alimentacion', 'ServiciosController@servicioalimentancion')->name('servicios-de-alimentacion');
Route::get('/protocolo-covid', 'ServiciosController@protocolo')->name('protocolo-covid');
Route::get('/filtro-diario-de-salud', 'ServiciosController@filtro')->name('filtro-diario-de-salud');
Route::get('/servicios-de-video-permanente', 'ServiciosController@videopermanente')->name('servicios-de-video-permanente');
Route::get('/servicios-de-transporte', 'ServiciosController@transporte')->name('servicios-de-transporte');


//Convenios y alianzas
Route::get('/convenios-con-empresas', 'ConveniosAlianzasController@convenios')->name('convenios-con-empresas');
Route::get('/alianzas-con-instituciones-educativas', 'ConveniosAlianzasController@alianzas')->name('alianzas-con-instituciones-educativas');

//Blog
Route::get('/blog','BlogController@index')->name('blog');

Route::get('/blog-detail','BlogController@detail')->name('blog-detail');


//Videoteca
Route::get('/videoteca','VideotecaController@getlist')->name('videoteca');


//Contacto
Route::get('/contacto', 'ContactoController@contacto')->name('contacto');
Route::post('/post-contact', 'ContactoController@postContact')->name('post-contact');
Route::get('/gracias', 'ContactoController@thankyou')->name('gracias');

Auth::routes();

Route::get('/adminsediregistros', 'HomeController@index')->name('adminsediregistros');
Route::get('/update-contact/{id}', 'HomeController@updateContacto')->name('update-contact');
