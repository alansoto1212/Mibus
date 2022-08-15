<?php


//V 0.1 original
//Autor: Chiphysi  Autor: yOMEROCAWAKMERO



    $usuario = "root"; //en ste caso root por ser localhost
    $password = "";  //contraseña por si tiene algun servicio de hosting 
    $servidor = "localhost"; //localhost por lo del xampp
    $basededatos ="mibus"; //nombre de la base de datos


//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect  ($servidor,$usuario,"") or die ("Error con el servidor de la Base de datos"); 


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");

if(isset($_POST['nombre'] ) ||isset($_POST['apellidos'] )   ||isset($_POST['correo'] ) ||isset($_POST['direccion'] )  ||isset($_POST['asunto']) ||isset($_POST['mensaje']))
 {
     //recuperar las variables
     $nombre=$_POST['nombre']; //name="nombre"
     $apellidos=$_POST['apellidos']; //name="apellidos"
     $correo=$_POST['correo']; //name="correo"
     $direccion=$_POST['direccion']; //name="direccion"
     $asunto=$_POST['asunto']; //name=asunto"
     $mensaje=$_POST['mensaje']; //name="mensaje"
}
 

    //sentencia sql
    $sql="INSERT INTO datos VALUES ('$nombre','$apellidos','$correo','$direccion','$asunto','$mensaje')"; //manda a traer los valores de '$nombre','$correo','$mensaje'
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conexion, $sql);


    //verificacion de la ejecucioon
    if(!$ejecutar){
        echo"hubo algun error"; //si algo sale mal mandanos este mensaje
    }else{
        echo"datos guardado correctamente <br><a href=FormularioContactanos.html'>volver</a>"; //si todo sale bien mandanos este mensaje
    }
     
?>﻿