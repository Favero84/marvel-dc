<?php
class notFoundController extends Controller {

    public function index() {
        $dados = array();
        
        $this->loadView('404', $dados);
    }

}