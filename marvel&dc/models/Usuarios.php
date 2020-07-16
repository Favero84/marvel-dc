<?php
class Usuarios extends model {
    
    public function cadastrar($nome, $email, $senha) {
        
        $sql = $this->db->prepare("SELECT id FROM usuarios WHERE email = :email");
        $sql->bindValue(":email", $email);
        $sql->execute();
        
        if($sql->rowCount() == 0) {
            $sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha");
            $sql->bindValue(":nome", $nome);
            $sql->bindValue(":email", $email);
            $sql->bindValue(":senha", $senha);
            $sql->execute();
        }
        
    }
    
    public function estaLogado() {
        
        //1b verificando se existe uma sessão do usuário
        if(!empty($_SESSION['ssUsuario'] && isset($_SESSION['ssUsuario']))) {
            return true;
        } else {
            return false;
        }
    }
    
    public function fazLogin($email, $senha) {
        
        //2b Faz o login
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(":email", $email);
        $sql->bindValue(":senha", md5($senha));
        $sql->execute();
        
        //Se ouve algum registro
        if($sql->rowCount() > 0) {
            $row = $sql->fetch();
            
            $_SESSION['ssUsuario'] = $row['id'];
            
            return true;
        } else {
            return false;
        }
    }
}
