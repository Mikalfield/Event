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

<body id="canvas" class="row" ">

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
                <li class="active"><a href="#">Inscription</a></li>
                <li><a href="pageadmin.php">Login admin</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- ceci est la première vrai section, on y explique la Nature de l'évenement en quelques mots-->
<section id="form-section" class="col-xs-12">

    <div class="row">
        <h1 class="col-xs-11 col-xs-offset-1">INSCRIPTION A LA JAPAN EXPO</h1>
        <form method="post" action="check.php">

            <div class="col-xs-11 col-xs-offset-1">
                <label>Civilité</label><br/>
                <input type="radio" name="cosplay" value="monsieur"> M.
                <input type="radio" name="cosplay" value="madame"> Mme.
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Prénom</label><br/>
                <input type="text" name="firstname" required>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Nom</label><br/>
                <input type="text" name="lastname" required>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Adresse</label><br/>
                <input type="text" name="address" required>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Ville</label><br/>
                <input type="text" name="City" required>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Code postal</label><br/>
                <input type="text" name="Code" required>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Email</label><br/>
                <input type="email" name="mail" required>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Date de naissance</label><br/>
                <input type="text" name="date" placeholder="jj/mm/yyyy" required>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Cosplayer</label><br/>
                <input type="radio" name="cosplay" value="oui"> Oui
                <input type="radio" name="cosplay" value="non"> Non
            </div>

            <div class="col-xs-11 col-xs-offset-1">
                <label>Jours de présence</label><br/>
                <input type="checkbox" name="cosplay" value="Mercredi"> Mercredi
                <input type="checkbox" name="cosplay" value="jeudi"> Jeudi
                <input type="checkbox" name="cosplay" value="Vendredi"> vendredi
                <input type="checkbox" name="cosplay" value="samedi"> Samedi
                <input type="checkbox" name="cosplay" value="Dimanche"> Dimanche
            </div>



            <div class="col-xs-11 col-xs-offset-1">
                <input type="submit" class="btn confirm" value="envoyer">
            </div>




        </form>
    </div>
</section>





<section id="section-5" class="col-xs-12">

    <div class="row">
        <h2 class="col-xs-11 col-xs-offset-1"><i class="fa fa-slack"></i> Nous contacter</h2>
        <p class="col-xs-11 col-xs-offset-1">
                <span class="date-place"><i class="fa fa-facebook-square"></i>
                    <a href="https://www.facebook.com/mikal.field" title="Profile Facebook">Facebook</a>
                </span><br/>

            <span class="date-place"><i class="fa fa-whatsapp"></i>  Numéro : </span> 0698067299 <br/>

            <span class="date-place"> <i class="fa fa-envelope"></i>    mail : </span> mikalfield@gmail.com
        </p>
    </div>
</section>

</body>




</html>
