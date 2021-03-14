<?php
$a = -2;

if ($a < 0){
    echo 'if block<br>';
    echo '$a is smaller than 0<br>';
}
elseif ($a < 5){
    echo 'First ifelse block<br>';
}
elseif ($a < 10){
    echo 'Second elseif block<br>';
}
else{
  echo 'Else block<br>';
  echo 'Else2 block<br>';
}

$a =  (7 > 10 ? 'Yes' : 'No');
echo $a.'<br>';

//switch
$b = 20;

switch ($b) {
  case 10:
    echo 'Chocolat<br>';
    break;

  case 20:
    echo 'Lemon<br>';
    // break;

  case 25:
    echo 'Strawberry<br>';
    break;

  default:
    echo 'None of the above<br>';
}
?>
