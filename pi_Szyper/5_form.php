<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Formularz</h4>

    <?php
    //  isset()
    if (!empty($_GET['surname']) && !empty($_GET['name'])){
      $surname = $_GET['surname'];
      echo <<<DATA
      Imię: {$_GET['name']}<br>
      Imię: $_GET[name]<br>
      Nazwisko: $surname
DATA;
echo "<br><a href=\"./5_form.php\">Wstecz</a>";
}else{
  echo<<<FORM
  <form method="get">
    <input type="text" name="surname" placeholder="Nazwisko" autofocus><br><br>
    <input type="text" name="name" placeholder="Imię"><br><br>
    <input type="submit" value="Wyślij dane"><hr>
  </form>
FORM;
}
    ?>
  <!-- Dodać pole miast oraz kolor (type="color") i wyswietl na strone -->
  </body>
</html>
