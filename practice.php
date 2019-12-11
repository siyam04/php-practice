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

function webcoachbdTutorial(){
    $quality[] = "Informative site";
    $quality[] = "Easy to Understand";
    $quality[] = "easy to navigate";
    return $quality;
}
list($info1,$info2,$info3) = webcoachbdTutorial();

echo "Webcoachbd is $info1,$info2,$info3";

/////////////////////////////////////////* Section 4 */////////////////////////////////////////////////

$x = 'WebcoachBD';
$WebcoachBD = 'Great Site';
echo $$x;

?>




