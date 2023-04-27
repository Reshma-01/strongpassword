
 <?php

$password = $_POST['password'];

  $uppercase    = preg_match('@[A-Z]{2}@', $password);
  $lowercase    = preg_match('@[a-z]{2}@', $password);
  $number       = preg_match('@[0-9]{2}@', $password);
  $specialchars = preg_match('@[^\w]{2}@', $password);
if($uppercase==TRUE )
{
  echo "2 uppercase letters: yes";
  echo "<br>";
}
else{
  echo "<br>";
  echo "2 uppercase letters: no";
}
if($lowercase==TRUE )
{
  echo "<br>";
  echo "2 lowercase letters: yes";
  
}
else{
  echo "<br>";
  echo "2 lowercase letters: no";
}
if($number ==TRUE )
{
  echo "<br>";
  echo "2 numbers: yes";
  
}
else{
  echo "<br>";
  echo "2 numbers: no";
}
if($specialchars ==TRUE )
{
  echo "<br>";
  echo "2 special characters: yes";
  
}
else{
  echo "<br>";
  echo "2 special characters:  no";
}


?>