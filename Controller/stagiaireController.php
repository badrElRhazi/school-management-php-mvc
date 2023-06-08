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
    function editAction($id){
        $stagiaire=view($id);
        require_once 'Views/editStagiaire.php';
    }
    function updateAction(){
        // extract($_POST);
        // edit($id, $nom, $prenom, $age, $login, $password);
        $id=$_POST['id'];
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $age=$_POST['age'];
        $login=$_POST['login'];
        $password=$_POST['password'];
        edit($id, $nom, $prenom, $age, $login, $password);
        header('location:index.php');
    }
   
    function deleteAction(){
        $id=$_GET['id'];
        require_once 'Views/deleteStagiaire.php';

    }
    function destroyAction(){
        destroy($_GET['id']);
        header('location:index.php');
    }

?>