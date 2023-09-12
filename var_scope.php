<?php
$VarX = 5; // global scope

function myTest() {
  echo "varX under the function".$VarX;
}

myTest();

echo "varX Global".$VarX;
?> 