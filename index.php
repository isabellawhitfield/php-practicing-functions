<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PHP</title>
  </head>
  <body class="container bg-dark text-light">

    <div class="jumbotron mt-5">
      <h4 class="text-info"> Isabella is learning PHP</h4>
    </div>

    <?php //beginning of php

    // constant
    echo '<h1 class="text-info"> First I will do a constant</h1>';
    define("CONSTANT", "This is me defining the constant", true);
    echo constant;
    echo '<br>';

    //Number function 
    function add($a, $b){
      return $a + $b;
    }

    echo "1 + 2 = ", add (1,2);
    echo "2 + 4 = ", add(2,4);
    echo '<br>';

    function minus($y, $x){
      return $y - $x;
    }

    echo "10 - 1", minus(10,1);
    echo "20 - 10", minus(20,10);
    echo '<br>';

    //String function
    function printTitle($title){
      echo "<h1>$title</h1>";
    }

    printTitle("This is a title using a function");
    printTitle("this is another title using the same function");

    ?>

  </body>
</html>
