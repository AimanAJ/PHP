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

switch($choice){
case(1):
    $year = 2013;
    if($year % 4 ==0 && $year%100!=0 || $year %400==0) {
        echo "Leap yaer!";
    }
    else {
        echo "Not leap year!";
    }
    break;


 case(2):
    $tempreture = 10;
    if($tempreture >20) {
        echo "summer";
    }
    else {
        echo "winter";
    } 
     break;

     
 case(3):
    $num1=2;
    $num2=2;
    if($num1==$num2){
        echo ($num1 +$num2)*3;
    }
    else {
        echo $num1+$num2;
    } 
   break;

  

case(4):
    $num1=15;
    $num2=1;
    if($num1+$num2==30){
        echo 30;
    }
    else {
        echo var_dump(false);
    }
    break;



case(5):
    $num1=20;
    if($num1 %3==0){
        echo var_dump(true);
    }
    else {
        echo var_dump(false);
    } 
     break;



 case(6):
    $number=20;
    echo ($number>=20 && $number<=20)?var_dump(true):var_dump(false); 
     break;


case(7):
    $n1=1;
    $n2=5;
    $n3=9;
if($n1>$n2 && $n1>$n3)
        echo 1;
   else if($n2>$n1 && $n2>$n3)
        echo 5;
   else
        echo 9;
     break;



 case(8):
   $units=500;

   if($units>250) {
       echo $units*7.5;
   }

   if($units>200) {
    echo $units*6.2;
    }

    if($units>100) {
        echo $units*5;
    }

    if($units>0) {
    echo $units*2.5; 
    }

    else {
        echo 'Wrong Entry!';
    }
      break;




 case(9):
    $age = 20;
    if($age>=18) {
        echo 'eligible to vote';
    }
    else {
        echo'no eligible to vote';
    }
      break;


 case(10):
    $numb=-50;
if($numb==0)
  echo "zero";
  else if($numb>=0)
  echo "positive";
  else
  echo "negative";
     break;



 case(11):
    $num1=20;
$num2=10;
$operator='-';
$result='';

if(is_numeric($num1) && is_numeric($num2))
   {

     switch($operator)
     {
        case '+':
            $result=$num1+$num2;
            break;
        case '-':
            $result=$num1-$num2;
            break;
        case '/':
            $result=$num1/$num2; 
            break;
        case '-':
            $result=$num1*$num2;   
            break;
     }
       echo $result;
   }
     break;




case(12):
$gr1=50;
$gr2=60;
$gr3=70;
$gr4=80;
$gr5=90;

$avg=$gr1+$gr2+$gr3+$gr4+$gr5/5;
if($avg<60)
  echo 'F';
  else if ($avg<70)
  echo 'D';
  else if($avg<80)
  echo 'C';
  else if($avg<90)
  echo 'B';
  else
  echo 'A';
    break;


default:
    echo "choose number between(1-12)";

}
?>
   

</body>
</html>