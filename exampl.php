<?php
//echo 'Hello world';
$someNumber = 123; //integer
$someFloat = 3.14; // cipar ar komatu , ko raksta ar punktu-float
$someText = "tekst"; //string
$someLongText = "koavklva 
vkkfkfkffklfkfksl 
lsfmsc";
file_put_contents('test.txt',someLongText
$someTrue = true; //boolean
$someNothing = null; //null
$someArray = ["amfaf", 
'afa',
true, 
2334
]; //array
echo $someArray [2];
$someAssociativeArray = [
    5=> 'foo',
    6 => 'bar',
    'baz'=> 'biz',
]; //associative array
$person = [
'name' => 'Jon',
"lastname" => 'Doe',
'age' => '22'
]
echo $person['age'];

$someMultiDimenssionalArray[1] ['lastName'];
$someMultiDimenssionalArray[] = [
    'name' => "billy",
    'lastName' => 'Doe',
    'age' => '21'
]
echo $someMultiDimenssionalArray[1];


//echo 'foo', 'bar', '<br>';
//echo 1+1 . '<br>'; // iznākums 2
/* 
$num += 2;
$num = 1;
$num = 2;
if ($num1 ==1 || ){
elseif{
    if (1==2)
}
}

for ($i=0; $i < 10; $i++) {
    echo $i;
}
 */

for ($i = 0; $i < 30; $i++){
    $out ="";
 if ($i % 2 === 0 ){
  $out='fizz';
 }
 if ($i % 3 == 0){
   $out .= "bazz";
  }
  if ( !$out ){
    $out = $i;
  }
 echo $out . '<br>';

 $foo = 'RTU amazing';
 echo str_replace ('RTU', 'RCS', $foo);

 $string  ='absdefg'
 $array = str_split($string)
 $backToString = implode('', $array);

 echo 123 . '';

 echo intval('123aa1');
 echo floatval ("3.14aa1");
function addTwoNumbers(int $num1, int $num2 = 10): int
{
    return $num1 + $num2;
}
echo '<br><br><br>';
echo addTwoNumbers(1, 2);



