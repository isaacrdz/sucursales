<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
 <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '{694699497243451}',
          xfbml      : true,
          version    : 'v2.0'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

</head>
<body>


<section id="form-box">
       <form action="emaixl.php" method="post">
          <fieldset>
            <h2>¿Necesitas Información?</h2>
            <label> Nombre: </label>
            <input placeholder="Obligatorio" type="text" name="nombre" id="nombre" title="Nombre" maxlength="60" autocomplete="off" required />
            <br/>
            <label>   Correo: </label>
            <input type="email" name="email" id="email" title="correo" required  align="right">
            </input>
            <br />
            <label> Teléfono*: </label>
            <input placeholder="Obligatorio" value="Obligatorio" type="tel" name="tel" id="tel" required>
            </input>
            <br>
            <br>
            <label>¿Cómo se enteró de nosotros?</label>
            <select name="como">
              <option value="Buscador">Google</option>
              <option value="Facebook">Facebook</option>
              <option value="Twitter">Twitter</option>
              <option value="TV">Youtube</option>
              <option value="TV">TV</option>
              <option value="Amigo">Amigo</option>
              <option value="Prensa">Prensa</option>
              <option value="Seccion">Sección Amarilla</option>
              <option value="Radio">Radio</option>
              <option value="Volante">Volante</option>
              <option value="Cliente">Cliente Anterior</option>
            </select> 
            <br>           
            <label> Comentario: </label>
            <br />
            <textarea placeholder="Obligatorio" cols="28" rows="10" name="mensaje"></textarea>
            <br />
            <input type="submit" value="ENVIAR" name="submit1" id="submit" />  
            <p>Mensaje enviado correctamente</p>          
          </fieldset>
            
   </section>

   <?
// configuración
$mensajeenviado='Enviado correctamente, en breve nos comunicaremos con usted';
$redireccion='http://maquinariarivero.com'; // cuando se envie el mail hacia donde me tengo que ir, eso dice el archivo jeje
$mensajenoenviado='Favor de completar las palabras correctamente';
$redireccionx='http://maquinariarivero.com/contacto-maquinaria-construccion-liugong-genie-monterrey-mexico.php'; // cuando se envie el mail hacia donde me tengo que ir, eso dice el archivo jeje

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
$cuerpo .= "¿Cómo se entero de nosotros?: $como\n";
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



<?
// configuración
$mensajeenviado='Enviado correctamente, en breve nos comunicaremos con usted';
$redireccion='http://maquinariarivero.com'; // cuando se envie el mail hacia donde me tengo que ir, eso dice el archivo jeje
$mensajenoenviado='Favor de completar las palabras correctamente';
$redireccionx='http://maquinariarivero.com/contacto-maquinaria-construccion-liugong-genie-monterrey-mexico.php'; // cuando se envie el mail hacia donde me tengo que ir, eso dice el archivo jeje

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
$cuerpo .= "¿Cómo se entero de nosotros?: $como\n";
$cuerpo .= "\n";
$cuerpo .= "Comentarios: $mensaje\n"; 
// cabeceras
$cabecera="From: Maquinaria Rivero <gruporivero.com>";
// enviamos el email 

mail($mailx,$asunto,$cuerpo,$cabecera);
//echo '<script>alert("'.$mensajeenviado.'");</script>'; //
//echo '<script>location.href="'.$redireccion.'";</script>';  


?>