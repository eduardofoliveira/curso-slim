<?php
namespace App\Action;

class HomeAction extends Action{

    public function index($request, $response){
        $vars['page'] = 'pages/home';
        $response = $this->view->render($response, 'template.phtml', $vars);
    }

    public function sobre($request, $response){
        $vars['page'] = 'pages/sobre';
        $response = $this->view->render($response, 'template.phtml', $vars);
    }

    public function contato($request, $response){
        $vars['page'] = 'pages/contato';
        $response = $this->view->render($response, 'template.phtml', $vars);
    }

}
