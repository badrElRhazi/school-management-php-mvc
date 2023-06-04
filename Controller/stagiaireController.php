<?php

require_once 'model/stagiaire.php';
    function indexAction(){

        $stagiaires = liste_stagiaires();
        require_once 'views/liste_stagiaires.php';
    }
    function createAction(){
        require_once 'Views/createStagiaire.php';
    }
    function storeAction(){
        $isCreated=create();
        if($isCreated){
            echo 'successfully';
            header('location:index.php');
    }else{
        echo(error_clear_last());
    }
        
    }
    function editAction(){
        
    }
    function destroyAction(){
    
    }

?>