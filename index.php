<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="css/styles.css">
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
<section class="header" ><figure> <a href="http://www.gruporivero.com"><img class="logo" src="img/logo.png" alt=""></a></figure> </section> <br>

            <h2>solicita información</h2>
       <form action="emailx.php" method="post">
          <fieldset>
            
            <input placeholder="Nombre" type="text" name="nombre" id="nombre" title="Nombre" maxlength="60" autocomplete="off" required />
            <br/>
            
            <input placeholder="Correo" type="email" name="email" id="email" title="correo" required  align="right">
            </input>
            <br />
            
            <input placeholder="Telefono *" type="tel" name="tel" id="tel" required>
            </input>
            <br>
            <br> <!-- 
            <label>Cómo se enteró de nosotros?</label> <br>
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
             -->
            <br>           
            <label> Comentario: </label>
            <br />
            <textarea placeholder="Obligatorio" cols="28" rows="10" name="mensaje"></textarea>
            <br />
            <input class="button" type="submit" value="ENVIAR" name="submit1" id="submit" />            
          </fieldset>






