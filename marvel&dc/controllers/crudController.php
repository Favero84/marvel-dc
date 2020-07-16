<?php
class crudController extends controller {
    
    public function index() {}
    
    public function adicionar() {
        $dados = array();
        
        if(!empty($_POST['hqnome']) && !empty($_POST['hqtitulo'])) {
            $hqnome = addslashes($_POST['hqnome']);
            $hqtitulo = addslashes($_POST['hqtitulo']);
            $num_volume = addslashes($_POST['num_volume']);
            $modelo_capa = addslashes($_POST['modelo_capa']);
            $situacao = addslashes($_POST['situacao']);
            $estado = addslashes($_POST['estado']);
            $marca = addslashes($_POST['marca']);
            $nota = addslashes($_POST['nota']);
            
            $crud = new Crud();
            $crud->adicionar($hqnome, $hqtitulo, $num_volume, $modelo_capa, $situacao, $estado, $marca, $nota);
            
            header("Location: ".BASE_URL);
        }
        
        $this->loadTemplate('adicionar', $dados);
    }
    
    public function editar($id) {
        $dados = array();
           
        if(!empty($id) && !empty($_POST['hqnome']) && !empty($_POST['hqtitulo'])) {
            $hqnome = addslashes($_POST['hqnome']);
            $hqtitulo = addslashes($_POST['hqtitulo']);
            $num_volume = addslashes($_POST['num_volume']);
            $modelo_capa = addslashes($_POST['modelo_capa']);
            $situacao = addslashes($_POST['situacao']);
            $estado = addslashes($_POST['estado']);
            $marca = addslashes($_POST['marca']);
            $nota = addslashes($_POST['nota']);
            
            $crud = new Crud();
            $crud->editar($hqnome, $hqtitulo, $num_volume, $modelo_capa, $situacao, $estado, $marca, $nota, $id);

            header("Location: ".BASE_URL);
        }
        
        $crud = new Crud();
        $dados['info'] = $crud->get($id);
     
        $this->loadTemplate('editar', $dados);
    }
    
    public function deletar($id) {
        if(!empty($id)) {
            $crud = new Crud();
            $crud->deletar($id);
            
            header("Location: ".BASE_URL);
        }
    }
}

