<?php
class homeController extends Controller {
    
    public function __construct() {
        parent::__construct();
        
        //Primeira coisa que o sistema vai fazer, pois está dentro do construtor
        //1a - Verifica se o usuário está logado
        $u = new Usuarios();
        if($u->estaLogado() == false) {
            header("Location: ".BASE_URL."login");
        }
    }

    public function index() {
        $dados = array();

        $crud = new Crud();
        $dados['lista'] = $crud->getTodos();
        
        //Depois disso o crud sera mandado para o View Home
        $this->loadTemplate('home', $dados);
    }

}