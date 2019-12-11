<?php



# 2
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

# 11






?>
