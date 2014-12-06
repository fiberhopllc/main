<?php
use \Symfony\Component\HttpFoundation\Response;
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
App::before(function($request)
{
    //
});
App::after(function($request, $response)
{
    //
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
Route::filter('auth', function()
{
    if (!Sentry::check()) return Redirect::guest('login');
});

Route::filter('auth.basic', function()
{
    return Auth::basic();
});

Route::filter('standardUser', function()
{
    $user = Sentry::getUser();
    $users = Sentry::findGroupByName('Users');
    if (!$user->inGroup($users))
    {
        return Redirect::to('login');
    }
});

Route::filter('admin', function()
{
    $user = Sentry::getUser();
    $admin = Sentry::findGroupByName('Admins');
    if (!$user->inGroup($admin))
    {
        return Redirect::to('login');
    }
});

Route::filter('monitoringUser', function()
{
    $user = Sentry::getUser();
    $monitoring = Sentry::findGroupByName('Monitoring');
    if (!$user->inGroup($monitoring))
    {
        return Redirect::to('login');
    }
});

Route::filter('vendorUser', function()
{
    $user = Sentry::getUser();
    $vendor = Sentry::findGroupByName('Vendor');
    if (!$user->inGroup($vendor))
    {
        return Redirect::to('login');
    }
});

Route::filter('whitelabelUser', function()
{
    $user = Sentry::getUser();
    $whitelabel = Sentry::findGroupByName('WhiteLabel');
    if (!$user->inGroup($whitelabel))
    {
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
Route::filter('guest', function()
{
    if (Sentry::check())
    {
        // Logged in successfully - redirect based on type of user
        $user = Sentry::getUser();
        $admin = Sentry::findGroupByName('Admins');
        $users = Sentry::findGroupByName('Users');
        if ($user->inGroup($admin)) return Redirect::intended('admin');
        elseif ($user->inGroup($users)) return Redirect::intended('/');
    }
});

Route::filter('redirectAdmin', function()
{
    if (Sentry::check())
    {
        $user = Sentry::getUser();
        $admin = Sentry::findGroupByName('Admins');
        if ($user->inGroup($admin)) return Redirect::intended('admin');
    }
});

Route::filter('currentUser', function($route)
{
    if (!Sentry::check()) return Redirect::home();
    if (Sentry::getUser()->id != $route->parameter('profiles'))
    {
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
Route::filter('csrf', function()
{
    if (Session::token() != Input::get('_token'))
    {
        throw new Illuminate\Session\TokenMismatchException;
    }
});

