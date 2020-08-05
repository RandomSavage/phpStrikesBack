<?php
$juice = 'You like the money';
require('./includes/topScripts.php');
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php require('includes/head.php') ?>
  <body>
    <div class="container">
      <?php include('includes/header.php') ?>
      <section>
        <h1>Home</h1>
          <?php echo "<h1>$juice</h1>" ?>
          <div class="img-container">
            <div class="img">

            </div>
          </div>
          <?php
           $orders = array("book"=>"2","tent"=>"3","flashlight"=>"4");
          asort($orders);
          $pickList = array();
          foreach($orders as $item_id=>$item)
             {
               $pickList[] = $item_id;
             echo  "Item Id = " . $item_id . ", Item = " . $item;
             echo "<br>";

             }

             // print_r($pickList);
             $cageContents = array();
             function pickItem() {
               global $cageContents;
               global $pickList;
               global $orders;
               foreach($pickList as $pick_id=>$pick) {
                 $cageContents[] = $pick;
                 echo  "Pick Id = " . $pick_id . ", Pick = " . $pick;
                 echo "<br>";
               }
               echo "<br>";
               $flipKey = array_flip($cageContents);
               arsort($flipKey);
               foreach($flipKey as $cage_id=>$cageItem) {

                 echo  "Cage = " . $cage_id . ", Cage Id = " . $cageItem;
                 echo "<br>";
               }
               // Using array_keys() function
              $key = array_keys($cageContents);

              // Calculate the size of array
              $size = sizeof($key);

              // Using loop to access keys
              for( $i = 0; $i < $size; $i++) {
                 echo "key: ${key[$i]}";
                 echo "<br>";
              }


                 // foreach($cageContents as $key=>$value){
                 //   echo  "Item Id=" . $key . "\n";


                    echo "<br>";

                    }

                 echo "<br>";



           pickItem();


?>
      </section>

    </div>

  </body>
</html>
