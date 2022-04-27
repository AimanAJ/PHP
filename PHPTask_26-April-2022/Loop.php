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
            $sum = 0;
            for ($n = 0; $n <= 30; $n++) {
                $sum += $n;
            }
            echo $sum;
            break;


        case (2):
            echo "***Optional ***";

            break;


        case (3):
            echo "***Optional ***";

            break;



        case (4):
            echo "***Required ***";
            for ($n = 1; $n <= 5; $n++) {
                for ($j = 1; $j <= 5; $j++) {
                    if ($n == $j) {
                        echo $n . " ";
                    } else
                        echo 0 . " ";
                }
                echo '<br>';
            }
            break;



        case (5):
            echo "***Required ***";
            function f($n)
            {
                $num = 1;
                for ($i = 2; $i <= $n; $i++) {
                    $num = $num * $i;
                }
                return $num;
            }

            echo f(9);
            break;



        case (6):
            echo "***Required ***";
            $num = 0;
            $n1 = 0;
            $n2 = 1;
            echo "EX : 6 <br>Fibonacci series for first 12 numbers: ";

            echo $n1 . ' ' . $n2 . ' ';
            while ($num < 10) {
                $n3 = $n2 + $n1;
                echo $n3 . ' ';
                $n1 = $n2;
                $n2 = $n3;
                $num = $num + 1;
            }
            break;


        case (7):
            echo "***Optional ***";

            break;



        case (8):
            echo "***Optional ***";

            break;




        case (9):
            echo "***Required ***";
            $n = 5;
            $count = 1;
            for ($i = $n; $i > 0; $i--) {
                for ($j = $i; $j < $n + 1; $j++) {
                    echo $count . " ";
                    $count++;
                }
                echo "<br>";
            }
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