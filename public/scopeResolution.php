<?php
// Scope Resolution Operator

//Here is the first class example!
class FirstClass {
  //properties
  //When creating constants you must use all capital letters
  const EXAMPLE = "You can't change this!";

  //Methods
  public static function test() {
    $testing = "This is a test!";
    return $testing;
  }
}

//$a = FirstClass::EXAMPLE or $a = FirstClass::test();
//echo $a;


//Here is the Second Class EXAMPLE
class SecondClass extends FirstClass {
  //Properties
  public static $staticProperty = "A Static Property!";

  //Methods
  public static function anotherTest() {
    echo parent::Example;
    echo self::$staticProperty;
  }
}
//$b = SecondClass::anotherTest();
//echo $b;
?>
