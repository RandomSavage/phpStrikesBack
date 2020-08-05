

<?php
class Cage {
// Properties
public $cageId;
public $itemList = array();

// Methods
function __construct($name, $itemList) {
  $this->cageId = $cageId;
  $this->itemList = $itemList;
}
function get_name() {
  return $this->name;
}
function add_item() {
  for($i=0; $i < count($itemList); $i++){
    $cage[] = $i;
    echo "One item picked: $itemList[$i] <br />";
}
}
}
 ?>

<?php
 $orders = array("1"=>"vaccum","2"=>"basketball","3"=>"book");
asort($orders);

foreach($orders as $item_id=>$item)
   {
   echo  "Item Id=" . $item_id . ", Item=" . $item;
   echo "<br>";
   }
?>
