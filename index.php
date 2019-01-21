<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

     <?php

     $badwords = $_GET['badword'];

     $frase = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet, consectetur adipisicing elit, Lorem ipsum";

     $nuovaFrase = str_replace($badwords, "***", $frase);

     ?>

     <h3><?php echo $nuovaFrase; ?></h3>
     <h2>La frase contiene <?php echo strlen($nuovaFrase); ?> caratteri</h2>

  </body>
</html>
