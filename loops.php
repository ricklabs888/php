<?php
//for loop
for ($c=1; $c <= 5; $c++) {
  echo 'The value of $c is '.$c.'<br>';
}

//foreach loop
$arr1 = array(11, 12, 13, 14, 15 );
foreach ($arr1 as $num) {
  echo 'The number is ' . $num . '<br>';
}

$arr2 = array('Aaron' => 12, 'Ben' => 23, 'Carol' => 35 );
foreach ($arr2 as $name => $age) {
  echo $name . ' is ' . $age . ' years old.<br>';
}

//while loop
$d = 1;

while ($d <5){
  echo 'The value of $d is ' . $d . '<br>';
  $d++;
}

$e=100;
do {
  echo 'The value is ' . $e . '<br>';
  $e++;
} while ($e <= 105);

//break, continue
for ($i=0; $i < 10 ; $i++) {
  echo '$i = ' . $i . ', ';
  if ($i == 4)
    continue;

  echo 'First. ';
  echo 'Second.<br>';
}

//alternative syntax
$a = 5;
if ($a == 5):
    echo '<br>The value of $a is <br>';
    echo $a;
  else:
    echo 'Not five';
  endif;
?>
<?php
  for ($i=0; $i <3 ; $i++):
    echo '<h1>Hello</h1>';
  endfor;
?>

<?php
  for ($i=0; $i < 3 ; $i++): ?>
    <h1>Hello</h1>
  <?php endfor;
?>
