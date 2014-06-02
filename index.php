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

      // Hacemos resize del Canvas
    FB.Canvas.setSize({ width: 760, height: 1200 });//medidas del iframe
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
<section class="header" ><figure> <a href="http://www.gruporivero.com" target="_blank"><img class="logo" src="img/logo.png" alt=""></a></figure> </section> 

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
            
            <!-- 
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
                       <br />
            <textarea placeholder="Comentario" cols="28" rows="10" name="mensaje"></textarea>
            <br />
            <input class="button" type="submit" value="ENVIAR" name="submit1" id="submit" />            
          </fieldset>
          



<table>
<tr>
  <th><a href="http://www.gruporivero.com/web/category/marcas/cadillac/" target="_blank"><img src="img/cadillac-logo.png" alt=""></a></th>
  <th><a href="http://www.gruporivero.com/web/category/marcas/buick/" target="_blank"><img src="img/buick-logo.png" alt=""></a></th>
  <th><a href="http://www.gruporivero.com/web/category/marcas/chevrolet-nuevos/" target="_blank"><img src="img/chevrolet-logo.png" alt=""></a></th>
  <th><a href="http://www.gruporivero.com/web/category/marcas/gmc/" target="_blank"><img src="img/gmc-logo.png" alt=""></a></th>
</tr>

</table>




  
</body>
</html>