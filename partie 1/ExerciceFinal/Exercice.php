<?php
    session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceFinal</title>
    </head>
    <body>
    <?php 
        if (!isset($_SESSION["Logged"]) && !$_SESSION["Logged"]) {
            ?>
                <form method="POST">
                <label for="password">Nom:</label>
                <input type="nom" name="nom" id="nom" value="" />
                <p>
                    <label for="password">Mot de passe:</label>
                    <input type="password" name="password" id="password" value="" />
                    <input type="submit" name="submit" value="connection" />
                </p>
            </form>
            <?php
if(isset($_POST["submit"])) 
{
  if(!empty($_POST['nom']) && !empty($_POST['password'])) {
      if($_POST['nom'] !== "Julien") {
          echo '<h1>Mauvais identifiant</h1>';
      }
      else if($_POST['password'] !== "1234") {  
          echo '<h1>Mauvais mot de passe</h1>';
      } else {
          $_SESSION["Logged"] = true;
          header("Refresh:0");   
      }
  }
}
        } else { 
            ?>
            <form method='post'>
                <button type='submit' name='logout'>Logout</button>
            </form>
            <h1>Bienvenue</h1>
            <?php
    
            if (isset($_POST["logout"])) {
                session_destroy();
                header("Refresh:0");
            }
        }
        ?>
    </body>
</html>
<?php
    highlight_file(__FILE__)
?>