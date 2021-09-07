<?php


//esta base de dato es local se llama abnorm.sql
//$conexion=mysqli_connect('localhost','root','','abnorm');

//esta base de dato esta en servidor el mio lo dejo por defecto
$conexion = mysqli_connect("PMYSQL132.dns-servicio.com:3306", "marlon", "031132", "7775862_abnorm");

//recogemos los datos y lo enviamos a la BD para que registren los datos
$name = $_POST['name'];
$description = $_POST['description'];

if ($name && $description) {
    $sql = "INSERT into comments(name, description,date,time) VALUES ('$name', '$description',curdate(),curtime())";
    echo mysqli_query($conexion, $sql);
} else {
    echo"error";
}
?>