<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <title>Exercice5</title>
</head>
<body>
  <p>
    <?php
    //Teste que les paramètres de l'url existent
    if(isset($_GET['week'])){
      echo $_GET['week'];
    }
    ?>
  </p>
</body>
</html>
