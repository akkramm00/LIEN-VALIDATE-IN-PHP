<?php
  if(isset($_POST['submit']) && isset($_POSt['message'])) {
    $message= $POST['message'];
    $message = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
    $url = filter_var($message,FILTER_VALIDATE_URL);
  }
?>

<DOCTYPE html>
<html>
  <head>
    <title>Cas pratique</title>
  <body>
 <h1>Formulaire</h1>
    <form method = "post">
      <label for="message">Message :</label><br>
      <textarea type="text" name="message" id="message" rows="5" cols="40">
        <?php if($url !==false ) {echo "lien interdit";} else{ echo $message ; } ?>
      </textarea><br>
      <input type="submit" value=" Soumettre" name="submit">
    </form>
<!-- Afin de sécuriser davantage une application , il est possible d'empécher les utilisateurs de soumettre des liens dans les messages Pour celz , on peut utiliser mla fonction filter_var() avec lm'option FILTER_VALIDATE_URL pour valider si le contenu de la variable $message est un lien valide.Si la validation réussit , cela indique que l'utilisateur a sousmis un lien , et un message d'erreurpeut etre affiché à la place du lien pour avertir l'utilisateur qu'il n'est pas autorisé à soumettre des liens -->    
    
  </body>
</html>
<?php 
echo $date = date("Y-m-d") ;
?>