<?php
	// incluimos la conexión a MySQL

	include_once('../db/dbcon.php');    

	// variables para insertar datos a mysqli
	$nombre = strip_tags(trim($_POST["nombre"])); //Retira las etiquitas HTML
    $nombre = str_replace(array("\r","\n"),array(" "," "), $nombre);    
    $telefono = trim($_POST["telefono"]);  
    $fecha = date("Y-m-d H:i:s");  
    
    $sql = "SELECT IFNULL(MAX(id), 0) + 1 AS MAX_ID FROM clientes";
    $result = $con->query($sql);

    while ($row = $result->fetch_assoc()) {
        $id = $row["MAX_ID"];
    }    

    $query = "INSERT INTO clientes (id, nombre, telefono, fch_creacion) 
	VALUES($id, '$nombre', '$telefono', '$fecha')";
    
	if ($con->query($query)) {  
        return true;
    }else{
        return false;
    }


?>