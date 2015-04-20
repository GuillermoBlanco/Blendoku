<?php

require_once 'ModelPDO.php';

class Blendoku extends ModelPDO{

    public function getLevels(){
        $oDB = $this->getDBO();
        $query = $oDB->query('SELECT COUNT(*) FROM partidas');
        $queryResult = $query->fetch();
      
        return $queryResult;
    }
            

    public function getGame($partida){
      
        $oDB = $this->getDBO();
        $query = $oDB->query('SELECT colores FROM partidas WHERE id='.$partida);
        $queryResult = $query->fetch();
        
        $colores= explode(",", $queryResult['colores']);
        shuffle($colores);
        
        return $colores;
    }

    public function checkGame($partida,$colores){
        $oDB = $this->getDBO();
        $query = $oDB->query('SELECT colores FROM partidas WHERE id='.$partida);
        $queryResult = $query->fetch();
        
        $resultado= explode(",", $queryResult['colores']);
       
//        return in_array($colores ,$resultado);
        return $colores===$resultado;
    }
    
    
}

?>
