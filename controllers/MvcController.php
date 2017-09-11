<?php 
include "models/models.php";
class MvcController{

    public function plantilla(){
        
        include "views/template.php";
    }

    public function enlacesPaginaController(){
        if(isset($_GET["action"])){
            $enlaces = $_GET["action"];
        }else{
            $enlaces="index";
        }
        

        $respuesta = new EnlacesPagina();
        // $pag = EnlacesPagina::enlacesPaginasModels($enlaces);
        $pag = $respuesta->enlacesPaginasModels($enlaces);
        include $pag;
    }
}