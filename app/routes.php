<?php
use App\Middleware\Admin\AuthMiddleware;

// Administração
$app->get('/admin/login', 'App\Action\Admin\LoginAction:index');
$app->post('/admin/login', 'App\Action\Admin\LoginAction:logar');
$app->get('/admin/logout', 'App\Action\Admin\LoginAction:logout');

$app->group('/admin', function(){
    $this->get('', 'App\Action\Admin\HomeAction:index');

    // Posts
    $this->get('/posts', 'App\Action\Admin\PostAction:index');
    $this->get('/posts/add', 'App\Action\Admin\PostAction:add');
    $this->post('/posts/add', 'App\Action\Admin\PostAction:store');
})->add(AuthMiddleware::class);



// Site
$app->get('/', 'App\Action\HomeAction:index');
$app->get('/sobre', 'App\Action\HomeAction:sobre');
$app->get('/contato', 'App\Action\HomeAction:contato');
