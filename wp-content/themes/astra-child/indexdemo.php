<?php

$mukund =100; 
?>
<h1 style="text-align:center;font-family:roboto;"><?php echo "mukund"; ?></h1>
<span style="text-align:center; display:block;">Now i know how to define a var and how to use it properly.</span>
<?php
 echo"<hr>"

?>


<!-- var is end here -->

<?php

 $m='mukund';
 $g='girish';

?>

<h1 style="text-align:center;font-family:roboto;"><?php echo $m.'&nbsp;and&nbsp;'.$g.'&nbsp;are friends';?></h1>

<span style="text-align:center; display:block;">so now ti know what is concatination. </span>


<?php
 echo"<hr>"
?>
<!-- concatination is end here -->



<h1 class="name"><?php echo "PHP is very cool langauge";
?></h1>
<span style="text-align:center; display:block;">how to print with echo</span>

<?php
 echo"<hr>"
?>
<!-- echo is end here -->

<?php

  function mukund(){
    echo "Hi this is php functions this is print by echo ";
  };
  
?>

<h1 class="name "><?php mukund(); ?></h1>

<span style="text-align:center; display:block;">how the functions work</span>

<?php
 echo"<hr>"
?>
<!-- first function is end here -->

<?php 
 function mk(){
     return "hi this is second function";

 };


?>
<h1 class="name"><?php echo mk(); ?></h1>

<span style="text-align:center; display:block;">this is the second function return</span>

<!-- secont return function end here -->
<?php
 echo"<hr>"
?>

<h1 class="name"><?php  

$mukund =1;
 while($mukund <= 5) {
     echo "working on php : $mukund <br>";
     $mukund ++;
 }


?></h1>
<span style="text-align:center; display:block;">we have create this by help of loop</span>
<?php
 echo"<hr>"
?>
<!-- loop end here -->
<h1 class="name">
<?php 

$color = array( "red","blue","green","orange");

foreach ($color as $value){
    echo "$value <br>";   
}

?>
</h1>
<!-- practice start here -->

<?php 
$mukund=30;
echo $mukund
?>

<?php
$mk='mukund';
$gb= 'girish';

echo $mk.'and'.$gb.'are friends'

?>


<?php
   function muku(){
     echo "jadbhjy dfjhdjh hcjxshcjc";
   }
   muku();
?>

<?php
 function mukuun(){
     return "this is php";
 }

   echo mukuun();
?>

<?php
 $max= 1;
 while($max <= 10){
     echo " max number is $max <br>";

     $max++;
 }
?>

<?php
 $ron= 10;

 while($ron <= 20){
    echo" $ron is good  <br>";  
     $ron++;
 }

?>

<?php
   $mack = array("mukund","girish","baldev");
   foreach ( $mack as $valuee ){
       echo "$valuee <br>";
   }
 
 ?>


<!-- practice start here -->
