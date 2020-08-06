

<?php
class Orders {
// Properties
public $greet;
// public $ordersList = array();

// Methods
function __construct($greet) {
  $this->greet = $greet;

}
public function get_greet() {
  return $this->greet;
}
function add_item() {
  for($i=0; $i < count($itemList); $i++){
    $cage[] = $i;
    echo "One item picked: $itemList[$i] <br />";
}
}
}
 ?>
