<!-- Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->

<?php
  // Creare una variabile con un paragrafo di testo.
  $paragraph = "Ciao a tutti quanti";
  //passo in GET la parola che vorrei sostiuire con i *** e la salvo in variabile
  $badWord = $_GET["badWord"];
  //con str_replace sostituisco la parola con i 3 ***
  $newParagraph = str_replace($badWord, "***", $paragraph);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BadWord</title>
  </head>
  <body>
    <h2> <?php echo $newParagraph ?></h2>
    <p>La lunghezza della stringa è di <strong><?php echo strlen($paragraph) ?></strong> caratteri</p>
  </body>
</html>
