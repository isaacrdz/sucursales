<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<script>

  <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '{694699497243451}',
          xfbml      : true,
          version    : 'v2.0'
        });

        FB.ui({
  method: 'pagetab',
  redirect_uri: 'http://zack-php.herokuapp.com/'
}, function(response){});

      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>











	

</script>

</head>
<body>
	<?php

echo "Hello World!";

?>	
</body>
</html>

