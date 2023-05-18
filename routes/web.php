<?php

/*
|--------------------------------------------------------------------------
| User Authentication Routes
|--------------------------------------------------------------------------
*/


Auth::routes();

Route::get('auth/facebook', 'Auth\SocialLoginController@redirectToFaceBook');
Route::get('auth/facebook/callback', 'Auth\SocialLoginController@handleFacebookCallback');
Route::get('auth/google', 'Auth\SocialLoginController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\SocialLoginController@handleGoogleCallback');
Route::post('account/kit', 'Auth\SocialLoginController@account_kit')->name('account.kit');

/*
|--------------------------------------------------------------------------
| Provider Authentication Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'provider'], function () {

    Route::get('auth/facebook', 'Auth\SocialLoginController@providerToFaceBook');
    Route::get('auth/google', 'Auth\SocialLoginController@providerToGoogle');

    Route::get('/login', 'ProviderAuth\LoginController@showLoginForm');
    Route::post('/login', 'ProviderAuth\LoginController@login');
    Route::post('/logout', 'ProviderAuth\LoginController@logout');

    Route::get('/register', 'ProviderAuth\RegisterController@showRegistrationForm');
    Route::post('/register', 'ProviderAuth\RegisterController@register');

    Route::post('/password/email', 'ProviderAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('/password/reset', 'ProviderAuth\ResetPasswordController@reset');
    Route::get('/password/reset', 'ProviderAuth\ForgotPasswordController@showLinkRequestForm');
    Route::get('/password/reset/{token}', 'ProviderAuth\ResetPasswordController@showResetForm');
});

/*
|--------------------------------------------------------------------------
| Admin Authentication Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', 'AdminAuth\LoginController@showLoginForm');
    Route::post('/login', 'AdminAuth\LoginController@login');
    Route::post('/logout', 'AdminAuth\LoginController@logout');

    Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset');
    Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm');
    Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

/*
|--------------------------------------------------------------------------
| Dispatcher Authentication Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'dispatcher'], function () {
    Route::get('/login', 'DispatcherAuth\LoginController@showLoginForm');
    Route::post('/login', 'DispatcherAuth\LoginController@login');
    Route::post('/logout', 'DispatcherAuth\LoginController@logout');

    Route::post('/password/email', 'DispatcherAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('/password/reset', 'DispatcherAuth\ResetPasswordController@reset');
    Route::get('/password/reset', 'DispatcherAuth\ForgotPasswordController@showLinkRequestForm');
    Route::get('/password/reset/{token}', 'DispatcherAuth\ResetPasswordController@showResetForm');
});

/*
|--------------------------------------------------------------------------
| Fleet Authentication Routes
|--------------------------------------------------------------------------
*/


Route::group(['prefix' => 'fleet'], function () {
    Route::get('/login', 'FleetAuth\LoginController@showLoginForm');
    Route::post('/login', 'FleetAuth\LoginController@login');
    Route::post('/logout', 'FleetAuth\LoginController@logout');

    Route::post('/password/email', 'FleetAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('/password/reset', 'FleetAuth\ResetPasswordController@reset');
    Route::get('/password/reset', 'FleetAuth\ForgotPasswordController@showLinkRequestForm');
    Route::get('/password/reset/{token}', 'FleetAuth\ResetPasswordController@showResetForm');
});

/*
|--------------------------------------------------------------------------
| Account Authentication Routes
|--------------------------------------------------------------------------
*/


Route::group(['prefix' => 'account'], function () {
    Route::get('/login', 'AccountAuth\LoginController@showLoginForm');
    Route::post('/login', 'AccountAuth\LoginController@login');
    Route::post('/logout', 'AccountAuth\LoginController@logout');

    Route::get('/register', 'AccountAuth\RegisterController@showRegistrationForm');
    Route::post('/register', 'AccountAuth\RegisterController@register');

    Route::post('/password/email', 'AccountAuth\ForgotPasswordController@sendResetLinkEmail');
    Route::post('/password/reset', 'AccountAuth\ResetPasswordController@reset');
    Route::get('/password/reset', 'AccountAuth\ForgotPasswordController@showLinkRequestForm');
    Route::get('/password/reset/{token}', 'AccountAuth\ResetPasswordController@showResetForm');
});

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/tp', function () {
    return view('tp');
});

Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-erstein', function () {
    return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-erstein');
});


