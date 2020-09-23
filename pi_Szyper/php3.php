<?php
//wersja php
echo PHP_VERSION, '<br>';
// echo phpinfo();

//interpolacja ,
echo 'a','b','c'; //show a show b show case
echo'<br>';
echo 'a'.'b'.'c'; //add a+b+c show abc
echo'<br>';

//potęgowanoie
$pow = 2**10; //1024
echo "$pow<br>";

//operatory bitowe
//and &, or |, not ~, xor ^, <<, >>
$bin = 0b1010;
echo "$bin<br>"; //10

$bin = $bin << 2; //101000
echo "$bin<br>";

$bin = $bin >> 3; //101
echo "$bin<br>";

echo '<hr>';

//porownanie
$x = 1;
$y = 1.0;

if ($x == $y) {
  echo 'zmienna $x jest równa $y<br>';
}else{
  echo 'zmienna $x nie jest równa $y<br>';
}

echo gettype($x);
echo '<br>';
echo gettype($y);
echo '<br>';

if ($x === $y) {
  echo 'zmienna $x jest identyczna $y<br>';
}else{
  echo 'zmienna $x nie jest identyczna $y<br>';
}

$x = 10;
$y = 100;

echo $x <=> $y;
echo '<hr>';

$x = 1;
$x=$x++;
echo $x; // 1
$x=++$x;
echo $x; // 2
$y=$x++;
echo $x; // 3
echo $y; // 2
$y=++$x*2-1;
echo $x; // 4
echo $y; // 7

//operatory rzutowania
//bool, int, float, string, array, object, unsert
$test1 = '123abc4';
$test2 = 'jd';
$test3 = 20;

echo '<br> typ danych $test1: ',gettype($test1);
$test1=(int)$test1;
echo "<br>$test1<br>";
echo 'typ danych $test1: ',gettype($test1);

echo'<br>';

echo '<br> typ danych $test2: ',gettype($test2);
$test2=(bool)$test2;
echo "<br>$test2<br>";
echo 'typ danych $test2: ',gettype($test2);

echo'<br>';

echo '<br> typ danych $test3: ',gettype($test3);
$test3=(float)$test3;
echo "<br>$test3<br>";
echo 'typ danych $test3: ',gettype($test3);

//rozmiar typu integer
echo '<br>', PHP_INT_SIZE, '<hr>'; //8

//kontrola typu zmiennych
//is_int(), is_float(), is_numeric(), is_string, is_bool, is_null

$x = 1;
echo is_int($x);
echo is_float($x);
echo is_numeric($x);
$y = null;
echo is_null($y);
$w;
echo @gettype($w); //operator ignorowania bledów --> @

 ?>
