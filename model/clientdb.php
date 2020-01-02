<?php
require_once 'db.php';

function addClient($nom, $prenom, $adresse, $telephone){

    $sql = "INSERT INTO client VALUES (NULL, $nom, $prenom, $adresse, $telephone)";

    $conn = getConection();

    return $conn->exec($sql);
}
function updateClient($idC){

    $sql = "UPDATE client SET  WHERE idC = $idC";

    $conn = getConection();

    return $conn->exec($sql);
}
function listeClient(){

    $sql =" SELECT * FROM client";

    $conn = getConection();

    return $conn->query($sql);
}
/*function listeClientNonComptee(){

    $sql =" SELECT * FROM facture WHERE paiement =0";

    $conn = getConection();

    return $conn->query($sql);
}
function listeFactureReglee(){

    $sql =" SELECT * FROM facture WHERE paiement =1";

    $conn = getConection();

    return $conn->query($sql);
}*/
?>