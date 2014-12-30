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


// Patterns
    Route::pattern('id', '\d+');
    Route::pattern('hash', '[a-z0-9]+');
    Route::pattern('hex', '[a-f0-9]+');
    Route::pattern('uuid', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}');
    Route::pattern('base', '[a-zA-Z0-9]+');
    Route::pattern('slug', '[a-z0-9-]+');
    Route::pattern('username', '[a-z0-9_-]{3,16}');

// laravel-auth-token
    Route::delete('auth', 'Tappleby\AuthToken\AuthTokenController@destroy');

    Route::get('auth', 'Tappleby\AuthToken\AuthTokenController@index');

    Route::post('auth', 'Tappleby\AuthToken\AuthTokenController@store');

// Security routes
# CSRF Protection
    Route::when('*', 'csrf', [ 'POST', 'PUT', 'PATCH', 'DELETE' ]);
    # AJAX Only CSRF Filter:  http://snippetrepo.com/snippets/laravel-csrf-filter-with-ajax-support
    Route::filter('csrf-ajax', function () {
        if (Session::token() != Request::header('x-csrf-token')) {
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
        Route::get('reset_password/{token}', 'RemindersController@getReset');

        Route::post('forgot_password', 'RemindersController@postRemind');
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
//    XML Response Macro usage ->
//    Route::get('api.{ext}', function()
//    {
//        $data = ['status' => 'OK'];
//        $ext = File::extension(Request::url());
//        return Response::$ext($data);
//    })->where('ext', 'xml|json');

    Route::group([ 'prefix' => 'api/v1', 'before' => 'auth.basic|session.remove|api.version|throttle:1000,60' ], function () {
        Event::forget('router.filter: csrf');


        Route::get('/tickets/{id}/trashed', [ 'uses' => 'TicketsController@showWithTrashed' ]);

        Route::resource('tickets', 'TicketsController');

        Route::get('/test', function () {
            return Fractal::collection(Ticket::paginate(100), new \transformers\TicketTransformer());
        });
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

    Route::get('/secret', function () {
//        Auth::loginUsingId(2);
//        $user = Auth::user();
//
//        if ($user->hasRole('Administrator'))
//        {
//            return 'Redheads party the hardest!';
//        } else {
//            return "Redheads don't party the hardest!";
//        }
//        $hashids = new Hashids\Hashids('ABCDEFGH');
//        $id = $hashids->encode(5,6,8,7,6,0,5,1,8);
//        $numbers = $hashids->decode($id);
//
//        return $id;
    });

