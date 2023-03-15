<?php
// guess game ([str_shuffle]
$sodoku= 'i am sodoku';
$sodokuGame= str_shuffle(strrev($sodoku));

if($sodokuGame === 'i am sodoku')
{
    echo "you win the game";
}
else {
    echo "you lost in game";
}
echo"<br>";
echo"<br>";


// vaild mail checking
$email = 'sodoku@gmail.com';
if(strpos($email, '@'))
{
   if(strpos($email, '.com'))
   {
    echo "This email Account is vaild";
   }
   else {
    echo "sorry not match email account ,use ().com";
         }
}
else
    {
echo "not find you gmail plz use '@'";
    }
    echo"<br>";
    echo"<br>";
// file extension check 
$fileName = 'index.php.js.txt.html';
$file = explode ('.',$fileName);
$endExtention = end($file);
if ( $endExtention === 'html')
{
    echo "file found";
}
else {
    echo "file not found";
}