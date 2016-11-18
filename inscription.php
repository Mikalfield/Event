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


<?php
// define variables and set to empty values
$firstname= $lastname= $gender = $address = $city = $code = $email = $birthdate = $cosplay =  "";
$firstnameErr= $lastnameErr= $genderErr = $addressErr = $cityErr = $codeErr = $emailErr = $birthdateErr = $cosplayErr =  "";
/*$wednesday = $thursday = $friday = $saturday = $sunday = ""; */

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    /* vérification de chaque post pour savoir si l'information à correctement été envoyé ou non.*/
    if (empty($_POST["name1"]))
    {
        $firstnameErr = "Prenom est requis";
    }
    else
    {
        $firstname = test_input($_POST["name1"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$firstname))
        {
            $firstnameErr = "Only letters and white space allowed";
        }
    }
   /* $firstname = test_input($_POST["name1"]); */

    if (empty($_POST["lastname"])) {
        $lastnameErr = "Nome de famille est requis";
    }
    else
    {
        $lastname = test_input($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$lastname))
        {
            $lastnameErr= "Only letters and white space allowed";
        }
    }

    if (empty($_POST["gender"])) {
        $addressErr = "Civilité est requis";
    }
    else
    {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["address"])) {
        $addressErr = "Addresse est requis";
    }
    else
    {
        $address = test_input($_POST["address"]);
    }

    if (empty($_POST["city"])) {
        $cityErr = "Ville est requis";
    }
    else
    {
        $city = test_input($_POST["city"]);
    }

    if (empty($_POST["code"])) {
        $codeErr = "Code Postal est requis";
    } else {
        $code = test_input($_POST["code"]);
    }

    if (empty($_POST["mail"])) {
        $emailErr = "Email est requis";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["birthdate"])) {
        $birthdateErr = "date de naissance est requis";
    } else {
        $birthdate = test_input($_POST["birthdate"]);
    }

    if (empty($_POST["cosplay"])) {
        $codeErr = "situation de cosplay est requis";
    }
    else
    {
        $cosplay = test_input($_POST["cosplay"]);
    }

   /* $wednesday = test_input($_POST["day"][0]);
    $thursday = test_input($_POST["day"][1]);
    $friday = test_input($_POST["day"][2]);
    $saturday = test_input($_POST["day"][3]);
    $sunday = test_input($_POST["day"][4]); */
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


















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
                <li class="active"><a href="inscription.php">Inscription</a></li>
                <li><a href="#">Login admin</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Inscription à l'évenement si dessous-->
<section id="form-section" class="col-xs-12">

    <div class="row">
        <h1 class="col-xs-11 col-xs-offset-1">INSCRIPTION A LA JAPAN EXPO</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <!-- htmlspecialchars($_SERVER["PHP_SELF"]); est utilisé pour renvoyer les données du formulaire à la meme page
             Cependant cela peut être hacké, donc on ajout le special chars pour éviter tout symbol spécial-->

            <div class="col-xs-11 col-xs-offset-1">
                <label>Civilité</label><br/>
                <input type="radio" name="gender" value="monsieur"> M.
                <input type="radio" name="gender" value="madame"> Mme.
                <span class="error">* <?php echo $genderErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Prénom</label><br/>
                <input type="text" name="name1" >
                <span class="error">* <?php echo $firstnameErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Nom</label><br/>
                <input type="text" name="lastname" >
                <span class="error">* <?php echo $lastnameErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Adresse</label><br/>
                <input type="text" name="address" >
                <span class="error">* <?php echo $addressErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Ville</label><br/>
                <input type="text" name="city" >
                <span class="error">* <?php echo $cityErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Code postal</label><br/>
                <input type="text" name="code" >
                <span class="error">* <?php echo $codeErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Email</label><br/>
                <input type="email" name="mail" >
                <span class="error">* <?php echo $emailErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Date de naissance</label><br/>
                <input type="text" name="birthdate" placeholder="jj/mm/yyyy">
                <span class="error">* <?php echo $birthdateErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Cosplayer</label><br/>
                <input type="radio" name="cosplay" value="true"> Oui
                <input type="radio" name="cosplay" value="false"> Non
                <span class="error">* <?php echo $cosplayErr;?></span>
            </div>

        <?php   /* <div class="col-xs-11 col-xs-offset-1">
                <label>Jours de présence</label><br/>
                <input type="checkbox" name="day[]" value="Mercredi"> Mercredi
                <input type="checkbox" name="day[]" value="jeudi"> Jeudi
                <input type="checkbox" name="day[]" value="Vendredi"> vendredi
                <input type="checkbox" name="day[]" value="samedi"> Samedi
                <input type="checkbox" name="day[]" value="Dimanche"> Dimanche
            </div> */ ?>

            <div class="col-xs-11 col-xs-offset-1">
                <input type="submit" class="btn confirm" value="envoyer">
            </div>
        </form>
        <?php
        echo "<h2>Your Input:</h2>";
        echo $firstname;
        echo "<br>";
        echo $lastname;
        echo "<br>";
        echo $gender;
        echo "<br>";
        echo $birthdate;
        echo "<br>";
        echo $email;
        ?>
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
