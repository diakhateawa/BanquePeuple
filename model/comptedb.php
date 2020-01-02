<?php
require_once 'db.php';

function addCompte($numero, $solde,$etat, $idC){

    $sql = "INSERT INTO compte VALUES (NULL, '$numero',$solde,$etat, $idC)";

    $conn = getConection();

    return $conn->exec($sql);
}
function listeCompte(){

    $sql = " SELECT * FROM compte";

    $conn = getConection();

    return $conn->query($sql);
}

?>