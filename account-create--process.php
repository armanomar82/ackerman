<?php
  if(isset($_POST['submit'])){

    $maximun = 5;
    $minimun = 20;

    $userNom = $_POST["user-nom"];
    $userPrénom = $_POST["user-prenom"];
    $userAdresse = $_POST["user-adresse"];
    $userCp = $_POST["user-cp"];
    $userVille = $_POST["user-ville"];
    $userPays = $_POST["user-pays"];
    $userTéléphone = $_POST["user-tel"];
    $userAdresseÉlectronique = $_POST["user-login"];
    $userPasse = $_POST["user-password"];
    
    if(strlen($userNom) < $minimun){
      echo "UserName has to be loger than five";
    }
    if(strlen($userNom) > $maximun){
      echo "UserName cannot be brger than 10";
    }
    
  }
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>account-create--process.php</title>
  <style>code{background:#FF0}</style>
</head>
<body>
  <main>
    <p>Bien le bonjour, je suis le fichier <code>account-create--process.php</code> et voici les valeurs que je viens tout juste de recevoir par la méthode <code>POST</code>:</p>
    <ul>
      <li>Nom : <?php echo $userNom; ?></li>
      <li>Prénom : <?php echo $userPrénom; ?></li>
      <li>Adresse : <?php echo $userAdresse; ?></li>
      <li>Code postal :<?php echo $userCp; ?></li>
      <li>Ville :<?php echo $userVille; ?></li>
      <li>Pays :<?php echo $userPays; ?></li>
      <li>Téléphone :<?php echo $userTéléphone; ?></li>
      <li>Adresse électronique :<?php echo $userAdresseÉlectronique; ?></li>
      <li>Mot de passe :<?php echo $userPasse; ?></li>
    </ul>
  </main>
</body>
</html>