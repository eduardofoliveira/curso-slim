<?php
namespace App\Action\Admin;
use App\Action\Action;

class PostAction extends Action {

    public function index($request, $response){
        $vars['title'] = 'Lista de Posts';
        $vars['page'] = 'posts/list';
        return $this->view->render($response, 'admin/template.phtml', $vars);
    }

    public function add($request, $response){
        $vars['title'] = 'Novo Post';
        $vars['page'] = 'posts/add';
        return $this->view->render($response, 'admin/template.phtml', $vars);
    }

    public function store($request, $response){
        $dados = $request->getParsedBody();

        $titulo = filter_var($dados['titulo'], FILTER_SANITIZE_STRING);
        $descricao = filter_var($dados['descricao'], FILTER_SANITIZE_STRING);

        if(empty($titulo) || empty($descricao)){
            $vars['titulo'] = 'Novo Post';
            $vars['page'] = 'posts/add';

            $vars['erros'] = 'Preencha todos os campos.';

            return $this->view->render($response, 'admin/template.phtml', $vars);
        }else{
            $sql = 'INSERT INTO posts (titulo, descricao) VALUES (:titulo, :descricao)';
            $stmt = $this->db->prepare($sql);
            $stmt->bindValue(':titulo', $titulo);
            $stmt->bindValue(':descricao', $descricao);
            $stmt->execute();

            return $response->withRedirect(PATH.'/admin/posts');
        }
    }

}
