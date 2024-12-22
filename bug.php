function foo($a, $b) {
  if ($a === $b) {
    return true;
  } else {
    return false;
  }
}

//This function will return unexpected results when comparing floating point numbers
//due to how floating point numbers are stored in memory.
$result = foo(0.1 + 0.2, 0.3);
var_dump($result); //Output: bool(false)