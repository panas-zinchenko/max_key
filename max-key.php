<?php

$string = readline("enter words by the comma: ");      

$array = explode(',', $string);

$maxLength = null;
$maxValue = null;
$maxLengthKey = null;

foreach ($array as $key => $value) {
    $length = strlen($value);
    if (is_null($maxLength) || $length > $maxLength) {
        $maxLength = $length;
        $maxValue = $value;
        $maxLengthKey = $key;
    }
}

echo ("\n #String \n");
echo ($string . "\n");

echo ("\n #Array \n");
print_r($array);

echo ("\n #Max length \n");
echo ($maxValue . "\n");
echo ("\n #Length \n");
echo ($maxLength . "\n");

echo ("\n #Key max length \n");
echo ($maxLengthKey . "\n");

?>



