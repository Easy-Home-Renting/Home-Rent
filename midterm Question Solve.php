<?php
//Documentation
//phpDoc
// PHP code to check wether a number is prime or Not
/*function to check the number is Prime or Not
* Function pass by value
*@param int $n
*@param int $x
*return bool
 */
function isPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
}
  /* Calling the function with passing a value and assigning the function in to a parameter
  * We will print the number prime or not
  *@param int $a
   */
$a = isPrime(4);
if ($a==0)
  //Here echo command is used to print
echo 'This is not a Prime Number'."\n";
else
echo 'This is a Prime Number'."\n";
/* PHP code to find the max element from an array
*function pass by value
* @param int $array
* @param int $n
* @param int $i
* @param int $max
* return int $max
*/
function maxElement($array)
{
   $n = count($array);
   $max = $array[0];
   for ($i = 1; $i < $n; $i++)
    	if ($max < $array[$i])
           $max = $array[$i];
    return $max;


}
/* calling the function with passing four index value in array
* @param int $array
* print maxElement
* print call_user_func maxElement
*/
$array = array(1, 24, 73, 55, 15);
echo 'Max Element';
echo (maxElement($array));

?>
