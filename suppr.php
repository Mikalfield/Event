<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    $id = $_GET["gig"];
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=event', 'root', '');// Connexion à MySQL en UTF-8

    }
    catch(PDOException $e) {
        $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
        die($msg);
        echo $msg ;

    }

    $req = 'DELETE FROM inscription WHERE id = :id';
    $prep = $bdd->prepare($req);

    $prep->bindValue(':id',$id,PDO::PARAM_INT);

    $prep->execute();
}

header("location:pageadmin.php");
