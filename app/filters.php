<?php

    /*
    |--------------------------------------------------------------------------
    | Application & Route Filters
    |--------------------------------------------------------------------------
    |
    | Below you will find the "before" and "after" events for the application
    | which may be used to do any work before or after a request into your
    | application. Here you may also register your custom route filters.
    |
    */
    App::before(function ($request) {
        // Our own method to defend XSS attacks globally.
        Common::globalXssClean();
    });
    App::after(function ($request, $response) {
        // Prevent Back-Button Logout
        $response->headers->set("Cache-Control", "no-cache,no-store, must-revalidate");
        $response->headers->set("Pragma", "no-cache"); //HTTP 1.0
        $response->headers->set("Expires", " Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
    });
    /*
    |--------------------------------------------------------------------------
    | Authentication Filters
    |--------------------------------------------------------------------------
    |
    | The following filters are used to verify that the user of the current
    | session is logged into this application. The "basic" filter easily
    | integrates HTTP Basic authentication for quick, simple checking.
    |
    */
    Route::filter('auth', function () {
        if (! Sentry::check()) return Redirect::guest('login');
    });

    Route::filter('auth.basic', function () {
        return Auth::basic();
    });

    Route::filter('standardUser', function () {
        $user  = Sentry::getUser();
        $users = Sentry::findGroupByName('Standard');
        if (! $user->inGroup($users)) {
            return Redirect::to('login');
        }
    });

    Route::filter('admin', function () {
        $user  = Sentry::getUser();
        $admin = Sentry::findGroupByName('Admins');
        if (! $user->inGroup($admin)) {
            return Redirect::to('login');
        }
    });

    Route::filter('monitoringUser', function () {
        $user       = Sentry::getUser();
        $monitoring = Sentry::findGroupByName('Monitoring');
        if (! $user->inGroup($monitoring)) {
            return Redirect::to('login');
        }
    });

    Route::filter('vendorUser', function () {
        $user   = Sentry::getUser();
        $vendor = Sentry::findGroupByName('Vendor');
        if (! $user->inGroup($vendor)) {
            return Redirect::to('login');
        }
    });

    Route::filter('whitelabelUser', function () {
        $user       = Sentry::getUser();
        $whitelabel = Sentry::findGroupByName('WhiteLabel');
        if (! $user->inGroup($whitelabel)) {
            return Redirect::to('login');
        }
    });

    /*
    |--------------------------------------------------------------------------
    | Guest Filter
    |--------------------------------------------------------------------------
    |
    | The "guest" filter is the counterpart of the authentication filters as
    | it simply checks that the current user is not logged in. A redirect
    | response will be issued if they are, which you may freely change.
    |
    */
    Route::filter('guest', function () {
        if (Sentry::check()) {
            // Logged in successfully - redirect based on type of user
            $user  = Sentry::getUser();
            $admin = Sentry::findGroupByName('Admins');
            $users = Sentry::findGroupByName('Standard');
            if ($user->inGroup($admin)) return Redirect::intended('admin');
            elseif ($user->inGroup($users)) return Redirect::intended('/');
        }
    });

    Route::filter('redirectAdmin', function () {
        if (Sentry::check()) {
            $user  = Sentry::getUser();
            $admin = Sentry::findGroupByName('Admins');
            if ($user->inGroup($admin)) return Redirect::intended('admin');
        }
    });

    Route::filter('currentUser', function ($route) {
        if (! Sentry::check()) return Redirect::home();
        if (Sentry::getUser()->id != $route->parameter('profiles')) {
            return Redirect::home();
        }
    });

    /*
    |--------------------------------------------------------------------------
    | CSRF Protection Filter
    |--------------------------------------------------------------------------
    |
    | The CSRF filter is responsible for protecting your application against
    | cross-site request forgery attacks. If this special token in a user
    | session does not match the one given in this request, we'll bail.
    |
    */
    Route::filter('csrf', function () {
        if (Session::token() != Input::get('_token')) {
            throw new Illuminate\Session\TokenMismatchException;
        }
    });

    /*
     | -------------------------------------------------------------------------
     | API Versioning
     | -------------------------------------------------------------------------
     |
     */
    Route::filter('api.version', function ($route, $request, $value = null) {
        // Could also be something like:
        // if ($request->header('accept') === 'application/json') {
        if ($request->header('version', '1') === '2') {
            // Use alternate controller or method, say 'ResourceApiController'.
            echo( $request->header('version', '1') );
        }
    });

    Route::filter('api.allowOrigin', function ($route, $request, $response) {
        $response->header('access-control-allow-origin', '*');
    });

    /*
     | -------------------------------------------------------------------------
     | Send Std Headers
     | -------------------------------------------------------------------------
     |
     */
    Route::filter('stdHeaders', function ($route, $request, $response) {
        $response->header('Expires', 'Sun, 01 Dec 2024 23:59:59 GMT');
        $response->header('Accept-Encoding', 'gzip, deflate');
    });

    /*
     | -------------------------------------------------------------------------
     | Session - Remove (for given call)
     | -------------------------------------------------------------------------
     |
     */
    Route::filter('session.remove', function () {
        return Config::set('session.driver', 'database');
    });

    /*
    | -------------------------------------------------------------------------
    | Sentry Specific Route Filters
    | -------------------------------------------------------------------------
    |
    */
    /*
    * Checks if the user is logged in
    */
    Route::filter('Sentry', function () {
        if (! Sentry::check()) {
            return Redirect::route('login');
        }
    });

    /**
     * hasAcces filter (permissions)
     *
     * Check if the user has permission (group/user)
     */
    Route::filter('hasAccess', function ($route, $request, $value) {
        try {
            $user = Sentry::getUser();

            if (! $user->hasAccess($value)) {
                return Redirect::route('login')->withErrors(array( Lang::get('user.noaccess') ));
            }
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            return Redirect::route('login')->withErrors(array( Lang::get('user.notfound') ));
        }

    });

    /**
     * InGroup filter
     *
     * Check if the user belongs to a group
     */
    Route::filter('inGroup', function ($route, $request, $value) {
        try {
            $user = Sentry::getUser();

            $group = Sentry::findGroupByName($value);

            if (! $user->inGroup($group)) {
                return Redirect::route('login')->withErrors(array( Lang::get('user.noaccess') ));
            }
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            return Redirect::route('login')->withErrors(array( Lang::get('user.notfound') ));
        } catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e) {
            return Redirect::route('login')->withErrors(array( Lang::get('group.notfound') ));
        }
    });


    /*
    | -------------------------------------------------------------------------
    | Permissions Specific Route Filters
    | -------------------------------------------------------------------------
    |
    */
    Route::filter('editable', function()
    {
        $user = Auth::user();

        if (!$user->ability(array('Administrator'), array('can_update')))
        {
            return Redirect::home();
        }
    });
