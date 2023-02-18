<?php

include('include/connexion.php');
$pdo = connexion();
 

$nom =  strip_tags($_REQUEST['nom']);
$prenom = strip_tags($_REQUEST['prenom']);
$email = strip_tags($_REQUEST['email']);
$sujet = strip_tags($_REQUEST['sujet']);
$message = strip_tags($_REQUEST['message']);

// construction de la requête en utilisant des paramètres SQL
// on n'indique pas le numéro d'auteur => un auto-incrément sera utilisé
$sql = 'insert into contact (nom, prenom, email, sujet, message) values (:nom, :prenom, :email,:sujet, :message)';
 
// préparation de la requête
$query = $pdo->prepare($sql);
 
// assignation des valeurs aux paramètres

$query->bindValue(':nom',$nom, PDO::PARAM_STR);
$query->bindValue(':prenom',$prenom, PDO::PARAM_STR);
$query->bindValue(':email',$email, PDO::PARAM_STR);
$query->bindValue(':sujet',$sujet, PDO::PARAM_STR);
$query->bindValue(':message',$message, PDO::PARAM_STR);


 
// exécution de la requête
$query->execute();


header('Location: index.php');
exit();
?>