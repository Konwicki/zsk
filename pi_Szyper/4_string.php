<?php
  $text = <<<T
  zsk - Zespół
  Szkół
  Komunikacji <br>
T;

  echo $text;
  echo nl2br($text);

  $name = 'jANuSz';
  //zmiana wielkosci liter
  echo strtolower($name), '<br>';
  echo strtoupper($name), '<br>';

  $name = 'jANusz koWalski';
  echo ucfirst($name), '<br>';//zmiana 1szej litery
  echo ucwords($name), '<br>';//zmiana 1szej litery kazdego slowa

  $name = <<<T
  janUsz
T;
  echo ucfirst(strtolower($name));

  echo '<br>';

  $lorem = <<<LOREM
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  LOREM;

  echo $lorem;
  echo wordwrap($lorem, 40, '<br>');
  echo wordwrap($lorem, 40, '<hr>');

  //ob_clean() - czyszczenie ekranu


?>
