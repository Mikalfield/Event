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
                    <li class="active"><a href="#">Accueil</a></li>
                    <li><a href="inscription.php">Inscription</a></li>
                    <li><a href="pageadmin.php">Login admin</a></li>
                </ul>
            </div>
        </div>
    </nav>







<section id="section-2" class="col-xs-12">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="image/four.jpg" alt="quatre images en une" width="460" height="345">
            </div>

            <div class="item">
                <img src="image/anime.jpg" alt="Dessin" width="460" height="345">
            </div>

            <div class="item">
                <img src="image/cosplay1.jpg" alt="Cosplay Black Rock Shooter" width="460" height="345">
            </div>
            <div class="item">
                <img src="image/cosplay2.jpg" alt="Cosplay Mirai Nikki" width="460" height="345">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</section>

<!-- ceci est la première vrai section, on y explique la Nature de l'évenement en quelques mots-->
<section id="section-1" class="col-xs-12">

    <div class="row">
        <h2 class="col-xs-11 col-xs-offset-1"><i class="fa fa-sun-o"></i> Japan Expo, c’est quoi ?</h2>
        <p class="col-xs-11 col-xs-offset-1 col-md-7">
            Japan Expo est LE rendez-vous des amoureux du Japon et de sa culture,
            du manga aux arts martiaux, du jeu vidéo au folklore nippon, de la J-music à la musique traditionnelle :
            un événement incontournable pour tous ceux qui s’intéressent à la culture japonaise
            et une infinité de découvertes pour les curieux. Le tout à 30 minutes de Paris !
        </p>
        <!--<img id="logo-ecetech" class="col-xs-0 col-md-3" src="ecetech_logo.jpg" Alt="ECEtech Logo"> -->
    </div>
</section>


<!-- ceci est Est la partie direction, on y explique comment aller à l'évenement et on intègre une carte google
       pour mieux précisier ou ça se trouve. -->
<section id="section-4" class="col-xs-12 ">

    <div class="row">
        <h2 class="col-xs-11 col-xs-offset-1"><i class="fa fa-map-marker"></i> Directions</h2>
        <p class="col-xs-11 col-xs-offset-1 col-md-7">
            <span class="date-place"><i class="fa fa-train"></i> En train: </span><br/>
            Station Parc des expositions <br/>
            <span class="date-place"><i class="fa fa-bus"></i> En bus:</span><br/>
            Lignes 349 et 350 <br/>
            <span class="date-place"><i class="fa fa-train"></i> En avion: </span><br/>
            Charles de Gaulle Etoile <br/>
        </p>
        <div id="map" class="col-xs-0 col-md-3"></div>
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


    <script>
        function initMap() {
            var uluru = {lat: 48.972404, lng: 2.516475};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALh7YluDXBQqQcSGO2XO32z2Ob7j4Vya4&callback=initMap">
    </script>
</body>




</html>