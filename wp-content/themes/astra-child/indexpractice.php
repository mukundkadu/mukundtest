<?php 

  $favoritecolor = "orange";
  $number = 20;

   echo"$favoritecolor";
   echo"<br>";
   echo"$number";
 
   echo"<br>";
   echo"<hr>";

  $name = 'geexu';
  $mystring = "Hello" . "$name " . "world!";
  echo"$mystring";

 echo"<br>";
 echo"<hr>";
  echo "Hello, World!"; // outputs "Hello, World!"

  echo"<br>";
 echo"<hr>";

  function demo() {
	echo "hii,this is World!";
};

demo(); // outputs "Hello, World!"


echo"<br>";
echo"<hr>";

function wpshout_get_greeting() {
	return "Hello, World!";
};

echo wpshout_get_greeting(); // outputs "Hello, World!"

echo"<br>";
echo"<hr>";




?>
 


<h1><?php echo "Hello welcome to this, World!"; ?></h1>



<?php 
// $myvariable=100;

//  if ( $myvariable !== 100 ){
  
//   echo"100 complete";
//  }else{
  
//     echo "not 100";
// }

if ("2"===2){
   echo" valid" ;
}else{
    echo" not valid";
}

?>



<?php

echo"<br>";
echo"<hr>";
echo"<h1>Associative Array</h1>";

$age = array("girish"=>"35", "Baldev"=>"37", "mukund"=>"43");
echo "Peter is " . $age['girish'] . " years old.";
?>


<?php  
echo"<br>";
echo"<hr>";
echo"<h1>while loop</h1>";
$x = 1;
 
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
} 
?>  

<?php  
echo"<br>";
echo"<hr>";
echo"<h1>foreach loop</h1>";

$geexu_trophy = array("black-panter", "white-coller", "three Dimensional", "Unity Warriors "); 

foreach ($geexu_trophy as $teams) {
  echo "$teams <br>";
}
?>  