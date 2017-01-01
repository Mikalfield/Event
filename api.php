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


}
