<?php
session_start();

//if (isset($_POST['nom_user'])) { 
  //  echo "runing"; 
//} 


?>
<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=stc_bdd', 'root', '');


$req = $bdd->prepare('INSERT INTO reservation (nom_user,prenom_user,adresse,email_user,telephone,date_cours,id_cours) VALUES(:nom,:prenom,:adresse,:email,:telephone,:date_cours,:id_cours)');
$req->execute(array("nom"=>
     $_POST['nom_user'],"prenom"=>
    $_POST['prenom_user'],"adresse"=>
    $_POST['adresse'],"email"=>
    $_POST['email_user'],
    "telephone"=> $_POST['telephone'],
    "date_cours"=> $_POST['date_cours'],
    "id_cours"=> $_POST['id_cours']
    
));
    

  //  var_dump( $req);

}
catch(Exception $e)
{
die('Erreur : '.$e->getMessage());
}
// On ajoute une entrée dans la table 


    
    


$_SESSION["message"]="ok";
header('Location:debindex.php');

?>
