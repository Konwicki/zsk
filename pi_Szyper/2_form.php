<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <h4>Dane użytkownika z formularza</h4>
    <form action="./2_form_dane.php" method="post" novalidate>
      <input type="text" name="surname" placeholder="Nazwisko" autofocus autocomplete="off" required pattern="[a-zA-Z]{2,}"><br><br>
      <input type="text" name="name" placeholder="Imie"><br><br>
      <select name="gender" required>
        <option value="" disable hidden selected>Wybierz opcje</option>
        <option value="m">mężczyzna</option>
        <option value="w">kobieta</option>
      </select><br><br>
      <input type="submit" value="wyślij">
    </form>
  </body>
</html>
