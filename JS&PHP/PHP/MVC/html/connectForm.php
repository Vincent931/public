<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MVC</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
 </head>
<body>
    <div class=form-connect>
          <h2>Pour Accéder aux fonctionnalités de ce site, vous devez vous connecter<br><span class="mess">{message}</span></h2>
          
          <form method="post" action="./index.php?action=form">
               <p>
                    <label for="email">email</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="email" name="email" id="email"/>
               </p>
               <p>
                    <label for="password">password</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="password" name="password" id="password"/>
               </p>
               <p>
                    <input type="submit" value="Envoyer"/>
               </p>
          </form>
     </div>
</body>
</html>