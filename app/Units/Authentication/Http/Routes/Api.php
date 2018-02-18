<?php

namespace App\Units\Authentication\Http\Routes;

use App\Support\Routing\RouteFile;
use Illuminate\Http\Request;

class Api extends RouteFile
{
    protected function routes()
    {
        $this->registerDefaultRoutes();
        $this->registerV1Routes();
    }
    protected function registerDefaultRoutes()
    {
        $this->userRoutes();
        $this->loginRoutes();
        $this->singUpRoutes();
        $this->passwordRoutes();
    }
    protected function registerV1Routes()
    {
        $this->router->group(['prefix' => 'v1'], function () {
            $this->registerDefaultRoutes();
        });
    }
    protected function userRoutes()
    {
        $this->router->get('user', function (Request $request) {
            return $request->user();
        })->middleware('auth:api');
    }
    protected function loginRoutes()
    {
        $this->router->post('login', 'LoginController@login');
    }
    protected function singUpRoutes()
    {
        $this->router->post('register', 'RegisterController@register');
    }
    protected function passwordRoutes()
    {
        // Password Reset Routes...
        $this->router->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.reset');
        $this->router->post('password/reset', 'ResetPasswordController@reset');
    }
}