<?php

/////////////////////////////////////////* Section 1 */////////////////////////////////////////////////

echo '<hr> #Section 1: Echo & Print <hr>';

echo 'Hello World <br>';
echo ('Hello World <br>');
echo 'Laravel', ' has', ' more', ' jobs <br>';
echo ('Laravel'), (' has'), (' more'), (' jobs <br><br>');

print 'Print and Echo both are Language Constract <br>';

/////////////////////////////////////////* Section 2 */////////////////////////////////////////////////

echo '<hr> #Section 2: Variables <hr>';

$string = "The Addition is: ";
$n1 = 10;
$n2 = 20;
$add = $n1 + $n2;
echo $string . $add . '<br>';
echo var_dump($add) . '<br>';

echo '<br>';

$feedback = "refatju";
$domain = "@yahoo.com";
$feedback .= $domain;
echo $feedback;

echo '<br><br>';

$test = 0;
$test++;
echo $test;

echo '<br><br>';

$test = 0;
$test = $test+1;
echo $test;

echo '<br><br>';

/////////////////////////////////////////* Section 3 */////////////////////////////////////////////////

# 1
$number = 8;

function calculation1()
{
    $number = 10;
    $anotherNumber = 20;
    $addNumber = $number + $anotherNumber;
    echo $addNumber;
}

echo "This \$number variable from outside of calculation() function and its value is $number";
echo "</br>";

calculation1();

# 2
$number = 8;

function calculation2(){
    $GLOBALS["number"];
    $number  = 10;

    $anothernumber = 20;

    $addnumber  = $number+$GLOBALS["number"];

    echo $addnumber;

}

calculation2();

/////////////////////////////////////////* Section 3 */////////////////////////////////////////////////

// (int)

//(bool)

//(float)

//(string)

//(array)

//(object)

//(unset) = Null

$x = 9;
$x = (string) 9;
var_dump($x);

$x = '45';//now $x is string
$x = (int) $x;// type casting to integer
var_dump($x); //now output int(45)
$y = (array) $x;// now casting to array

$x = (int)$_REQUEST['hidden_id'];//cast to integer

/////////////////////////////////////////* Section 4 */////////////////////////////////////////////////

$x = 'WebcoachBD';
$WebcoachBD = 'Great Site';
echo $$x;

/////////////////////////////////////////* Section 5 */////////////////////////////////////////////////

// 15 assigned to $x (assignment operator)
$x = 15;

// combined operator +=
$x += 15; /* this means $x = $x + 15*/
echo $x .'<br/>';

//combined operator .=
$y = 'Webcoachbd';
$y .= ' Tutorials'; /* this means $y = $y . ' Tutorials'*/
echo $y;

/////////////////////////////////////////* Section 6 */////////////////////////////////////////////////

$x = 15;
$y = &$x;

$x = 5;
echo $x.'<br/>';
echo $y;

/////////////////////////////////////////* Section 7 */////////////////////////////////////////////////

$x = 15;
$y = 3;
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);

$x = 15;
$y = 3;
var_dump($x <  $y);
var_dump($x > $y);
var_dump($x <= $y);
var_dump($x >= $y);

var_dump(0 == 'test');

var_dump('1' == '01');

var_dump('100' == '1e2');

//it works like (($x = TRUE) and FALSE). FALSE is ignored here and $x is assigned TRUE
$x = TRUE and FALSE;

//it works like ($y = (TRUE && FALSE)). Expression (TRUE && FALSE) is assigned to $y
$y = TRUE && FALSE;

//it works like (($z = TRUE) or FALSE). $z is assigned to TRUE and FALSE ignored
$z = TRUE or FALSE;

//it works like ($a = (TRUE || FALSE)). $a is assigned to the expression (TRUE || FALSE)
$a = TRUE || FALSE;

/////////////////////////////////////////* Section 8 */////////////////////////////////////////////////

# 1
$d = date("D");
if ($d=="Sat"){
    echo "Have a nice Day";
}

# 2
$x = 9;
$y = 'webcoach';
if(is_int($x) && is_string($y)){// check if $x integer & if $y string
    echo 'Yes both expressions are returned true';
}

# 3
$d=date("D");
if ($d=="Sat") {
    echo "Have a nice Day";
}else{
    echo “Today is not saturday”;
}

# 4
$number = 50; //provide any number
if ($number == 60){
    echo "The number is 60";
}elseif ($number == 45){
    echo "The number is 45";
}elseif($number == 33){
    echo "The number is 33";
}else{
    echo "No number";
}

/////////////////////////////////////////* Section 9 */////////////////////////////////////////////////

# 1
$i=1;
while($i<6){
    echo 'A counter start from '. $i . '<br/>';
    $i++;
}

# 2
for ($i=1; $i<=5; $i++){
    echo "The number is " . $i . "<br />";
}

# 3
for ($i=1; ; $i++){
    if($i > 5){
        break;
    }
    echo "The number is " . $i . "<br />";
}

# 4
function pyramid($hm){
    for($i=1; $i<=$hm; $i++){
        for($j=1; $j<=$i; $j++){
            echo '*';
        }
        echo '<br/>';
    }
}
pyramid(5);

# 5
$city=array("Dhaka", "Chittagong", "Rajshahi", "Sylet","Khulna", "Barishal", "Barishal");

foreach ($city as $value)

{

    echo "$value.<br>";

}

