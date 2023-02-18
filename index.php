<?php

session_start();
$id_session = session_id();

// Initialise Twig
include('include/twig.php');
$twig = init_twig();


include('include/connexion.php');
$pdo = connexion();

include('include/select.php');
$projets = projets($pdo);
$competences = competences($pdo);

 
// Exécution de Twig
echo $twig->render('base.twig', [
    'projets' => $projets,
    'competences' => $competences,
]);
