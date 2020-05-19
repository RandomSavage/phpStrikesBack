<!-- Here we will add two snippets from each lesson. One of the code within php tags
at the top of the .php file
and the other snippet will be of the body tag in the html with whatever php code -->

<!-- Variables: Declerations and using them in html. Concatenation techniques -->
<?php $name = 'Random'; ?>

<body>
    <?php echo "<h1>What {$name}</h1>" ?>
</body>

<!-- Alternative concatenation -->
<?php echo "<h1>My Name is" . $name . "</h1>" ?>

<!-- Reminder If you want to run php from command line instead of mamp/wamp/bamp -->
php -S localhost:8888

<!-- var_dump() function returns the data type and value -->
<?php
echo var_dump($x);
Var_dump($x);
?>
<!-- comments: -->
 // , #  for single line
 or
/* */ for multiline

<!-- Data Types: -->
strings: <?php $x = "string";  ?>
integer: <?php $x = 5985; ?>
float: number with a decimal point or a number in exponential form
boolean: <?php  $x = true; or $x = false; ?>
array: way to hold multiple data values example:  <?php $edm = array["speed garage", "funky breaks", "Progressive trance"]; ?>
object:
<?php
    class Vitamin {
      function Vitamin() {
        $this->brand = "Flinstones";
      }
    }
    //create an object
    $gummies = new Vitamin();

    //show properties of an Object
    echo $gummies->brand;
?>
null: data type that has no value assigned to it <?php $x = null; ?> By setting a variable to null you can also empty the contents of the Variables
resource: definition to come
