<?php
  include "removeNextL.php" ;
  $noteArray = array("storage.txt") ;
  $empArray = array("string ") ;
  $x = 0;
  $file = fopen($noteArray[0], "r") or die("Unable to open file!");
  while(!feof($file)) {

    $str = fgets($file) ;
//    echo $str;
    $empArray[$x] = $str ;
    $empArray[$x] = removeLn($empArray[$x]);
//    echo $empArray[$x] ;
    $x++;
    echo $x ;
  }
  fclose($file);

  $x--;
  echo $x ;
  echo "<br>";

    for($i=0; $i < $x ; $i++){
      $file = fopen($empArray[$i], "r") or die("Unable to open file!");

      while(!feof($file)) {

      $note = fgets($file) ;
      echo $note;
      }
      echo "$i <br>";
      fclose($file);
    }

 ?>
