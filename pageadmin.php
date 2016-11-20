<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mikal FIELD CV </title>
    <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Proza+Libre|Taviraj" rel="stylesheet">
    <link rel="icon" type="image/png" href="image/favicon.png">
    <link rel="stylesheet" href="css/mystyle.css">

</head>

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
                <a class="navbar-brand" href="#"><img id="expo-img"class="img-responsive" src="image/paris.png"/></a>
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
        <center>
            <table class="table">
                <h1>Liste des sportifs </h1>
                <tr>
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
                    <td> Validiter </td>
                </tr>

                <?php 
                    @mysql_connect("localhost", "root", "");
                    mysql_select_db("event");
                    $req = "select * from inscription order by id";
                    $resultat = mysql_query($req);
                    $ligne = mysql_fetch_assoc($resultat);
                
                    while($ligne)
                        {
                            echo"<tr><td>".$ligne["nom"]."</td><td>".$ligne["prenom"]."</td><td> ".$ligne["email"]."</td><td> ".$ligne["adresse"]."</td><td>".$ligne["ville"]."</td><td> ".$ligne["code postal"]."</td><td>".$ligne["birthdate"]."</td><td>".$ligne["cosplay"]."</td><td>".$ligne["mercredi"]."</td><td>".$ligne["jeudi"]."</td><td>".$ligne["vendredi"]."</td><td>".$ligne["samedi"]."</td><td>".$ligne["dimanche"]."</td><td>".$ligne["validation"]."</td><td><center><a href='FormModif.php?num=".$ligne["id"]."'><img src='image/modif.png' width='30'/></a></center></td><td><center><a href='suppr.php?num=".$ligne["id"]."'><img src='image/suppr.png' width='30' /></a></center></td></tr>";
                            $ligne = mysql_fetch_assoc($resultat);
                        }
                ?>


            </table>
        </center>
    </div>



</body>




</html>