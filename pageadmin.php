<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Admin </title>
    <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Proza+Libre|Taviraj" rel="stylesheet">
    <link rel="icon" type="image/png" href="image/favicon.png">
    <link rel="stylesheet" href="css/mystyle.css">

</head>

<?php 
    header("refresh:1200;url=check.php");
?> 

<body id="canvas" class="row" style="margin-top: 0px;">

<!-- Cette Partie est le navbar, il contient une image et indique sur quelle page on se trouve
    il n'y a rien de bien compliqué, c'est juste surtout des classes bootstraps-->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img id="expo-img" class="img-responsive" src="image/paris.png"/></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="inscription.php">Inscription</a></li>
                <li class="active"><a href="#">Login admin</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <table class="table">
        <h1>Liste des Inscrits en Attente de Validation</h1>
        <tr>
            <td> Civilite </td>
            <td> Nom </td>
            <td> Prénom </td>
            <td> E-mail </td>
            <td> Adresse </td>
            <td> Ville </td>
            <td> Code Postal </td>
            <td> Date de Naissance </td>
            <td> Cosplays </td>
            <td> Mercredi </td>
            <td> Jeudi </td>
            <td> Vendredi </td>
            <td> Samedi </td>
            <td> Dimanche </td>
            <td> Modifier </td>
            <td> Supprimer </td>
            <td> Valider </td>
            <td> Refuser </td>


        </tr>
        <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=event', 'root', '');// Connexion à MySQL en UTF-8

        }
        catch(PDOException $e) {
            $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
            die($msg);
            echo $msg ;

        }

        $req = "SELECT * FROM inscription WHERE validation = '0'";
        $prep = $bdd->query($req);

        while($li = $prep->fetch(PDO::FETCH_ASSOC))
        {

            echo "<tr> 
                            <td>".$li["genre"]."</td> 
                            <td>".$li["nom"]."</td> 
                            <td>".$li["prenom"]."</td> 
                            <td>".$li["email"]."</td> 
                            <td>".$li["adresse"]."</td> 
                            <td>".$li["ville"]."</td> 
                            <td>".$li["code"]."</td> 
                            <td>".$li["birthdate"]."</td> 
                            <td>".$li["cosplay"]."</td> 
                            <td>".$li["mercredi"]."</td> 
                            <td>".$li["jeudi"]."</td> 
                            <td>".$li["vendredi"]."</td> 
                            <td>".$li["samedi"]."</td> 
                            <td>".$li["dimanche"]."</td> 
                            <td><a href='modif.php?gig=".$li["id"]."'><img class='img-responsive admin-image' src='image/Modif.png'/></td></a> 
                            <td><a href='suppr.php?gig=".$li["id"]."'><img class='img-responsive admin-image' src='image/suppr.png'/></td></a> 
                            <td><a href='valid.php?gig=".$li["id"]."'><img class='img-responsive admin-image' src='image/valid.png'/></td></a> 
                            <td><a href='refu.php?gig=".$li["id"]."'><img class='img-responsive admin-image' src='image/refu.png'/></td></a>   
                      </tr>";


        }
        $prep->closeCursor();

        ?>
    </table>
</div>


