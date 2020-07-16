<?php
class Crud extends model {
    
    public function getTodos() {
        $array = array();
        
        $sql = "SELECT * FROM crud_marvel";
        $sql = $this->db->query($sql);
        
        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
    
    public function adicionar($hqnome, $hqtitulo, $num_volume, $modelo_capa, $situacao, $estado, $marca, $nota) {
        
        $sql = "INSERT INTO crud_marvel (hqnome, hqtitulo, num_volume, modelo_capa, situacao, estado, marca, nota) "
                . "VALUES (:hqnome, :hqtitulo, :num_volume, :modelo_capa, :situacao, :estado, :marca, :nota)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":hqnome", $hqnome);
        $sql->bindValue(":hqtitulo", $hqtitulo);
        $sql->bindValue(":num_volume", $num_volume);
        $sql->bindValue(":modelo_capa", $modelo_capa);
        $sql->bindValue(":situacao", $situacao);
        $sql->bindValue(":estado", $estado);
        $sql->bindValue(":marca", $marca);
        $sql->bindValue(":nota", $nota);
        $sql->execute();
    }
    
    public function editar($hqnome, $hqtitulo, $num_volume, $modelo_capa, $situacao, $estado, $marca, $nota, $id) {
        
        $sql = "UPDATE crud_marvel SET hqnome = :hqnome, hqtitulo = :hqtitulo, num_volume = :num_volume, "
                . "modelo_capa = :modelo_capa, situacao = :situacao, estado = :estado, marca = :marca, nota = :nota "
                . "WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":hqnome", $hqnome);
        $sql->bindValue(":hqtitulo", $hqtitulo);
        $sql->bindValue(":num_volume", $num_volume);
        $sql->bindValue(":modelo_capa", $modelo_capa);
        $sql->bindValue(":situacao", $situacao);
        $sql->bindValue(":estado", $estado);
        $sql->bindValue(":marca", $marca);
        $sql->bindValue(":nota", $nota);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
    
    public function get($id) {
        $array = array();
        
        $sql = "SELECT * FROM crud_marvel WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
        
        if($sql->rowCount() > 0) {
            $array = $sql->fetch();
        }
        
        return $array;
    }
    
    public function deletar($id) {
        
        $sql = "DELETE FROM crud_marvel WHERE id = :id";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(":id", $id);
        $sql->execute();
    }
}
