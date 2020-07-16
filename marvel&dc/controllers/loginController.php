<?php
class loginController extends controller {
    
    public function index() {
        $dados = array();
        
        //2a verifica se ouve um envio do formulário
        if(isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            
            $u = new Usuarios();
            
            //verifica faz login
            if($u->fazLogin($email, $senha)) {
                header("Location: ".BASE_URL);
                exit;
            } else {
                $dados['error'] = 'E-mail e/ou senha errados!';
            }
        }
        
        $this->loadView('login', $dados);
    }
}

