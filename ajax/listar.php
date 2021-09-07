<?php 
        //BD en servidor personal
	$conexion=mysqli_connect('localhost','root','','abnorm');
        
        //conexion local con el archivo abnorm.sql
        //$conexion=mysqli_connect("PMYSQL132.dns-servicio.com:3306",  "marlon", "031132","7775862_abnorm");
	$sql="select * from comments";      
	echo mysqli_query($conexion,$sql);
 ?>