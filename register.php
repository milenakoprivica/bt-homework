<?php

$name = $_GET['ime'];
$lname = $_GET['prezime'];
$email = $_GET['email'];
$gender = $GET_['pol'];
$password = $_GET['lozinka'];
$passwordr =$_GET ['ponoviti-lozinku'];
$course = $_GET ['odabir-kurseva'];



if ($passwordr == $password){


if ($gender == "zensko") {
  echo "Postovana $name $lname, uspesno ste se registrovali na sajt. Vas username je $email, a Vasa lozinka je $password.";

}

else ($gender == "musko") {
  echo "Postovani $name $lnamse, uspesno ste se registrovali na nasem sajtu. Vas username je $email, a Vasa lozinka je $password.";
}


}

   
if ($course == "php") {
   echo "Puno srece na odabranom PHP kursu";
 }
      else ($course == "css") {
   echo "Puno srece na odabranom CSS kursu";
 }
