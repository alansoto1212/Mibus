<?php

 $host ="localhost";
 $user ="root";
 $pass ="";
 $db="mibus";


 $con = mysqli_connect($host,$user,$pass,$db)or die("Problemas al Conectar");
 mysqli_select_db($con,$db)or die("problemas al conectar con la base de datos");


 
 $nombre=$_POST['nombre'];
 $apellidos=$_POST['apellidos'];
 $correo=$_POST['correo'];
 $direccion=$_POST['direccion'];
 $asunto=$_POST['asunto'];
 $mensaje=$_POST['mensaje'];
 

 
 $sql="INSERT INTO contactos VALUES('$nombre',
        					      '$apellidos',
        					      '$correo',
       	 					  	  '$direccion',
       	 					  	  '$asunto',
       	 					  	  '$mensaje',";
       			
  $ejecutar=mysqli_query($con,$sql);
 
 if(!$ejecutar){
  echo"Tienes un error wey no se que sea";
 }else{
  echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
 }
?>