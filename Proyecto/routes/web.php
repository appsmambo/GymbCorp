<?php

Route::get('/', array('as' => 'inicio', 'uses' => 'HomeController@getInicio'));
Route::get('/servicios', array('as' => 'servicios', 'uses' => 'HomeController@getServicios'));

Route::get('nosotros', function () {
    return view('nosotros');
});

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('servicios/asesoria-y-servicio-tributario', function () {
    return view('servicios/asesoria-y-servicio-tributario');
});

Route::get('servicios/asesoria-y-servicio-financiero', function () {
    return view('servicios/asesoria-y-servicio-financiero');
});

Route::get('servicios/asesoria-y-servicio-contable', function () {
    return view('servicios/asesoria-y-servicio-contable');
});

Route::get('servicios/administracion-de-recursos-humanos', function () {
    return view('servicios/administracion-de-recursos-humanos');
});

Route::get('servicios/toma-de-inventarios', function () {
    return view('servicios/toma-de-inventarios');
});

Route::get('servicios/consultoria-empresarial', function () {
    return view('servicios/consultoria-empresarial');
});

Route::get('servicios/seguridad-y-salud-en-el-trabajo', function () {
    return view('servicios/seguridad-y-salud-en-el-trabajo');
});

Route::get('servicios/proyectos-factibilidad', function () {
    return view('servicios/proyectos-factibilidad');
});
