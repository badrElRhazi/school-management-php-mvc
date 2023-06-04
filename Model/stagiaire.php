<?php
    

function database_connection(){
    return new PDO('mysql:dbname=ofppt;host=localhost','root','root');
    
}

function liste_stagiaires(){
    $pdo=database_connection(); 
    return $pdo->query('SELECT * FROM stagiaire')->fetchAll(PDO::FETCH_OBJ);
}
function create(){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
    $login=$_POST['login'];
    $password=$_POST['password'];
    $pdo=database_connection();
    $sqlState = $pdo->prepare('INSERT INTO stagiaire VALUES(null,?,?,?,?,?)');
    return $sqlState->execute([$nom, $prenom, $age, $login, $password]); 
}
function update(){
    
}
function destroy(){

}

?>