<?php

class Project extends Orm  {

    public function __construct()
    {
        parent::__construct('projects');
        if (!isset($_SESSION['id_project'])) {
            $_SESSION['id_project']=10;
            //Al config.php l'ultim id es el 9
        }
        
    }


   

    public function getProjectOwner($project) {
        //retorna el nom i cognom del propietari del projecte

    }

    public function removeProjectByUser($id) {
        //elimina el projecte amb id_usuari=$id

    }




}


?>