function foo($a, $b, $epsilon = 0.0001) {
  return abs($a - $b) < $epsilon;
}

//This function uses an epsilon value to compare floating point numbers more accurately
$result = foo(0.1 + 0.2, 0.3);
var_dump($result); //Output: bool(true)

//Example with a larger epsilon value
$result = foo(1.0001, 1.0000, 0.001); //Allowing for a difference of 0.001
var_dump($result); //Output: bool(true) 

//Example with a smaller epsilon value
$result = foo(1.0001, 1.0000, 0.00001); //Allowing for a difference of 0.00001
var_dump($result); //Output: bool(false)