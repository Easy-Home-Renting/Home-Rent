<!-- Check wether a number is prime or not
int $num
int $x
return Boolean -->
<?php
class math{
 function IsPrime($n) {
     for($x=2; $x<$n; $x++) {
       if($n % $x ==0) 
       { 
         return false;
        }
     } 
     return true;
 }
 $a = IsPrime(13);
 echo $a ? 'This is a Prime Number.' :  'This is not a Prime Number.';

// Calling the function with passing five index value in array
//int $n
//int $array
//int $i
//int $max
//return max element

function maxElement($array)
{ $array = array(12, 50, 36);
   $n = count($array);
   $max = $array[0];
   
   for ($i = 1; $i < $n; $i++)
      if ($max < $array[$i])
           $max = $array[$i];


  echo "Max Element:$max";
}
}

//int obj
//obj assigning function
//pass prime number
//pass max element
$obj = new math();
$obj->primeNumber(4);
$obj->maxElement(0);

?>
