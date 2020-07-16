<?php
class cadastroController extends controller {
    
    public function index() {}
    
    public function cadastrar() {
        $dados = array();
        
        $u = new Usuarios();
        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = md5($_POST['senha']);
            
            if(!empty($nome) && !empty($email) && !empty($senha)) {
                $u->cadastrar($nome, $email, $senha);
            }
        }
        
        $this->loadView('cadastrar', $dados);
    }
}

