<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h3>początek pliku</h3>
    <?php
      include './3_1_file.php';
      include_once './3_1_file.php';

      require './3_1_file.php';
      require_once './3_1_file.php';
     ?>

     <h3>koniec pliku</h3>
  </body>
</html>
