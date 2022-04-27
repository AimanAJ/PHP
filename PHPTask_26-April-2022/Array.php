<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
</head>

<body>

    <?php
    $choice = 1;

    switch ($choice) {
        case (1):
            echo "***Required ***";
            $colors = array('white', 'green', 'red');
            echo "<ul>";
            foreach ($colors as $value) {
                echo "<li> $value </li>";
            }
            echo "</ul>";
            break;


        case (2):
            echo "***Required ***";
            $cities = array("Italy" => "Rome", "Luxembourg" => "Luxembourg", "Belgium" => "Brussels", "Denmark" => "Copenhagen", "Finland" => "Helsinki", "France" => "Paris", "Slovakia" => "Bratislava", "Slovenia" => "Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland" => "Dublin", "Netherlands" => "Amsterdam", "Portugal" => "Lisbon", "Spain" => "Madrid");

            asort($cities);
            foreach ($cities as $key => $value) {
                echo "The capital of $key is $value <br>";
            }
            break;


        case (3):
            echo "***Required ***";
            $color = array(4 => 'white', 6 => 'green', 11 => 'red');
            echo $color["4"] . "<br>";
            break;



        case (4):
            echo "***Required ***";
            $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
            krsort($fruits);
            foreach ($fruits as $key => $value) {
                echo $key . "= " . $value . "<br>";
            }
            break;



        case (5):
            echo "***Optional ***";

            break;



        case (6):
            echo "***Optional ***";

            break;


        case (7):
            echo "***Optional ***";

            break;



        case (8):
            echo "***Required ***";
            $words = array("abcd", "abc", "de", "hjjj", "g", "wer");

            $lengths = array_map('strlen', $words);

            echo "The shortest array length is " . min($lengths) . ". The longest array length is " . max($lengths) . ".";
            break;




        case (9):
            echo "***Optional ***";

            break;


        case (10):
            echo "***Optional ***";

            break;




        default:
            echo "choose number between(1-10)";
    }
    ?>


</body>

</html>