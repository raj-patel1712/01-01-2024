<?php
  // $a1=array('cat','dog','hourse','hourse');
  
 // $a1=array_unique($a1);
// echo count($a1);
  
  //print_r($a1);
  

//$info = array('coffee', 'brown', 'caffeine');
//$drink=$info[0];

//echo $drink;

// Listing all the variables
        //list($drink, $color, $power) = $info;
       // echo "$drink is $color and $power makes it special.\n";

// Listi//ng some of them
       // list($drink,  ,$power) = $info;
       //echo "$drink has $power.\n";

// Or let's skip to only the third one
        //list( , , $power) = $info;
        //echo "I need $power!\n";

     // echo in_array('coffee',$info);
       
//Current Function

$transport = array('foot', 'bike', 'car', 'plane');

//echo $mode = current($transport); // $mode = 'foot';
//echo $mode = next($transport);    // $mode = 'bike';
//$mode = current($transport); // $mode = 'bike';
//$mode = prev($transport);    // $mode = 'foot';
//$mode = end($transport);     // $mode = 'plane';
//$mode = current($transport); // $mode = 'plane';

//each function

    $foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
	//next($foo);
    //$bar = each($foo);
   //print_r($bar);
    
//sort function

$fruits = array("lemon", "orange", "banana", "apple");

//sort($fruits);
//print_r($fruits);
//rsort($fruits);
//print_r($fruits);

//foreach ($fruits as $val) {
  //  echo $val . "<br>";
//}

//array reverse function

  // print_r(array_reverse($fruits));
   
   
$a1=array('apple','bannana','chiku');
$a2=array('orange','graps','lemon');

//print_r(array_merge($a1,$a2));

$no=array(1,2,3,4,5,6,7,8,9,10);
echo array_sum($no);

?>