<div class="container">
    <table class="table">
        <h1>Liste des Inscrits Valider</h1>
        <tr>
            <td> Civilite </td>
            <td> Nom </td>
            <td> Prénom </td>
            <td> E-mail </td>
            <td> Adresse </td>
            <td> Ville </td>
            <td> Code Postal </td>
            <td> Date de Naissance </td>
            <td> Cosplays </td>
            <td> Mercredi </td>
            <td> Jeudi </td>
            <td> Vendredi </td>
            <td> Samedi </td>
            <td> Dimanche </td>
            <td> Modifier </td>
            <td> Supprimer </td>
            <td> Valider </td>
            <td> Refuser </td>


        </tr>
        <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=event', 'root', '');// Connexion à MySQL en UTF-8

        }
        catch(PDOException $e) {
            $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
            die($msg);
            echo $msg ;

        }

        $req = "SELECT * FROM inscription WHERE validation = '1'";
        $prep = $bdd->query($req);

        while($li = $prep->fetch(PDO::FETCH_ASSOC))
        {

            echo "<tr> 
                            <td>".$li["genre"]."</td> 
                            <td>".$li["nom"]."</td> 
                            <td>".$li["prenom"]."</td> 
                            <td>".$li["email"]."</td> 
                            <td>".$li["adresse"]."</td> 
                            <td>".$li["ville"]."</td> 
                            <td>".$li["code"]."</td> 
                            <td>".$li["birthdate"]."</td> 
                            <td>".$li["cosplay"]."</td> 
                            <td>".$li["mercredi"]."</td> 
                            <td>".$li["jeudi"]."</td> 
                            <td>".$li["vendredi"]."</td> 
                            <td>".$li["samedi"]."</td> 
                            <td>".$li["dimanche"]."</td> 
                            <td><a href='modif.php?gig=".$li["id"]."'><img class='img-responsive admin-image' src='image/Modif.png'/></td></a> 
                            <td><a href='suppr.php?gig=".$li["id"]."'><img class='img-responsive admin-image' src='image/suppr.png'/></td></a> 
                            <td><a href='valid.php?gig=".$li["id"]."'><img class='img-responsive admin-image' src='image/valid.png'/></td></a> 
                            <td><a href='refu.php?gig=".$li["id"]."'><img class='img-responsive admin-image' src='image/refu.png'/></td></a> 
                      </tr>";


        }
        $prep->closeCursor();

        ?>

    </table>

</div>

<div class="container">
    <table class="table">
        <h1>Liste des Refus</h1>
        <tr>
            <td> Civilite </td>
            <td> Nom </td>
            <td> Prénom </td>
            <td> E-mail </td>
            <td> Adresse </td>
            <td> Ville </td>
            <td> Code Postal </td>
            <td> Date de Naissance </td>
            <td> Cosplays </td>
            <td> Mercredi </td>
            <td> Jeudi </td>
            <td> Vendredi </td>
            <td> Samedi </td>
            <td> Dimanche </td>
            <td> Modifier </td>
            <td> Supprimer </td>
            <td> Valider </td>
            <td> Refuser </td>



        </tr>
        <?php
        try {
            $bdd = new PDO('mysql:host=localhost;dbname=event', 'root', '');// Connexion à MySQL en UTF-8

        }
        catch(PDOException $e) {
            $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
            die($msg);
            echo $msg ;

        }

        $req = "SELECT * FROM inscription WHERE validation = '2'";
        $prep = $bdd->query($req);

        while($li = $prep->fetch(PDO::FETCH_ASSOC))
        {

            echo "<tr> 
                            <td>".$li["genre"]."</td> 
                            <td>".$li["nom"]."</td> 
                            <td>".$li["prenom"]."</td> 
                            <td>".$li["email"]."</td> 
                            <td>".$li["adresse"]."</td> 
                            <td>".$li["ville"]."</td> 
                            <td>".$li["code"]."</td> 
                            <td>".$li["birthdate"]."</td> 
                            <td>".$li["cosplay"]."</td> 
                            <td>".$li["mercredi"]."</td> 
                            <td>".$li["jeudi"]."</td> 
                            <td>".$li["vendredi"]."</td> 
                            <td>".$li["samedi"]."</td> 
                            <td>".$li["dimanche"]."</td> 
                            <td><a href='modif.php?gig=".$li["id"]."'><img class='img-responsive' src='image/Modif.png'/></td></a> 
                            <td><a href='suppr.php?gig=".$li["id"]."'><img class='img-responsive' src='image/suppr.png'/></td></a> 
                            <td><a href='valid.php?gig=".$li["id"]."'><img class='img-responsive' src='image/valid.png'/></td></a> 
                            <td><a href='refu.php?gig=".$li["id"]."'><img class='img-responsive' src='image/refu.png'/></td></a>  
                      </tr>";


        }
        $prep->closeCursor();

        ?>
    </table>
</div>



</body>




</html>
