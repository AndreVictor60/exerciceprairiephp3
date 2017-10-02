<?php
echo 'Les nombres impairs jusqu\'a 300 sont : <br />';
// Boucle FOR $i = 0, $i jusqu'a 300 et chaque tour, on n'ajoute +1
for($i = 0; $i < 300;$i++)
{
  $i++;
  echo $i."<br />";
}
// Boucle WHILE $number = 0, tant que $number < 300. Si $number modulo 2 différent de 0 il est impairs et on ajouter +1
$number=0
while($number < 300){
  if($number % 2 != 0){
    echo $number . ' ';
  }
  $number++;
}
?>