Route::get('/contact-form-06/contact-form-06', function () {
    return view('contact-form-06/contact-form-06/index');
});

Route::get('/mentions-legales/siege-sociale', function () {
    return view('mentions-legales/siege-sociale');
});


Route::get('/example', function () {
    return view('example');
});

Route::get('/setting', function () {
    return Setting::all();
});

Route::get('/ride', function () {
    return view('ride');
});

Route::get('/taxi-longue-distance', function () {
    return view('taxi-longue-distance');
});

Route::get('/longue-distance', function () {
    return view('longue-distance');
});

Route::get('/form/', function () {
    return view('form/index');
});
Route::post('/form/', function () {
    return view('form/index');
});

Route::post('/form/php/contact', function () {
    return view('formulaire/php/contact');
});

Route::get('/form/php/contact', function () {
    return view('formulaire/php/contact');
});
Route::post('/formulaire', function () {
    return view('formulaire');
});

Route::get('/formulaire', function () {
    return view('formulaire');
});
Route::post('/formulaire', function () {
    return view('formulaire');
});

Route::get('/controller/formulaire', function () {
    return view('controller/formulaire');
});

Route::post('/controller/formulaire', function () {
    return view('controller/formulaire');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::post('/contact', function () {
    return view('contact');
});

Route::get('/page', function () {
    return view('page');
});


Route::get('/taxi-strasbourg', function () {
    return view('taxi-strasbourg');
});


Route::get('/test', function () {
    return view('test');
});


/*
Route::get('/user/longue-distance', function () {
    return view('user/longue-distance');
});
*/

Route::get('/drive', function () {
    return view('drive');
});

Route::get('/invoice', function () {
    return view('emails.invoice');
});

Route::get('/test_invoice', function () {
    return view('emails.test');
});

Route::get('privacy', function () {
    $page = 'page_privacy';
    $title = 'Privacy Policy';
    return view('static', compact('page', 'title'));
});


Route::get('data-privacy', function () {
    $page = 'data-privacy';
    $title = 'Privacy Policy';
    return view('data-privacy', compact('page', 'title'));
});

Route::get('taxi-application', function () {
    $page = 'taxi-application';    
    $title = 'Taxi-Application';
    return view('taxi-app', compact('page', 'title'));
});
Route::get('taxi-chauffeur', function () {
    $page = 'taxi-chauffeur';    
    $title = 'Taxi-chauffeur';
    return view('taxi-chauffeur', compact('page', 'title'));
});
Route::get('taxi-low-cost', function () {
    $page = 'taxi-low-cost';    
    $title = 'Taxi-low-cost';
    return view('taxi-low-cost', compact('page', 'title'));
});
Route::get('taxi-securite', function () {
    $page = 'Taxi-securite';    
    $title = 'Taxi-securite';
    return view('taxi-securite', compact('page', 'title'));
});
Route::get('taxi-electriques', function () {
    $page = 'Taxi-electriques-';    
    $title = 'Taxi-electriques';
    return view('taxi-electriques', compact('page', 'title'));
});
Route::get('devenir-taxi', function () {
    $page = 'Devenir-taxi';    
    $title = 'Devenir-taxi';
    return view('devenir-taxi', compact('page', 'title'));
});
// -----------------------------

Route::get('conditions', function () {
    $page = 'conditions';    
    $title = "Conditions d'Utilisation";
    return view('conditions', compact('page', 'title'));
});
Route::get('confidentialite', function () {
    $page = 'confidentialite';    
    $title = "Confidentialité";
    return view('confidentialite', compact('page', 'title'));
});


/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'HomeControllerbis@confirm_ride');

Route::get('/dashboard', 'HomeController@index');

Route::get('/tp', 'HomeControllerbis@confirm_tp');

//Route::get('/tp', 'RideControllerbis@confirm_ride');
Route::get('/test', 'HomeControllerbis@test');







//Route::get('/longue-distance', 'HomeController@index');



// user profiles
Route::get('/profile', 'HomeController@profile');
Route::get('/edit/profile', 'HomeController@edit_profile');
Route::post('/profile', 'HomeController@update_profile');

// update password
Route::get('/change/password', 'HomeController@change_password');
Route::post('/change/password', 'HomeController@update_password');

// ride
Route::get('/confirm/ride', 'RideController@confirm_ride');
Route::get('/confirm/ride2', 'RideControllerbis@confirm_ride');
//Route::post('/confirm/ride', 'RideController2@confirm_ride');
Route::post('/create/ride', 'RideController@create_ride');
Route::post('/cancel/ride', 'RideController@cancel_ride');
Route::get('/onride', 'RideController@onride');
Route::post('/payment', 'PaymentController@payment');
Route::post('/rate', 'RideController@rate');

// status check
Route::get('/status', 'RideController@status');

// estimate Fare
//Route::get('/fare', 'UserApiController@fare');
Route::get('/fare', 'UserApiController@estimated_fare');
// trips
Route::get('/trips', 'HomeController@trips');
Route::get('/upcoming/trips', 'HomeController@upcoming_trips');

// wallet
Route::get('/wallet', 'HomeController@wallet');
Route::post('/add/money', 'PaymentController@add_money');

// payment
Route::get('/payment', 'HomeController@payment');

// card
Route::resource('card', 'Resource\CardResource');

// promotions
Route::get('/promotions', 'HomeController@promotions_index')->name('promocodes.index');
Route::post('/promotions', 'HomeController@promotions_store')->name('promocodes.store');

//map controller

Route::get('map', 'MapController@map_index')->name('map.index');
Route::get('map/ajax', 'MapController@map_ajax')->name('map.ajax');


Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-achenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-achenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-adamswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-adamswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-albé', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-albé');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-alteckendorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-alteckendorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-altenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-altenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-altorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-altorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-altwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-altwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-andlau', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-andlau');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-artolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-artolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-aschbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-aschbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-asswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-asswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-avolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-avolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-baerendorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-baerendorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-balbronn', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-balbronn');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-baldenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-baldenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-barembach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-barembach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-barr', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-barr');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bassemberg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bassemberg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-batzendorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-batzendorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-beinheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-beinheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bellefosse', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bellefosse');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-belmont', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-belmont');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-benfeld', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-benfeld');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-berg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-berg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bergbieten', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bergbieten');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bernardswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bernardswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bernardvillé', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bernardvillé');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bernolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bernolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-berstett', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-berstett');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-berstheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-berstheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-betschdorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-betschdorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bettwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bettwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-biblisheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-biblisheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bietlenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bietlenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bilwisheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bilwisheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bindernheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bindernheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bischheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bischheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bischholtz', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bischholtz');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bischoffsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bischoffsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bischwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bischwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bissert', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bissert');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bitschhoffen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bitschhoffen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-blaesheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-blaesheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-blancherupt', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-blancherupt');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-blienschwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-blienschwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bœrsch', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bœrsch');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bœsenbiesen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bœsenbiesen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bolsenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bolsenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-boofzheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-boofzheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bootzheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bootzheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bosselshausen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bosselshausen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bossendorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bossendorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bourg-bruche', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bourg-bruche');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bourgheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bourgheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bouxwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bouxwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-breitenau', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-breitenau');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-breitenbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-breitenbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-breuschwickersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-breuschwickersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-la broque', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-la broque');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-brumath', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-brumath');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-buhl', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-buhl');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-burbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-burbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bust', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-bust');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-buswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-buswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-butten', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-butten');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-châtenois', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-châtenois');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-cleebourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-cleebourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-climbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-climbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-colroy-la-roche', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-colroy-la-roche');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-cosswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-cosswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-crastatt', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-crastatt');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-crœttwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-crœttwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dachstein', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dachstein');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dahlenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dahlenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dalhunden', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dalhunden');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dambach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dambach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dambach-la-ville', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dambach-la-ville');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dangolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dangolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-daubensand', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-daubensand');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dauendorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dauendorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dehlingen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dehlingen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dettwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dettwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-diebolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-diebolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-diedendorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-diedendorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dieffenbach-au-val', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dieffenbach-au-val');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dieffenbach-lès-wœrth', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dieffenbach-lès-wœrth');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dieffenthal', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dieffenthal');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-diemeringen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-diemeringen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dimbsthal', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dimbsthal');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dingsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dingsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dinsheim-sur-bruche', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dinsheim-sur-bruche');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-domfessel', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-domfessel');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-donnenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-donnenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dorlisheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dorlisheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dossenheim-kochersberg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dossenheim-kochersberg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dossenheim-sur-zinsel', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-dossenheim-sur-zinsel');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-drachenbronn-birlenbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-drachenbronn-birlenbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-drulingen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-drulingen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-drusenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-drusenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-duntzenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-duntzenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-duppigheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-duppigheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-durningen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-durningen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-durrenbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-durrenbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-durstel', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-durstel');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-duttlenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-duttlenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eberbach-seltz', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eberbach-seltz');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ebersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ebersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ebersmunster', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ebersmunster');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eckartswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eckartswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eckbolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eckbolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eckwersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eckwersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eichhoffen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eichhoffen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-elsenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-elsenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-engwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-engwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-entzheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-entzheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-epfig', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-epfig');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-erckartswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-erckartswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ergersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ergersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ernolsheim-bruche', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ernolsheim-bruche');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ernolsheim-lès-saverne', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ernolsheim-lès-saverne');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-erstein', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-erstein');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eschau', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eschau');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eschbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eschbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eschbourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eschbourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eschwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eschwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ettendorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ettendorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eywiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-eywiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-fegersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-fegersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-fessenheim-le-bas', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-fessenheim-le-bas');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-flexbourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-flexbourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-forstfeld', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-forstfeld');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-forstheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-forstheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-fort-louis', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-fort-louis');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-fouchy', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-fouchy');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-fouday', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-fouday');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-friedolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-friedolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-friesenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-friesenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-frœschwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-frœschwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-frohmuhl', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-frohmuhl');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-furchhausen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-furchhausen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-furdenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-furdenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gambsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gambsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-geispolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-geispolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-geiswiller-zœbersdorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-geiswiller-zœbersdorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gerstheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gerstheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gertwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gertwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-geudertheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-geudertheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gœrlingen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gœrlingen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gœrsdorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gœrsdorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gottenhouse', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gottenhouse');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gottesheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gottesheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gougenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gougenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-goxwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-goxwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-grandfontaine', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-grandfontaine');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-grassendorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-grassendorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-grendelbruch', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-grendelbruch');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gresswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gresswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gries', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gries');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-griesheim-près-molsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-griesheim-près-molsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-griesheim-sur-souffel', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-griesheim-sur-souffel');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gumbrechtshoffen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gumbrechtshoffen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gundershoffen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gundershoffen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gungwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gungwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gunstett', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-gunstett');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-haegen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-haegen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-haguenau', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-haguenau');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-handschuheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-handschuheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hangenbieten', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hangenbieten');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-harskirchen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-harskirchen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hatten', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hatten');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hattmatt', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hattmatt');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hegeney', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hegeney');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-heidolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-heidolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-heiligenberg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-heiligenberg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-heiligenstein', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-heiligenstein');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hengwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hengwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-herbitzheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-herbitzheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-herbsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-herbsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-herrlisheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-herrlisheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hessenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hessenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hilsenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hilsenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hindisheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hindisheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hinsbourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hinsbourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hinsingen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hinsingen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hipsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hipsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hirschland', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hirschland');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hochfelden', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hochfelden');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hochstett', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hochstett');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hœnheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hœnheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hœrdt', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hœrdt');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hoffen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hoffen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hohengœft', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hohengœft');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hohfrankenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hohfrankenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-le hohwald', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-le hohwald');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-holtzheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-holtzheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hunspach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hunspach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hurtigheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-hurtigheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-huttendorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-huttendorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-huttenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-huttenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ichtratzheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ichtratzheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-illkirch-graffenstaden', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-illkirch-graffenstaden');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ingenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ingenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ingolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ingolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ingwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ingwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-innenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-innenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-issenhausen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-issenhausen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ittenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ittenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-itterswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-itterswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-jetterswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-jetterswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kaltenhouse', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kaltenhouse');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kauffenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kauffenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-keffenach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-keffenach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kertzfeld', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kertzfeld');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-keskastel', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-keskastel');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kesseldorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kesseldorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kienheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kienheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kilstett', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kilstett');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kindwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kindwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kintzheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kintzheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kirchheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kirchheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kirrberg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kirrberg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kirrwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kirrwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kleingœft', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kleingœft');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-knœrsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-knœrsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kogenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kogenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kolbsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kolbsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-krautergersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-krautergersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-krautwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-krautwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kriegsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kriegsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kurtzenhouse', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kurtzenhouse');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kuttolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kuttolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kutzenhausen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-kutzenhausen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lalaye', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lalaye');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lampertheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lampertheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lampertsloch', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lampertsloch');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-landersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-landersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-langensoultzbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-langensoultzbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-laubach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-laubach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lauterbourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lauterbourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lembach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lembach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-leutenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-leutenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lichtenberg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lichtenberg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-limersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-limersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lingolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lingolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lipsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lipsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-littenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-littenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lixhausen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lixhausen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lobsann', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lobsann');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lochwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lochwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lohr', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lohr');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lorentzen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lorentzen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lupstein', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lupstein');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lutzelhouse', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-lutzelhouse');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mackenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mackenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mackwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mackwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-maennolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-maennolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-maisonsgoutte', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-maisonsgoutte');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-marckolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-marckolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-marlenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-marlenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-marmoutier', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-marmoutier');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-matzenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-matzenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-meistratzheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-meistratzheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-melsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-melsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-memmelshoffen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-memmelshoffen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-menchhoffen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-menchhoffen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-merkwiller-pechelbronn', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-merkwiller-pechelbronn');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mertzwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mertzwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mietesheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mietesheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-minversheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-minversheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mittelbergheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mittelbergheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mittelhausbergen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mittelhausbergen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mittelschaeffolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mittelschaeffolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mollkirch', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mollkirch');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-molsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-molsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mommenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mommenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-monswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-monswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-morsbronn-les-bains', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-morsbronn-les-bains');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-morschwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-morschwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mothern', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mothern');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-muhlbach-sur-bruche', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-muhlbach-sur-bruche');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mulhausen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mulhausen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-munchhausen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-munchhausen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mundolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mundolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mussig', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mussig');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-muttersholtz', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-muttersholtz');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mutzenhouse', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mutzenhouse');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mutzig', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-mutzig');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-natzwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-natzwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-neewiller-près-lauterbourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-neewiller-près-lauterbourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-neubois', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-neubois');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-neugartheim-ittlenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-neugartheim-ittlenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-neuhaeusel', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-neuhaeusel');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-neuve-église', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-neuve-église');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-neuviller-la-roche', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-neuviller-la-roche');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-neuwiller-lès-saverne', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-neuwiller-lès-saverne');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niederbronn-les-bains', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niederbronn-les-bains');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niederhaslach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niederhaslach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niederhausbergen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niederhausbergen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niederlauterbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niederlauterbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niedermodern', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niedermodern');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niedernai', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niedernai');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niederrœdern', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niederrœdern');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niederschaeffolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niederschaeffolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niedersoultzbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niedersoultzbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niedersteinbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-niedersteinbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-nordheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-nordheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-nordhouse', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-nordhouse');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-nothalten', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-nothalten');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-obenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-obenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberbronn', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberbronn');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberdorf-spachbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberdorf-spachbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberhaslach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberhaslach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberhausbergen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberhausbergen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberhoffen-lès-wissembourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberhoffen-lès-wissembourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberhoffen-sur-moder', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberhoffen-sur-moder');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberlauterbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberlauterbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-obermodern-zutzendorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-obermodern-zutzendorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-obernai', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-obernai');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberrœdern', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberrœdern');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberschaeffolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oberschaeffolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-obersoultzbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-obersoultzbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-obersteinbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-obersteinbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-odratzheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-odratzheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oermingen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-oermingen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-offendorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-offendorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-offwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-offwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ohlungen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ohlungen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ohnenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ohnenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-olwisheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-olwisheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-orschwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-orschwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-osthoffen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-osthoffen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-osthouse', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-osthouse');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ostwald', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ostwald');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ottersthal', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ottersthal');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-otterswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-otterswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ottrott', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ottrott');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ottwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ottwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-petersbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-petersbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-la petite-pierre', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-la petite-pierre');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-pfalzweyer', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-pfalzweyer');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-pfulgriesheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-pfulgriesheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-plaine', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-plaine');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-plobsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-plobsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-preuschdorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-preuschdorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-printzheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-printzheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-puberg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-puberg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-quatzenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-quatzenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rangen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rangen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ranrupt', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ranrupt');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ratzwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ratzwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rauwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rauwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-reichsfeld', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-reichsfeld');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-reichshoffen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-reichshoffen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-reichstett', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-reichstett');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-reinhardsmunster', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-reinhardsmunster');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-reipertswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-reipertswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-retschwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-retschwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-reutenbourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-reutenbourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rexingen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rexingen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rhinau', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rhinau');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-richtolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-richtolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-riedseltz', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-riedseltz');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rimsdorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rimsdorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ringendorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-ringendorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rittershoffen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rittershoffen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rœschwoog', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rœschwoog');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rohr', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rohr');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rohrwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rohrwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-romanswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-romanswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-roppenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-roppenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rosenwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rosenwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rosheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rosheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rossfeld', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rossfeld');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rosteig', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rosteig');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rothau', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rothau');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rothbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rothbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rott', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rott');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rottelsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rottelsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rountzenheim-auenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-rountzenheim-auenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-russ', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-russ');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saales', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saales');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saasenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saasenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saessolsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saessolsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saint-blaise-la-roche', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saint-blaise-la-roche');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saint-jean-saverne', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saint-jean-saverne');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saint-martin', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saint-martin');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saint-maurice', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saint-maurice');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saint-nabor', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saint-nabor');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saint-pierre', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saint-pierre');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saint-pierre-bois', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saint-pierre-bois');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-salmbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-salmbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sand', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sand');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sarre-union', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sarre-union');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sarrewerden', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sarrewerden');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saulxures', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saulxures');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saverne', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-saverne');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schaeffersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schaeffersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schaffhouse-près-seltz', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schaffhouse-près-seltz');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schalkendorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schalkendorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-scharrachbergheim-irmstett', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-scharrachbergheim-irmstett');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-scheibenhard', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-scheibenhard');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-scherlenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-scherlenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-scherwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-scherwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schillersdorf', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schillersdorf');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schiltigheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schiltigheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schirmeck', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schirmeck');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schirrhein', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schirrhein');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schirrhoffen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schirrhoffen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schleithal', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schleithal');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schnersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schnersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schœnau', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schœnau');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schœnbourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schœnbourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schœnenbourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schœnenbourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schopperten', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schopperten');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schweighouse-sur-moder', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schweighouse-sur-moder');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schwenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schwenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schwindratzheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schwindratzheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schwobsheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-schwobsheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-seebach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-seebach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sélestat', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sélestat');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-seltz', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-seltz');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sermersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sermersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sessenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sessenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-siegen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-siegen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-siewiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-siewiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-siltzheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-siltzheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-solbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-solbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sommerau', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sommerau');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-souffelweyersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-souffelweyersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-soufflenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-soufflenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-soultz-les-bains', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-soultz-les-bains');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-soultz-sous-forêts', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-soultz-sous-forêts');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sparsbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sparsbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-stattmatten', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-stattmatten');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-steige', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-steige');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-steinbourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-steinbourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-steinseltz', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-steinseltz');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-still', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-still');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-stotzheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-stotzheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-strasbourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-strasbourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-struth', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-struth');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-stundwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-stundwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-stutzheim-offenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-stutzheim-offenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sundhouse', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-sundhouse');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-surbourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-surbourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-thal-drulingen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-thal-drulingen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-thal-marmoutier', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-thal-marmoutier');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-thanvillé', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-thanvillé');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-tieffenbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-tieffenbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-traenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-traenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-triembach-au-val', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-triembach-au-val');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-trimbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-trimbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-truchtersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-truchtersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-uhlwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-uhlwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-uhrwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-uhrwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-urbeis', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-urbeis');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-urmatt', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-urmatt');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-uttenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-uttenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-uttenhoffen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-uttenhoffen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-uttwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-uttwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-val-de-moder', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-val-de-moder');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-valff', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-valff');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-la vancelle', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-la vancelle');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-vendenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-vendenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-villé', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-villé');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-vœllerdingen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-vœllerdingen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-volksberg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-volksberg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wahlenheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wahlenheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-walbourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-walbourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-waldersbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-waldersbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-waldhambach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-waldhambach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-waldolwisheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-waldolwisheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-waltenheim-sur-zorn', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-waltenheim-sur-zorn');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wangen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wangen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wangenbourg-engenthal', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wangenbourg-engenthal');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-la wantzenau', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-la wantzenau');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wasselonne', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wasselonne');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-weinbourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-weinbourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-weislingen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-weislingen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-weitbruch', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-weitbruch');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-weiterswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-weiterswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-westhoffen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-westhoffen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-westhouse', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-westhouse');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-westhouse-marmoutier', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-westhouse-marmoutier');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-weyer', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-weyer');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-weyersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-weyersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wickersheim-wilshausen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wickersheim-wilshausen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wildersbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wildersbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-willgottheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-willgottheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wilwisheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wilwisheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wimmenau', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wimmenau');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-windstein', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-windstein');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wingen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wingen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wingen-sur-moder', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wingen-sur-moder');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wingersheim-les-quatre-bans', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wingersheim-les-quatre-bans');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wintershouse', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wintershouse');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wintzenbach', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wintzenbach');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wintzenheim-kochersberg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wintzenheim-kochersberg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wisches', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wisches');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wissembourg', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wissembourg');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-witternheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-witternheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wittersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wittersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wittisheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wittisheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wiwersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wiwersheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wœrth', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wœrth');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wolfisheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wolfisheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wolfskirchen', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wolfskirchen');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wolschheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wolschheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wolxheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-wolxheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-zehnacker', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-zehnacker');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-zeinheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-zeinheim');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-zellwiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-zellwiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-zinswiller', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-zinswiller');});
Route::get('/client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-zittersheim', function () {  return view('client-particulier/type-transport-taxi/trajet/region-grand-est/departement-alsace-bas-rhin/villes-communes/taxi-zittersheim');});


