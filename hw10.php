<?php
// I zadatak

/*
 $a=200;
$b=80;

$c = $a + $b;
echo "Zbir je $c. <br>"

$d = $a*$b;
echo "Proizvod je $d.<br>";

$f= $a-$b;
echo "Razlika je $f.<br>";

$m= $a / $b;
echo "Kolicnik je $m.<br>";

*/

// II zadatak

/*

$meseci=array('Januar','Februar','Mart','April','Maj','Jun');

echo "Sada je $meseci[0] mesec.<br>"

echo "Sada je $meseci[1] mesec.<br>"

echo "Sada je $meseci[2] mesec.<br>"

echo "Sada je $meseci[3] mesec.<br>"

echo "Sada je $meseci[4] mesec.<br>"

echo "Sada je $meseci[5] mesec.<br>"

*/


// III zadatak
/*

$x = 6;
$y = 9;
$z = 3;
$s = $z + $y + $z; 



echo "Zbir brojeva $x , $y i $z je $s";*/

//II zadatak, drugaciji nacin

$meseci=array('Januar','Februar','Mart','April','Maj','Jun');
$meseci = rand[0,6];

if($meseci == 0) {
  echo "Sada je Januar mesec";
}
else if ($meseci == 1) {
  echo "Sada je Februar mesec";
}

else if ($meseci == 2) {
  echo "Sada je Mart mesec";
}

else if ($meseci == 3) {
  echo "Sada je April mesec";
}

else if ($meseci == 4) {
  echo "Sada je Maj mesec";
}

else if ($meseci == 5) {
 echo "Sada je Jun mesec";
}

?>