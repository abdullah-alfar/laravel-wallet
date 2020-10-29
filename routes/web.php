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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::post('api/v1/authenticate', 'APIController@login');

Route::group(['middleware' => ['client']], function () {

    Route::get('/', 
            ['as'=>'home',
            'uses'=>'ClientController@dashboard'
    ]);
    Route::get('/home', 
    ['as'=>'home',
    'uses'=>'ClientController@dashboard'
    ]);
    Route::get('/transaction', 
    ['as'=>'transaction',
    'uses'=>'TransactionController@getTransactions'
    ]);
    Route::get('/profile', 
    ['as'=>'profile',
    'uses'=>'ClientController@getProfile'
    ]);
    Route::get('/help', 
    ['as'=>'help',
    'uses'=>'HelpController@getHelp'
    ]);
    Route::post('/help', 
    ['as'=>'help',
    'uses'=>'HelpController@postHelp'
    ]);
    Route::get('/send', 
    ['as'=>'send',
    'uses'=>'TransactionController@getSend'
    ]);
    Route::post('/send', 
    ['as'=>'send',
    'uses'=>'TransactionController@postSend'
    ]);
    /**
     * Credit/debit card routes
     */
    Route::get('/cardView',[
        'uses'=>'TransactionController@getCardView',
        'as'=>'cardview'
    ]);
    Route::post('/cardDeposit',[
        'uses'=>'TransactionController@cardDeposit',
        'as'=>'cardDeposit'
    ]);
    /**
     * Paypal routes
     */
    // route for view/blade file
    Route::get('paywithpaypal', array(
        'as' => 'paywithpaypal',
        'uses' => 'PaypalController@payWithPaypal',
    ));
    // route for post request
    Route::post('paypal', array(
        'as' => 'paypal',
        'uses' => 'PaypalController@postPaymentWithpaypal',
    ));
    // route for check status responce
    Route::get('paypal', array(
        'as' => 'status',
        'uses' => 'PaypalController@getPaymentStatus',
    ));



    });

    
    Route::get('/admin', 'AdminController@index')->name('admin');