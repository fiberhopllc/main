<?php
// app/errors.php

// General HttpException handler
    App::error(function (Symfony\Component\HttpKernel\Exception\HttpException $e, $code) {
        $headers = $e->getHeaders();

        switch ($code) {
            case 401:
                $default_message               = 'Invalid API key';
                $headers[ 'WWW-Authenticate' ] = 'Basic realm="REST API"';
                break;

            case 403:
                $default_message = 'Insufficient privileges to perform this action';
                break;

            case 404:
                $default_message = 'The requested resource was not found';
                break;

            case 405:
                $default_message = 'Method not allowed';
                break;

            default:
                $default_message = 'An error was encountered';
        }

        return Response::json(array(
            'error' => $e->getMessage() ? : $default_message,
        ), $code, $headers);
    });

//// ErrorMessageException handler
//    App::error(function (ErrorMessageException $e) {
//        $messages = $e->getMessages()->all();
//
//        return Response::json(array(
//            'error' => $messages[ 0 ],
//        ), 400);
//    });
//
//// NotFoundException handler
//    App::error(function (NotFoundException $e) {
//        $default_message = 'The requested resource was not found';
//
//        return Response::json(array(
//            'error' => $e->getMessage() ? : $default_message,
//        ), 404);
//    });
//
//// PermissionException handler
//    App::error(function (PermissionException $e) {
//        $default_message = 'Insufficent privilges to perform this action';
//
//        return Response::json(array(
//            'error' => $e->getMessage() ? : $default_message,
//        ), 403);
//    });
