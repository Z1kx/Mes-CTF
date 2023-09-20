<?php
if(empty($_POST['username'])){
    echo("Aucun username n'a été envoyé");
    return false;
}

if(empty($_POST['password'])){
    echo("Veuillez écrire un mot de passe");
    return false;
}

$username = trim($_POST['username']);
$password = trim($_POST['password']);

if($username == "bonusername" and $password == "bonmotdepasse"){
    echo("Flag{RTGGBT5GT2TGVBTB21FG}");
}else{
    echo("Credentials incorrect");
    return false;
}
?>