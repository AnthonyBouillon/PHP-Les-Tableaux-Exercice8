<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les tableaux Exercice 8</title>
  </head>
  <body>
    <?php
      $month = array('janvier ', 'février ', ' mars ', ' avril ', ' mai ', ' juin ', ' juillet ', ' août ', ' septembre ', ' octobre ', ' novembre ', ' décembre');
      // Foreach permet de titiller un tableau key représente l'index du tableau et value sa valeur
      foreach ($month as $key => $value) {
        echo $value;
      }
     ?>
  </body>
</html>
