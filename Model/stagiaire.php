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
function edit($id, $nom, $prenom, $age, $login, $password){

    $pdo=database_connection();
    $sqlState = $pdo->prepare("UPDATE stagiaire 
                SET nom = ?, 
                    prenom = ?,
                    age = ?,
                    login = ?,
                    password= ?
                WHERE id=?
    ");
    
    return $sqlState->execute([$nom, $prenom, $age, $login, $password, $id]);

}
function destroy($id){
    $pdo=database_connection();
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $age=$_POST['age'];
    $login=$_POST['login'];
    $password=$_POST['password'];
    $sqlState = $pdo->prepare("DELETE FROM stagiaire WHERE id=? ");
    return $sqlState->execute([$nom, $prenom, $age, $login, $password]); 


}
function view($id){
    $pdo=database_connection();
    $sqlState = $pdo->prepare("SELECT * FROM stagiaire WHERE id= ? ");
    $sqlState->execute([$id]);
    return $sqlState->fetch(PDO::FETCH_OBJ);
}
?>