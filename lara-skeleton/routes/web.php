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

Route::group(['prefix' => '/'], function() {
    Route::get('home', 'HomeController@welcome'); 
    Route::get('/cadastrar', 'ClientsController@cadastrar'); 
    Route::get('/forif/{value}', 'ClientsController@forif');
    Route::get('/blade', 'ClientsController@blade');    
    
}); 

Route::group(['prefix' => '/portal'], function() {
    Route::group(['prefix' => '/financeiro'], function() {
        Route::get('dashboard', 'Portal\FinanceiroController@dashboard'); 
        Route::get('faturas', 'Portal\FinanceiroController@faturas');
        Route::get('creditos', 'Portal\FinanceiroController@creditos'); 
    }); 

    Route::group(['prefix' => '/client'], function() {
        Route::get('/', 'ClientsController@listAll');
        Route::get('/new', 'ClientsController@formRegister');         
        Route::post('/create', 'ClientsController@create');         
        Route::get('/edit/{id}', 'ClientsController@formEdit');         
        Route::post('update/{id}', 'ClientsController@update'); 
        Route::get('/delete/{id}', 'ClientsController@delete');         
    }); 

    
}); 

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', 'HomeController@welcome'); 
// Route::get('/cadastrar', 'ClientsController@cadastrar'); 
// Route::get('/forif/{value}', 'ClientsController@forif');
// Route::get('/blade', 'ClientsController@blade');


// Route::get('/forif/{value}', function($value) {
//     return view('forif')
//             ->with('value', $value)
//             ->with('myArray', [
//                 'valor1', 
//                 'valor2',
//                 'valor3',
//                 'valor4'
//             ]); 
// }); 

// Route::get('/cadastrar', function() {
//     $produto = 'MOTO E5'; 
//     $id = 112233;
//     return view('cadastrar')
//             ->with('produto', $produto)
//             ->with('id', $id); 
// }); 

// Route::get('/blade', function() {
//     $produto = 'MOTO E5'; 
//     $id = 112233;

//     return view('test')
//             ->with('produto', $produto)
//             ->with('id', $id)
//             ->with('test', 'Tenho Valor'); 
// }); 

// Route::get('/cliente', function () {
//     return "Hello Cliente Route"; 
// }); 

// Route::get('/admin/cliente', function() {
//     return "Hello Admin cliente route";
// }); 

// Route::get('/produto/{name}/{id}', function ($name, $id) {
//     return "Produto $name - $id"; 
// }); 

// Route::get('/fornecedor/{name}/{id?}', function($name, $id = null) {
//     return "Fornecedor $name - $id"; 
// }); 