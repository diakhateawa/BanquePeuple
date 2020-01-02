<?php
require_once '../model/comptedb.php';
require_once '../model/clientdb.php';

extract($_POST);
// $date = $_POST['date'];

$result = addCompte($numero, $solde,$etat, $idC);
if ($result !=0){
    updateClient($idC);

}

header("location:comptes");

?>


