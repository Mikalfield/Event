<?php
/// 1) We get the verb sent
/// 2) We check the url requested
/// 3) We connect to the database
/// 4) We put a switch acting for all the available verbs
/// 4a) if it a Get, we use the url to retrieve the subscriber's information
/// 4b) if it's a DELETE, we use the url to determine which url we will delete
/// 4c) if it a put, we create a new subscriber with the information inside the json from the request
/// 4d) if it a post, we modify an existing subscriber with the information inside the json from the request
/// 5) We send the appropriate http response with a json encode if need be

$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$id = array_shift($request);
$input = json_decode(file_get_contents('php://input'),true);


try {
    $bdd = new PDO('mysql:host=localhost;dbname=event', 'root', '');// Connexion à MySQL en UTF-8

}
catch(PDOException $e) {
    $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
    die($msg);
    echo $msg ;

}

switch($method){
    case 'GET' :
        if($id!=null){
            $req = "SELECT * FROM inscription WHERE id = $id";
            $prep = $bdd->prepare($req);

        }
        else{
            $req = "SELECT * FROM inscription ";
            $prep = $bdd->prepare($req);

        }
        $prep->execute();
        $results=$prep->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($results);
        break;

    case 'DELETE' :
        $req = 'DELETE FROM inscription WHERE id = $id';
        $prep = $bdd->prepare($req);
        $prep->bindValue(':id',$id,PDO::PARAM_INT);
        $prep->execute();
        break;

    case 'PUT' :

        //Recuperé Le JSon $input
        //Traduire Le Json
        $prenom=$input->prenom;
        $nom=$input->nom;
        $genre=$input->genre;
        $adresse=$input->adresse;
        $ville=$input->ville;
        $code=$input->code;
        $email=$input->email;
        $birthdate=$input->birthdate;
        $cosplay=$input->cosplay;
        $err = "erreur : ";

        //Verifier chaque Donné une par une 
        if ($prenom=="") {
            $err .= "Prenom requis ";
        }
        else {
            if (!preg_match("/^[a-zA-Z ]*$/",$prenom)){
                $err .= "Pas de caracterse speciaux ";
            }
        }
    
        if ($nom=="") {
            $err .= "Nom de famille requis ";
        }
        else {
            if (!preg_match("/^[a-zA-Z ]*$/",$nom)){
                $err .= "Pas de caracterse speciaux ";
            }
        }
    
        if ($genre=="") {
            $err .= "Civilité requis ";
        }
    
        if ($adresse=="") {
            $err .= "Addresse requis ";
        }
    
        if ($ville=="") {
            $err .= "Ville requis ";
        }
    
        if ($code=="") {
            $err .= "Code Postal requis ";
        }
    
        if ($email=="") {
            $err .= "Email est requis ";
        }
        else { 
            if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $err .= "Format email invalid ";
            }
        }
    
        if ($birthdate=="") {
            $err .= "Date de naissance requis ";
        }
    
        if ($cosplay=="") {
            $err .= "Situation de cosplay requis ";
        }
        
        //Jours
        if ($mercredi==""){
            $mercredi="absent";
        }

        if ($jeudi==""){
            $jeudi="absent";
        }
    
        if ($vendredi==""){
            $vendredi="absent";
        }
        if ($samedi==""){
            $samedi="absent";
        }
        if ($dimanche==""){
            $dimanche="absent";
        }

        if($err == "erreur : ") {

            //Re formulé sous une requet SQL
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
    
            //Posté
            $prep->execute();

        }
        else {
            echo json_encode($err);
        }    

        break;
    
        
    case 'POST' :


}
