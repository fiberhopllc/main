<?php

    /*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register all of the routes for an application.
    | It's a breeze. Simply tell Laravel the URIs it should respond to
    | and give it the Closure to execute when that URI is requested.
    |
    */


// laravel-auth-token
    Route::get('auth', 'Tappleby\AuthToken\AuthTokenController@index');
    Route::post('auth', 'Tappleby\AuthToken\AuthTokenController@store');
    Route::delete('auth', 'Tappleby\AuthToken\AuthTokenController@destroy');

// Security routes
# CSRF Protection
    Route::when('*', 'csrf', [ 'POST', 'PUT', 'PATCH', 'DELETE' ]);
    # AJAX Only CSRF Filter:  http://snippetrepo.com/snippets/laravel-csrf-filter-with-ajax-support
    Route::filter('csrf-ajax', function()
    {
        if (Session::token() != Request::header('x-csrf-token'))
        {
            throw new Illuminate\Session\TokenMismatchException;
        }
    });

# Static Pages. Redirecting admin so admin cannot access these pages.
    Route::group([ 'before' => 'redirectAdmin|cache', 'after' => 'stdHeaders|cache' ], function () {
        Route::get('/', [ 'as' => 'home', 'uses' => 'PagesController@getHome' ]);
    });

# Registration
    Route::group([ 'before' => 'guest|throttle:20,30' ], function () {
        Route::get('/register', 'RegistrationController@create');
        Route::post('/register', [ 'as' => 'registration.store', 'uses' => 'RegistrationController@store' ]);
    });

# Authentication
    Route::get('login', [ 'as' => 'login', 'uses' => 'SessionsController@create' ])->before('guest');
    Route::get('logout', [ 'as' => 'logout', 'uses' => 'SessionsController@destroy' ]);
    Route::resource('sessions', 'SessionsController', [ 'only' => [ 'create', 'store', 'destroy' ] ]);

# Forgotten Password
    Route::group([ 'before' => 'guest|throttle:5,30' ], function () {
        Route::get('forgot_password', 'RemindersController@getRemind');
        Route::post('forgot_password', 'RemindersController@postRemind');
        Route::get('reset_password/{token}', 'RemindersController@getReset');
        Route::post('reset_password/{token}', 'RemindersController@postReset');
    });

# Standard User Routes
    Route::group([ 'before' => 'auth|standardUser' ], function () {
        Route::get('userProtected', 'StandardUserController@getUserProtected');
        Route::resource('profiles', 'UsersController', [ 'only' => [ 'show', 'edit', 'update' ] ]);
    });

//
# Monitoring User Routes
    Route::group([ 'before' => 'auth|monitoringUser' ], function () {
        Route::get('userProtected', 'StandardUserController@getUserProtected');
        Route::resource('profiles', 'UsersController', [ 'only' => [ 'show', 'edit', 'update' ] ]);
    });

# Vendor User Routes
    Route::group([ 'before' => 'auth|vendorUser' ], function () {
        Route::get('userProtected', 'StandardUserController@getUserProtected');
        Route::resource('profiles', 'UsersController', [ 'only' => [ 'show', 'edit', 'update' ] ]);
    });

# White Label User Routes
    Route::group([ 'before' => 'auth|whitelabelUser' ], function () {
        Route::get('userProtected', 'StandardUserController@getUserProtected');
        Route::resource('profiles', 'UsersController', [ 'only' => [ 'show', 'edit', 'update' ] ]);
    });
//

# Admin Routes
    Route::group([ 'before' => 'auth|admin' ], function () {
        Route::get('/admin', [ 'as' => 'admin_dashboard', 'uses' => 'AdminController@getHome' ]);
        Route::resource('admin/profiles', 'AdminUsersController', [ 'only' => [ 'index', 'show', 'edit', 'update', 'destroy' ] ]);
    });

# API Versioning Route
    Route::group([ 'prefix' => 'api/v1', 'before' => 'auth.basic|session.remove|api.version|throttle:1000,60', 'after' => 'api.allowOrigin' ], function () {
        Event::forget('router.filter: csrf');
        Route::resource('url', 'UrlController');
    });

    # Sample Sentry Routes
    #    Route::group(array('prefix' => 'cms/product', 'before' => 'Sentry|inGroup:Admins'), function()
    #    {
    #        Route::get('/', array(
    #            'as' => 'product.index',
    #            'before' => 'hasAccess:product.index',
    #            'uses' => 'ProductController@index'
    #        ));
    #    });

    Route::get('/secret', function()
    {
//        Auth::loginUsingId(2);
//        $user = Auth::user();
//
//        if ($user->hasRole('Administrator'))
//        {
//            return 'Redheads party the hardest!';
//        } else {
//            return "Redheads don't party the hardest!";
//        }
        $hashids = new Hashids\Hashids('ABCDEFGH');
        $id = $hashids->encode(5,6,8,7,6,0,5,1,8);
        $numbers = $hashids->decode($id);

        return $id;
    });

    Route::resource('tickets', 'TicketsController');