<!DOCTYPE html>
<head>
    <title>Index</title>
</head>

<body>
<?php 
    $areacode = "(208)";
    $contact = '+1' . $areacode . '1234567';
    echo $contact;
    echo "<br/>";
    echo strlen($contact);

$str2 = 'Hello World';
$str3 = strtolower($str2);
$str4 = strtoupper($str2);
echo '<br/>' . $str2;
echo '<br/>' . $str3;
echo '<br/>' . $str4;

$str5 = ' is ';
echo '<br>PHP' . $str5 . 'Fun<br/>';
echo 'PHP' . trim($str5) . 'Fun <br/>';

$str6 = '**Hello**World***';
echo trim($str6,'*').'<br>';

$str7 = 'ABCDEF';
echo substr($str7,2) . '<br>';
echo substr($str7,-3) . '<br>';
echo substr($str7,2,1) . '<br>';

echo strtotime("next Monday") . '<br>';

echo date('F d,Y H:i:s', strtotime("+ 10 hours")) . '<br>';

?>
</body>


</html>