/////////////////////////////////////////* Section 10 */////////////////////////////////////////////////

# 1
$city = array("Dhaka", "Chittagong", "Rajshahi","Sylet", "Khulna", "Barishal");
Print "$city[3]";

# 2
$city = array(2=>"Dhaka", "Chittagong", "Rajshahi", "Sylet", "Khulna", "Barishal", "Barishal");

# 3
$ages = array("adnan"=>32, "rezwan"=>30, "refat"=>34);

# 4
$continents=array("Asia"=>array("Bangladesh", "India","Pakistan"),"Europe"=>array("England", "France"),"Africa"=>array("Kenya","Libya","Somalia"));

# 5
$numeric1 = range(10,15);

//This is similar to

$numeric1 = array(10,11,12,13,14,15);

//array with optional parameter (even array)

$numeric2 = range(10,20,2);

//This is similar to

$numeric2 = array(10,12,14,16,18,20);

//array odd

$numeric3 = range(11,21,2);

//This is similar to

$numeric3 = array(11,13,15,17,19,21);

//letter array

$letter = range("C","K");

//This is similar to

$letter = array("C","D","E","F","G","H","I","J","K");

# 6
//letter array
$letter = range("C","K");

if(is_array($letter)){
    echo "this is an array and its 3rd value is $letter[2]";
}else{
    echo "this is not an array";
}

# 7
print_r($letter);

/////////////////////////////////////////* Section 11 */////////////////////////////////////////////////

//array_unshift()
//array_push()
//array_shift()
//array_pop()
//in_array()
//sort()

# 1
$city = array("Dhaka", "Chittagong", "Rajshahi","Sylet", "Khulna", "Barishal");

array_unshift($city,"Rangpur","Kurigram");

/Now $city will be

$city = array("Rangpur","Kurigram","Dhaka", "Chittagong", "Rajshahi","Sylet", "Khulna", "Barishal");

# 2
$city = array("Dhaka", "Chittagong", "Rajshahi","Sylet", "Khulna", "Barishal");

array_shift($city);

//Now $city will be

$city = array("Chittagong", "Rajshahi","Sylet", "Khulna", "Barishal");

# 3
$newCity = "Chittagong";

$city = array("Dhaka", "Chittagong", "Rajshahi","Sylet", "Khulna", "Barishal");

if(in_array($newCity,$city))

echo "In Bangladesh most of the islamic scholars lives in $newCity";

# 4
$num = array(2,6,8,1,6,8);

sort($num);

/////////////////////////////////////////* Section 12 */////////////////////////////////////////////////

# 1
$cost = 100;
$vat = 0.15;
function calculatePrice(&$cost, $vat)
{
$cost = $cost + ($cost * $vat);
$vat+= 4;
}
calculatePrice($cost, $vat);
printf("Vat is %06.2f%% ", $vat*100);
printf("Cost is: $%07.2f", $cost);

# 2
function aCalculation($firstNumber, $secondNumber){
$total = $firstNumber + $secondNumber;
echo "Result is  $total<br />";
}
$argument1 = 6;
$argument2 =10;
aCalculation($argument1,$argument2);

# 3
function writeName($fname)
{
echo $fname . " Alam.<br />";
}

echo "My name is ";
writeName("Rejoanul ");
echo "My Father's name is ";
writeName("Samad");
echo "My brother's name is ";
writeName("Anjirul");

# 4
function webcoachbdTutorial(){
    $quality[] = "Informative site";
    $quality[] = "Easy to Understand";
    $quality[] = "easy to navigate";
    return $quality;
}
list($info1,$info2,$info3) = webcoachbdTutorial();

echo "Webcoachbd is $info1,$info2,$info3";

/////////////////////////////////////////* Section 13 */////////////////////////////////////////////////

try {
    $con = @mysql_connect("localhost","root","ff");
    if ($con){
        //further code
    }else{
        throw new Exception('Could not connect', 420);
    }
}
catch (Exception $e) {
    echo $e->getCode(). ' : An error occured : ' . $e->getMessage();
}

/////////////////////////////////////////* Section 14 */////////////////////////////////////////////////

$handle = fopen('wfile.txt', 'w');
$content = 'Hello this is a test string writing to file "wfile.txt"';
// Write $content to opened file.
if (fwrite($handle, $content) === FALSE) {
    echo 'Cannot write to file';
    return;
} else {
    echo 'written';
}

# 3
$handle = fopen('wfile.txt', 'w');
fclose($handle);

# 4
$handle = fopen('wfile.txt', 'r');
echo fgets($handle);

# 5
if(file_exists('/./xampp/php/php.ini')){
    echo 'yes there is file named php.ini';
}else{
    echo 'no such file there';
}

# 6
$robot = file_get_contents('http://www.webcoachbd.com/robots.txt')
echo $robot;

# 7
echo readfile('http://www.webcoachbd.com/robots.txt')

# 8
$handle = fopen('wfile.txt','r');

while(!feof($handle)){
    echo fgets($handle).'<br/>';
}

# 9
$lines = file('wfile.txt');
//see how is array now
  echo '<pre>';
  print_r($lines);
// array manipulation
foreach($lines as $line){
    echo $line.'<br/>';
}

# 10
$lines = file('wfile.txt');
//see how is array now
  echo '<pre>';
  print_r($lines);
// array manipulation
foreach($lines as $line){
    echo $line.'<br/>';
}

?>




