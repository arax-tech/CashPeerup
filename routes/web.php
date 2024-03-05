<?php

use Illuminate\Support\Facades\Route;

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function () { return redirect('home');});
Route::get('/home', 'Front\HomeController@home');
Route::get('/about', 'Front\HomeController@about');
Route::get('/loan', 'Front\HomeController@loan');
Route::get('/loan/{id}', 'Front\HomeController@loanDetails');
Route::get('/faq', 'Front\HomeController@faq');
Route::get('/contact', 'Front\HomeController@contact');
Route::get('/withdrawData', 'Front\HomeController@withdrawData');
Route::get('/returnData', 'Front\HomeController@returnData');
Route::post('/review', 'Front\HomeController@review');




Route::get('/admin', 'Admin\LoginController@index');
Route::post('/admin', 'Admin\LoginController@index');




/*Admin Routes*/
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth' => 'Admin']],function(){

	Route::get('/dashboard/', 'AdminController@dashboard');
	Route::get('/profile/', 'AdminController@profile');
	Route::post('/profile/', 'AdminController@profile');
	Route::get('/logout/', 'AdminController@logout');

	Route::get('/password', 'PasswordController@password');
	Route::get('/check-pwd', 'PasswordController@check');
	Route::post('/update_password', 'PasswordController@update_password');


	
	/*Loan CRUD*/
	Route::get('loan', 'LoanController@index');
	Route::post('loan/store', 'LoanController@store');
	Route::post('loan/update/{id}', 'LoanController@update');
	Route::get('loan/delete/{id}', 'LoanController@delete');


	/*Loan Application CRUD*/
	Route::get('loan-application', 'ApplyLoanController@index');
	Route::post('loan-application/store', 'ApplyLoanController@store');
	Route::post('loan-application/update/{id}', 'ApplyLoanController@update');
	Route::get('loan-application/delete/{id}', 'ApplyLoanController@delete');

	/*Loan WithDraw CRUD*/
	Route::get('loan-application', 'ApplyLoanController@index');
	Route::post('loan-application/store', 'ApplyLoanController@store');
	Route::post('loan-application/update/{id}', 'ApplyLoanController@update');
	Route::get('loan-application/delete/{id}', 'ApplyLoanController@delete');


	/*Loan Application CRUD*/
	Route::get('withdraw', 'WithdrawController@index');
	Route::post('withdraw/store', 'WithdrawController@store');
	Route::post('withdraw/update/{id}', 'WithdrawController@update');
	Route::get('withdraw/delete/{id}', 'WithdrawController@delete');


	/*User CRUD*/
	Route::get('user', 'UserController@index');
	Route::get('user/delete/{id}', 'UserController@delete');

	Route::get('review/', 'ReviewController@index');
	Route::post('review/update/{id}', 'ReviewController@update');
	Route::get('review/delete/{id}', 'ReviewController@delete');
});















Route::get('/register', 'User\LoginController@register');
Route::post('/register', 'User\LoginController@register');
Route::get('/verify', 'User\LoginController@VerifyUser');

Route::get('/login', 'User\LoginController@login');
Route::post('/login', 'User\LoginController@login');
/*User Routes*/
Route::group(['prefix' => 'user', 'namespace' => 'User', 'middleware' => ['auth' => 'User']],function(){

	Route::get('/dashboard/', 'UserController@dashboard');
	Route::get('/profile/', 'UserController@profile');
	Route::post('/profile/', 'UserController@profile');
	Route::get('/logout/', 'UserController@logout');

	Route::get('/password', 'PasswordController@password');
	Route::get('/check-pwd', 'PasswordController@check');
	Route::post('/update_password', 'PasswordController@update_password');


	
	/*Loan Application CRUD*/
	Route::get('apply-loan', 'ApplyLoanController@index');
	Route::post('apply-loan/store', 'ApplyLoanController@store');
	Route::post('apply-loan/update/{id}', 'ApplyLoanController@update');
	Route::get('apply-loan/delete/{id}', 'ApplyLoanController@delete');


	/*Loan Application CRUD*/
	Route::get('withdraw', 'WithdrawController@index');
	Route::post('withdraw/store', 'WithdrawController@store');
	Route::post('withdraw/update/{id}', 'WithdrawController@update');
	Route::get('withdraw/delete/{id}', 'WithdrawController@delete');




	
});




Route::get('cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    die("Cash Cleard");
});