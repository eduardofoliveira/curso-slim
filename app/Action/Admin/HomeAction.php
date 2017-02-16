<?php
namespace App\Action\Admin;
use App\Action\Action;

class HomeAction extends Action{

    public function index($request, $response){
        $vars['page'] = 'home';
        $response = $this->view->render($response, 'admin/template.phtml', $vars);
    }

}
