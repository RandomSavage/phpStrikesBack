<!-- use this inside a component when you want to be strict on type declerations or Type Hinting -->
<!-- declare(strict_types = 1); put it at the top -->

<?php
$person1 = new Person();

try {
  $person1->setName(2);
  echo $person1->getName();
} catch (TypeError $e) {
  echo "Error!: " . $e->getMessage();
}



// this will be inside your class file
public function setName(string $newName) {
  $this->name = $newName;
}

public function getName() {
  return $this->name;
}

// BY using type decleeration, we cAN THROW AN ERROR IF WRONG TYPES ARE GIVEN
//types of types types
-self
-array
-callable
-bool
-float
-int
-string
-iterable
-object
