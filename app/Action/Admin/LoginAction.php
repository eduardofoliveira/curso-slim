<?php
namespace App\Action\Admin;
use App\Action\Action;

class LoginAction extends Action{

    public function index($request, $response){
        if(isset($_SESSION[PREFIX.'logado'])){
            return $response->withRedirect(PATH.'/admin');
        }
        return $this->view->render($response, 'admin/login/login.phtml');
    }

    public function logar($request, $response){
        $dados = $request->getParsedBody();

        $email = strip_tags(filter_var($dados['email'], FILTER_SANITIZE_STRING));
        $senha = strip_tags(filter_var($dados['senha'], FILTER_SANITIZE_STRING));

        if(!empty($email) && !empty($senha)){

            $sql = 'SELECT id FROM usuarios WHERE email = :email AND senha = :senha';
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':senha', $senha);
            $stmt->execute();

            if($stmt->rowCount() > 0){
                $_SESSION[PREFIX.'logado'] = true;
                return $response->withRedirect(PATH.'/admin');
            }else{
                $vars['erros'] = 'Usuário ou senha inválidos.';
                return $this->view->render($response, 'admin/login/login.phtml', $vars);
            }

        }else{
            $vars['erros'] = 'Preencha todos os campos.';
            return $this->view->render($response, 'admin/login/login.phtml', $vars);
        }
    }

    public function logout($request, $response){
        unset($_SESSION[PREFIX.'logado']);
        session_destroy();

        return $response->withRedirect(PATH.'/admin/login');
    }

}
