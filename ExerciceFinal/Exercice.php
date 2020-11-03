<?php
    session_start();
    $_SESSION['connection'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceFinal</title>
    </head>
    <body>
        <form method="POST">
            <label for="password">Nom:</label>
            <input type="nom" name="nom" id="nom" value="" />
            <p>
                <label for="password">Mot de passe:</label>
                <input type="password" name="password" id="password" value="" />
                <input type="submit" name="submit" value="connection" />
            </p>
        </form>
    </body>
</html>
<?php
  define('nom','julien');
  define('password','1234');
  $errorMessage = 'identifiant ou mots de passe incorect.';
  if(isset($_POST["submit"])) 
  {
    if(!empty($_POST['nom']) && !empty($_POST['password'])) 
    {
      if($_POST['nom'] !== "Julien") 
      {
        $echo= 'Mauvais nom';
      }
        elseif($_POST['password'] !== "1234") 
      {  
        $echo= 'Mauvais mot de passe';
      }
        else
      {
        session_start();
        if (isset($_SESSION["Logged"]) && $_SESSION["Logged"]) {
            echo "<h1>Bienvenue</h1>";
            echo "<form action='' method='post'><button type='submit' name='logout'>Logout</button></form>";
            if (isset($_POST["logout"])) {
                session_destroy();
                header("Refresh:0");
            } else {

                echo '        
                    <form action="" method="post">
                        <p>
                            <label for="user">Nom d\'utilisateur</label>
                            <input type="text" name="user" require>
                        </p>
                        <p>
                            <label for="password">Mot de passe</label>
                            <input type="password" name="password" require>
                        </p>
                        <button type="submit" name="login">login</button>
                    </form>
                    '; 
            }
        }
        
}
}
}
highlight_file(__FILE__)
?>
//