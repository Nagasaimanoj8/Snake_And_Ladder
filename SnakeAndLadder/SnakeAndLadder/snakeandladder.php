<?php
//UC1
 function snakeandladder(){

    $startposition=0;
  echo "Player at starting Position". $startposition."\n";
  echo "Rolling a die";
  $rollDie=rand(1,6);
  $startposition+=$rollDie;
  echo "current position is:".$startposition;
 }
 snakeandladder();

?>