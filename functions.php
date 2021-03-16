<?php
function displayGreetings(){
    echo 'Hello!';
}

displayGreetings();

function displayGreetings2($name, $message){
    echo "Hello $name, $message";
}
?>
<br>
<?php  displayGreetings2('Rick', 'you\'re awesome!');?>
<br>
<?php function displayGreetings3($name, $message = 'have a good day!'){
    echo "Hello $name, $message";
    }

displayGreetings3('Lloyd Rick','');
    echo '<br>';
displayGreetings3('Lloyd', 'how are you?');

function redundDefault($a = 1, $b){
  //some code
}

function addNumbers($num1, $num2, $num3){
  return $num1 + $num2 + $num3;
  echo 'Hello';
}

echo '<br>'.addNumbers(9,6,1);
echo '<br>'.addNumbers('9', '6', '1');


?>
