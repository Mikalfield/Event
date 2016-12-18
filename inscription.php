<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription JapExp </title>
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
$prenom= $nom= $genre = $adresse = $ville = $code = $email = $birthdate = $cosplay =  "";
$firstnameErr= $lastnameErr= $genderErr = $addressErr = $cityErr = $codeErr = $emailErr = $birthdateErr = $cosplayErr =  "";
$wednesday = $thursday = $friday = $saturday = $sunday = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    /* vérification de chaque post pour savoir si l'information à correctement été envoyé ou non.*/
    if (empty($_POST["prenom"]))
    {
        $firstnameErr = "Prenom est requis";
    }
    else
    {
        $prenom = test_input($_POST["prenom"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$prenom))
        {
            $firstnameErr = "Only letters and white space allowed";
        }
    }

    if (empty($_POST["nom"])) {
        $lastnameErr = "Nom de famille est requis";
    }
    else
    {
        $nom = test_input($_POST["nom"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$nom))
        {
            $lastnameErr= "Only letters and white space allowed";
        }
    }

    if (empty($_POST["genre"])) {
        $genderErr = "Civilité est requis";
    }
    else
    {
        $genre = test_input($_POST["genre"]);
    }

    if (empty($_POST["adresse"])) {
        $addressErr = "Addresse est requis";
    }
    else
    {
        $adresse = test_input($_POST["adresse"]);
    }

    if (empty($_POST["ville"])) {
        $cityErr = "Ville est requis";
    }
    else
    {
        $ville = test_input($_POST["ville"]);
    }

    if (empty($_POST["code"])) {
        $codeErr = "Code Postal est requis";
    } else {
        $code = test_input($_POST["code"]);
    }

    if (empty($_POST["email"])) {
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
        $cosplayErr = "situation de cosplay est requis";
    }
    else
    {
        $cosplay = test_input($_POST["cosplay"]);
    }


    if (empty($_POST["mercredi"])){
        $mercredi="absent";
    }else{
        $mercredi = test_input($_POST["mercredi"]);
    }
    if (empty($_POST["jeudi"])){
        $jeudi="absent";
    }else{
        $jeudi = test_input($_POST["jeudi"]);
    }

    if (empty($_POST["vendredi"])){
        $vendredi="absent";
    }else{
        $vendredi = test_input($_POST["vendredi"]);
    }
    if (empty($_POST["samedi"])){
        $samedi="absent";
    }else{
        $samedi = test_input($_POST["samedi"]);
    }
    if (empty($_POST["dimanche"])){
        $dimanche="absent";
    }else{
        $dimanche = test_input($_POST["dimanche"]);
    }



try {
$bdd = new PDO('mysql:host=localhost;dbname=event', 'root', '');// Connexion à MySQL en UTF-8

}
catch(PDOException $e) {
    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);

}

    $req = 'INSERT INTO inscription(genre, prenom, nom, adresse, ville, code, email, birthdate, cosplay, mercredi, jeudi, vendredi, samedi, dimanche)
            VALUES (:genre, :prenom, :nom, :adresse, :ville, :code, :email, :birthdate, :cosplay, :mercredi, :jeudi, :vendredi, :samedi, :dimanche);';
    $prep = $bdd->prepare($req);

    $prep->bindValue(':genre',$genre,PDO::PARAM_INT);
    $prep->bindValue(':prenom',$prenom,PDO::PARAM_STR);
    $prep->bindValue(':nom',$nom,PDO::PARAM_STR);
    $prep->bindValue(':adresse',$adresse,PDO::PARAM_STR);
    $prep->bindValue(':ville',$ville,PDO::PARAM_STR);
    $prep->bindValue(':code',$code,PDO::PARAM_STR);
    $prep->bindValue(':email',$email,PDO::PARAM_STR);
    $prep->bindValue(':birthdate',$birthdate,PDO::PARAM_STR);
    $prep->bindValue(':cosplay',$cosplay,PDO::PARAM_STR);
    $prep->bindValue(':mercredi',$mercredi,PDO::PARAM_STR);
    $prep->bindValue(':jeudi',$jeudi,PDO::PARAM_STR);
    $prep->bindValue(':vendredi',$vendredi,PDO::PARAM_STR);
    $prep->bindValue(':samedi',$samedi,PDO::PARAM_STR);
    $prep->bindValue(':dimanche',$dimanche,PDO::PARAM_STR);

    $result = $prep->execute();
    $prep->closeCursor();
    $prep=NULL;


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
                <li class="active"><a href="#">Inscription</a></li>
                <li><a href="pageadmin.php">Login admin</a></li>
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
                <input type="radio" name="genre" value="M"> M.
                <input type="radio" name="genre" value="Mme"> Mme.
                <span class="error">* <?php echo $genderErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Prénom</label><br/>
                <input type="text" name="prenom" >
                <span class="error">* <?php echo $firstnameErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Nom</label><br/>
                <input type="text" name="nom" >
                <span class="error">* <?php echo $lastnameErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Adresse</label><br/>
                <input type="text" name="adresse" >
                <span class="error">* <?php echo $addressErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Ville</label><br/>
                <input type="text" name="ville" >
                <span class="error">* <?php echo $cityErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Code postal</label><br/>
                <input type="text" name="code" >
                <span class="error">* <?php echo $codeErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Email</label><br/>
                <input type="email" name="email" >
                <span class="error">* <?php echo $emailErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Date de naissance</label><br/>
                <input type="text" name="birthdate" placeholder="jj/mm/yyyy">
                <span class="error">* <?php echo $birthdateErr;?></span>
            </div>
            <div class="col-xs-11 col-xs-offset-1">
                <label>Cosplayer</label><br/>
                <input type="radio" name="cosplay" value="oui"> Oui
                <input type="radio" name="cosplay" value="non"> Non
                <span class="error">* <?php echo $cosplayErr;?></span>
            </div>

             <div class="col-xs-11 col-xs-offset-1">
                <label>Jours de présence</label><br/>
                 <input type="checkbox" name="mercredi" value="present"> Mercredi
                 <input type="checkbox" name="jeudi" value="present"> Jeudi
                 <input type="checkbox" name="vendredi" value="present"> vendredi
                 <input type="checkbox" name="samedi" value="present"> Samedi
                 <input type="checkbox" name="dimanche" value="present"> Dimanche
            </div>

            <div class="col-xs-11 col-xs-offset-1">
                <input type="submit" class="btnconfirm" value="envoyer">
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
<!--
-->


</html>
