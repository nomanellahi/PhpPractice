<?php

// function hello world
function hello(){
  echo 'hello world';
}


// function expecting variable
function helloName($name){
  echo "hello world by $name";
}
$name = 'noman';
helloName($name);

//function expecting two variables for performing addition

function Add ($var1 , $var2){

  $addition = $var1 + $var2;

  echo $addition;
}

$var1 = 2;
$var2 = 3;
Add($var1,$var2);

//function expecting array as a variable and output content of the array

function ArrayTest( $Countries){
  foreach ($Countries as $name) {
    echo " $name  ";
  }
}

$Countries = ['UK', 'Pakistan', 'Sweden'];

ArrayTest($Countries);

