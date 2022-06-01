<?php
	session_start();
    $iduser = $_SESSION['iduser'];
	include("connection.php");


	$idrequest = $_GET["idrequest"];
	$query = "SELECT * FROM requests WHERE idrequest = '$idrequest';";
	$result = mysqli_query($conex, $query);
    $fila=mysqli_fetch_array($result); 
    
    $iddog = $fila['iddog'];
    $idadopter = $fila['idadopter'];
    $idgiver = $fila['idgiver'];

    $query3 = "SELECT * FROM dogposts WHERE idpost = '$iddog';"; 
    $result3 = mysqli_query($conex, $query3); 
    $fila3=mysqli_fetch_array($result3); 
    $namedog = $fila3['name'];

    $query4 = "INSERT INTO adoptions(idadopter, idgiver, iddog, idadmin) VALUES ('$idadopter','$idgiver','$iddog','$iduser');"; 
    $result4 = mysqli_query($conex, $query4);

    $query4 = "INSERT INTO messages (messtext, idsour, iddest) VALUES ('Tu solicitud para adoptar a $namedog ha sido aceptada, si tienes alguna duda con gusto podemos atenderte, manda mensaje al que da en adopcion para ponerte de acuerdo.','$iduser','$idadopter');"; 
    $result4 = mysqli_query($conex, $query4);

    $query4 = "INSERT INTO messages (messtext, idsour, iddest) VALUES ('La solicitud para adoptar a $namedog ha sido aceptada, si tienes alguna duda con gusto podemos atenderte, manda mensaje al adoptante para ponerte de acuerdo.','$iduser','$idgiver');"; 
    $result4 = mysqli_query($conex, $query4);

    $query = "DELETE FROM requests WHERE idrequest = '$idrequest';";
	$result = mysqli_query($conex, $query);

	header("refresh:0; url=../seerequests.php");
	echo'<script type="text/javascript"> alert("Publicacion Aceptada");</script>';
?>