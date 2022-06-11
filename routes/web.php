<?php
use Illuminate\Support\Facades\Route;
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/abc','FrontentController@index')->name('home');

Route::group(['middleware'=>'Auth'],function(){

Route::prefix('users')->group(function(){
    Route::get('/view', 'Backend\UserController@view')->name('users/view');
    Route::get('/add', 'Backend\UserController@add')->name('users.add');
    Route::post('/store', 'Backend\UserController@store')->name('users.store');
    Route::get('/edit/{id}', 'Backend\UserController@edit')->name('users.edit');
    Route::post('/update/{id}', 'Backend\UserController@update')->name('users.update');
    Route::get('/delete/{id}', 'Backend\UserController@delete')->name('users.delete');
});

});

Route::prefix('profile')->group(function(){
    Route::get('/view', 'Backend\ProfileController@view')->name('profile.view');
    Route::get('/add', 'Backend\ProfileController@add')->name('profile.add');
    Route::post('/store', 'Backend\ProfileController@store')->name('profile.store');
    Route::get('/edit/{id}', 'Backend\ProfileController@edit')->name('profile.edit');
    Route::post('/update/{id}', 'Backend\ProfileController@update')->name('profile.update');
    Route::get('/delete/{id}', 'Backend\ProfileController@delete')->name('profile.delete');
});
Route::prefix('password')->group(function(){
    Route::get('/view', 'Backend\PasswordController@view')->name('password.view');
    Route::get('/add', 'Backend\PasswordController@add')->name('password.add');
    Route::post('/update', 'Backend\PasswordController@update')->name('password.update');
    Route::get('/delete/{id}', 'Backend\PasswordController@delete')->name('password.delete');
});
Route::prefix('contact')->group(function(){
    Route::get('/view', 'Backend\ContactController@view')->name('contact.view');
    Route::get('/add', 'Backend\ContactController@add')->name('contact.add');
    Route::post('/store', 'Backend\ContactController@store')->name('contact.store');
    Route::get('/edit/{id}', 'Backend\ProfileController@edit')->name('contact.edit');
    Route::post('/update', 'Backend\ContactController@update')->name('contact.update');
    Route::get('/delete/{id}', 'Backend\ContactController@delete')->name('contact.delete');
});
Route::prefix('abouts')->group(function(){
    Route::get('/view', 'Backend\AboutController@view')->name('abouts.view');
    Route::get('/add', 'Backend\AboutController@add')->name('abouts.add');
    Route::post('/store', 'Backend\AboutController@store')->name('abouts.store');
    Route::get('/edit/{id}', 'Backend\AboutController@edit')->name('abouts.edit');
    Route::post('/update/{id}', 'Backend\AboutController@update')->name('abouts.update');
    Route::get('/delete/{id}', 'Backend\AboutController@delete')->name('abouts.delete');
});
Route::prefix('logos')->group(function(){
    Route::get('/view', 'Backend\LogoController@view')->name('logos.view');
    Route::get('/add', 'Backend\LogoController@add')->name('logos.add');
    Route::post('/store', 'Backend\LogoController@store')->name('logos.store');
    Route::get('/edit/{id}', 'Backend\LogoController@edit')->name('logos.edit');
    Route::post('/update/{id}', 'Backend\LogoController@update')->name('logos.update');
    Route::get('/delete/{id}', 'Backend\LogoController@delete')->name('logos.delete');
});
Route::prefix('slider')->group(function(){
    Route::get('/view', 'Backend\SliderController@view')->name('slider.view');
    Route::get('/add', 'Backend\SliderController@add')->name('slider.add');
    Route::post('/store', 'Backend\SliderController@store')->name('slider.store');
    Route::get('/edit/{id}', 'Backend\SliderController@edit')->name('slider.edit');
    Route::post('/update/{id}', 'Backend\SliderController@update')->name('slider.update');
    Route::get('/delete/{id}', 'Backend\SliderController@delete')->name('slider.delete');
});
Route::prefix('categorys')->group(function(){
    Route::get('/view', 'Backend\CategoryController@view')->name('categorys.view');
    Route::get('/add', 'Backend\CategoryController@add')->name('categorys.add');
    Route::post('/store', 'Backend\CategoryController@store')->name('categorys.store');
    Route::get('/edit/{id}', 'Backend\CategoryController@edit')->name('categorys.edit');
    Route::post('/update/{id}', 'Backend\CategoryController@update')->name('categorys.update');
    Route::get('/delete/{id}', 'Backend\CategoryController@delete')->name('categorys.delete');
});
Route::prefix('brands')->group(function(){

   Route::resource('brand', 'Backend\BrandController');

});
/*color*/
Route::prefix('colors')->group(function(){
    Route::get('/view', 'Backend\ColorController@view')->name('colors.view');
    Route::get('/add', 'Backend\ColorController@add')->name('colors.add');
    Route::post('/store', 'Backend\ColorController@store')->name('colors.store');
    Route::get('/edit/{id}', 'Backend\ColorController@edit')->name('colors.edit');
    Route::post('/update/{id}', 'Backend\ColorController@update')->name('colors.update');
    Route::get('/delete/{id}', 'Backend\ColorController@delete')->name('colors.delete');
});
//size
Route::prefix('sizes')->group(function(){
    Route::get('/view', 'Backend\SizeController@view')->name('sizes.view');
    Route::get('/add', 'Backend\SizeController@add')->name('sizes.add');
    Route::post('/store', 'Backend\SizeController@store')->name('sizes.store');
    Route::get('/edit/{id}', 'Backend\SizeController@edit')->name('sizes.edit');
    Route::post('/update/{id}', 'Backend\SizeController@update')->name('sizes.update');
    Route::get('/delete/{id}', 'Backend\SizeController@delete')->name('sizes.delete');
});
 
Route::prefix('product')->group(function(){
    Route::get('/view', 'Backend\ProductController@view')->name('product.view');
    Route::get('/add', 'Backend\ProductController@add')->name('product.add');
    Route::post('/store', 'Backend\ProductController@store')->name('product.store');
    Route::get('/edit/{id}', 'Backend\ProductController@edit')->name('product.edit');
    Route::post('/update/{id}', 'Backend\ProductController@update')->name('product.update');
    Route::get('/delete/{id}', 'Backend\ProductController@delete')->name('product.delete');
});
//////fron tent
Route::get('/contact/us','Frontent\ContactUsController@index')->name('contact.us');
Route::get('/about/us','Frontent\AboutUsController@index')->name('about.us');
//cart
Route::post('/add-to-cart','Frontent\CartController@addtoCart')->name('insert.cart');
Route::get('/show-to-cart','Frontent\CartController@showCart')->name('show.cart');
//customer login
Route::get('/customer-login','Frontent\CheckoutController@customerLogin')->name('customer.login');
Route::get('/customer-sinup','Frontent\CheckoutController@customerSingup')->name('customer.sungup');
