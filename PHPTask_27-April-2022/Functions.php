<?php
$choice = 1;

switch ($choice) {
    case (1):

        $num = 35;
        $check = 0;
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $check = 1;
            }
        }
        if ($check == 0) {
            echo $num . ' is a prime number.';
        } else {
            echo $num . ' is a non-prime number.';
        }
        break;


    case (2):

        $str = 'remove';
        echo (strrev($str));

        function rev($s)
        {
            $str2 = ' ';
            for ($i = strlen($s) - 1; $i >= 0; $i--) {
                $str2 = $str2 . $s[$i];
            }
            return $str2;
        }
        echo ('<br>' . rev($str));
        break;


    case (3):

        $str1 = 'remove';
        if (ctype_lower($str1) == 1) {
            echo 'Your string is OK';
        } else {
            echo 'Your string NOT OK';
        }
        break;



    case (4):

        $x = 12;
        $y = 10;

        function swap1($num1, $num2)
        {
            $temp = $num2;
            $num2 = $num1;
            $num1 = $temp;
            return 'y = ' . $num2 . '<br>' . ' x = ' . $num1;
        }
        echo (swap1($x, $y));
        break;



    case (5):

        break;



    case (6):
        
        break;


    case (7):

        break;



    case (8):

        break;



    default:
        echo "choose number between(1-8)";
}
