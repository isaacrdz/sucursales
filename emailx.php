<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

</head>
<body>


<section id="form-box">
   Gracias
            
   </section>

   <?
// configuración
//$mensajeenviado='Enviado correctamente, en breve nos comunicaremos con usted';
//$redireccion='http://maquinariarivero.com'; // cuando se envie el mail hacia donde me tengo que ir, eso dice el archivo jeje
//$mensajenoenviado='Favor de completar las palabras correctamente';
//$redireccionx='http://maquinariarivero.com/contacto-maquinaria-construccion-liugong-genie-monterrey-mexico.php'; // cuando se envie el mail hacia donde me tengo que ir, eso dice el archivo jeje

// enviamos el email


$nombre=$_POST['nombre'];
$correo=$_POST['email'];
$telefono=$_POST['tel'];
$como=$_POST['como'];
$mensaje=$_POST['mensaje'];

// personales 
 //$mailx='maquinaria@gruporivero.com';
$mailx='irodriguez@gruporivero.com';


$asunto='Formulario Maquinaria Rivero'; // max 30 caracteres Ok 


// cuerpo del mail
$cuerpo = "Formulario de maquinariarivero.com\n";
$cuerpo .= "\n";
$cuerpo .= "Nombre: $nombre\n";
$cuerpo .= "\n";
$cuerpo .= "Email: $correo\n";
$cuerpo .= "\n";
$cuerpo .= "Telefono: $telefono\n";
$cuerpo .= "\n";
$cuerpo .= "Como se entero de nosotros?: $como\n";
$cuerpo .= "\n";
$cuerpo .= "Comentarios: $mensaje\n"; 
// cabeceras
$cabecera="From: Maquinaria Rivero <gruporivero.com>";
// enviamos el email 

mail($mailx,$asunto,$cuerpo,$cabecera);
//echo '<script>alert("'.$mensajeenviado.'");</script>'; //
//echo '<script>location.href="'.$redireccion.'";</script>';  


?>

</body>
</html>


