<?php

class EnlacesPagina{

    public function enlacesPaginasModels($enlaceModels){

        if($enlaceModels == "servicios"||$enlaceModels == "nosotros"
            ||$enlaceModels == "contactenos"){
        
             $module = "views/modules/".$enlaceModels.".php";

        }
        else if($enlaceModels=="index"){
            $module = "views/modules/inicio.php";
        }
        else{
            $module = "views/modules/inicio.php";
        }

    
        return $module;
    }
}