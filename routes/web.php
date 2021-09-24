<?php

use Illuminate\Support\Facades\Route;



Auth::routes();
Route::get('/', function () {
    return view('welcome');
});




Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/test', function () {
//     return  '<h1>welcome laravel again</h1>';
// });

// Route parmers 

/**  parms  is required */
// Route::get('/test/{id}', function ($id) {
//      $b = $id ;
//      $stm = ' <h1>  welcome laravel again  the number is</h1>     ';
//      echo     "  " .  $stm . '<h1  style="color:red"  >'.  $b . '</h1> '   ;
// });
// /** route parms is optional  */
// Route::get('/test2/{id}', function ($id) {
//     $b = $id ;
//     $stm = ' <h1>  welcome laravel again  the number is</h1>     ';
//     echo     "  " .  $stm . '<h1  style="color:red"  >'.  $b . '</h1> '   ;
// });



// Route::get('/showb/{id}', function ($id) {
//     return 'b' . $id;
// })->name("b");
// Route::get('/showa', function () {
//     return 'a';
// })->name("a");


// Route::namespace('front')->group(function(){

//     Route::get('/about','ShowController@about' ) ;
// }) ;
/**
 * 
 * all  works here  blog post 
 * 
 */


Route::get('/posts','PostController@index') ;
Route::get('/posts/{id}','PostController@show')->name('posts.show') ;
Route::get('/create','PostController@getForm')->name('posts.getform') ;
Route::post('/posts/store','PostController@saveForm')->name('posts.saveform') ;

Route::get('/edit/{id}','PostController@edit')->name('post.edit') ;
Route::post('/update/{id}','PostController@update')->name('post.update') ;
Route::get('/delete/{id}','PostController@delete')->name('post.delete') ;
Route::get('/deleted/{id}','PostController@deleteagain')->name('posts.deleted') ;
















Route::group([ 'prefix'  =>'users','namespace' => 'front'],function(){
    Route::get('/about','ShowController@about' ) ;
});
    

  ###############"  CRUD  BY TABLE  PRODUCTS  #################

  Route::resource('products','ProductController')  ;
  Route::get('products/softdelete/{id}','ProductController@softdelete')->name('product.softdelete')  ;


  

     Route::group(  [ 'prefix' => LaravelLocalization::setLocale()  ], function(){

        Route::get('testar',function(){

            return 'hy   no one here !'  ;
        })  ;

     }) ;

    //  group(
    //     [
          
    //         'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
        
    //     ]
    // )->