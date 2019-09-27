
<?php
session_start();
// Connexion à la base de données
try
{
$bdd = new PDO('mysql:host=localhost;dbname=stc_bdd', 'root', '');
}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT *  FROM cours ');
var_dump($reponse->fetch());

?>