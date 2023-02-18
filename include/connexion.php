<?php
function connexion()
{
    $pdo = new PDO('mysql:host=localhost;dbname=siteperso;charset=utf8', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
}
