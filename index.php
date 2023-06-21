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
echo $date = date("Y-m-d")."<br>";// affiche 2023-06-21 format date
echo $date = date("h:i:s")."<br>";//affiche 09:58:48 format heure
echo $date = date("d l F Y")."<br>";// affiche 21 Wednesday JUne 2023 format

// le  timestamp:
echo "La date d'aujourd'hui au format timestamp : ".time()."<br>";
// la date au format  GMT :
echo "La date d'aujourd'hui au format GMT :".gmdate("d/m/Y")."<br><br>";
echo print_r(getdate())."<br>";


// AJouter cdes jours ou des mois :
// On utilise les methodes date() et strtotime()

$date = "2023-03-27" ;
echo date('Y-m-d' ,strtotime($date.' + 1 days'))."|"."<br>";
echo date('Y-m-d' ,strtotime($date.' + 1 months'))."|"."<br>";
echo date('Y-m-d' ,strtotime($date.' + 10 months'))."|"."<br>";








?>