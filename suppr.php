<?php
$num = $_GET["num"];
@mysql_connect("localhost", "root", "");
mysql_select_db("event");
$req = "delete from players where id = $num";
mysql_query($req);
header("location:contactadmin.php");
?>