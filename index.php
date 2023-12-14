<?php

//*array
echo "There are 3 types of array like:<br>";

// 1.Indexed arrays

echo "1.Indexed arrays<br>";
echo "2.Associative arrays<br>";
echo "3.Multidimensional arrays<br><br>";

echo "1.Indexed arrays:<br>";
$name = ['Fatema' , 23];

// adding new data
$name [] = 'new data1';
$name [] = 'new data2';

echo "<pre>";
print_r($name);
echo "<pre><br><br>";

// 2.Associative arrays

echo "2.Associative arrays:<br>";

$name = [ 'name' => 'Fatema', 
          'age' => '23', 
          'hobby' => 'Coding'];
// adding new data
$name ['new1'] = 'new data1';
$name ['new2'] = 'new data2';          

echo "<pre>";
print_r($name);
echo "<pre>";


// 3.Multidimensional arrays

echo "3.Multidimensional arrays:<br>";

$students = [
            ['Roll' => '1',
             'name' => 'Fatema', 
             'age' => '23', 
             'hobby' => 'Coding<br>',
            'Education' => [
                'SSC:'=> '4.72',
                'HSC:' => '4.25'
             ]],

            ['Roll' => '2',
             'name' => 'Sadia', 
             'age' => '20', 
             'hobby' => 'Coding',
             'Education' => [
                'SSC:'=> '4.02',
                'HSC:' => '4.65'
             ]],


            ['Roll' => '3',
             'name' => 'Tania', 
             'age' => '22', 
             'hobby' => 'Coding',
             'Education' => [
                'SSC:'=> '4.78',
                'HSC:' => '5.00'
             ]], 
             ];
echo "<pre>";
print_r($students);
echo "<pre> <br><br>";

echo "<pre>";
print_r($students [1]['Education']['SSC:']);
echo "<pre>";


// String Functions

echo "String Functions<br><br>";

echo "1.strtoupper:";
$name ='fatema<br>';
echo strtoupper($name);

echo "2.strtolower:";
$email = "mstfatema@gmail.com<br>";
echo strtolower($email);

echo "3.strrev:<br>";
$namer = "mstfatema";
echo strrev($namer);

echo "<br>4.strrev:<br>";
$num = "12121";

function numcheker($num){
   if($num == strrev($num)){
      echo "Yes<br>";
   }else {
      echo "No<br>";
   }
}
echo numcheker(12121);

// turnary operator

$num2 = "505050";

function numcheker2($num2){
   echo $num2 == strrev($num2) ? "Yes" : "No";
}
numcheker2(3435);

echo "<br>4.strpos:<br>";
$wrdcheck = "I am from Natore";

if (strpos($wrdcheck, "Natore") != false){
   echo "Right Place<br>";
}else{ echo "In-correct place<br>";}

echo "5.stripos:<br>";
$wrdcheck2 = "I am from Natore";

if (stripos($wrdcheck2, "natore") != false){
   echo "Right Place<br>";
}else{ echo "In-correct place<br>";}

echo "6.substr:<br>";

$msg = "Enjoy your life with Coding";

function msgcheck($msg){
   if(substr($msg,0,10) != true){
      echo "life with Coding";
   }else{
      echo "life";
   }
}
echo msgcheck(0,16);
//problem numbering

echo "<br>6.str_replace:<br>";

$post = "<br>Hey I am front end developer.My service is very bad.I can unproffesionally handle your project.<br>";
$badcomments = ['bad','unproffesionally'];
$goodcomments = ['good','proffesionally'];
echo str_replace($badcomments,$goodcomments,$post);

echo "<br>7.trim:<br>";
$password = "  1234  ";
var_dump (trim($password));

echo "<br>8.PASSWORD_BCRYPT:<br>";
$password2 = "98706";
echo password_hash($password2, PASSWORD_BCRYPT);

echo "<br>9.strlen:<br>";
$length = "01739608433";
echo strlen($length) == 11 ? "Valid number" : "Invalid number";





?>