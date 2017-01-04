<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Acceuil JapExp </title>
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
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (empty($_POST["login"])) {
            $loginErr = "un Login est requis";
        }
        if (empty($_POST["mdp"])) {
            $mdpErr = "Le mot de passe est requis";
        }


        if ($_POST["login"] == "admin" ) {
            if ($_POST["mdp"] == "admin"){
                header("location:pageadmin.php");
            }else {
                echo "Le mot de passe est incorect";
            }
        }else {
            echo "Le login est incorrect";
        }
    }
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

<section id="form-section" class="col-xs-12">

    <div class="row">
        <h1 class="col-xs-11 col-xs-offset-1">Identification</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <!-- htmlspecialchars($_SERVER["PHP_SELF"]); est utilisé pour renvoyer les données du formulaire à la meme page
             Cependant cela peut être hacké, donc on ajout le special chars pour éviter tout symbol spécial-->

            <div class="col-xs-11 col-xs-offset-1">
                <label>Login</label><br/>
                <input type="text" name="login">
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Mot de passe</label><br/>
                <input type="password" name="mdp">
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <input type="submit" class="btnconfirm" value="envoyer">
            </div>
        </div>
    </form>
</section>