<?php
require_once '../model/clientdb.php';

extract($_POST);


$result = addClient($nom, $prenom, $adresse, $telephone);


header("location:clients");

?>