<?php
namespace App\Middleware\Admin;

class AuthMiddleware{

    public function __invoke($request, $response, $next){
        if(!isset($_SESSION[PREFIX.'logado'])){
            return $response->withRedirect(PATH.'/admin/login');
        }
        return $next($request, $response);
    }

}
