<?php
echo "1. Write a PHP script to calculate the simple interest. Hints: Simple Interest = (Principal × Rate × Time) / 100<br>";

$principal = 50000;
$rate = 0.10;
$time = 5;
$interest = $principal*$rate*$time/100;
echo "Principal: $principal <br> Interest: $interest";
echo "<br><br>";


echo "2. Write a PHP script to swap two numbers without using a third variable.<br>";

$num1 = 10;
$num2 = 20;
echo "Before swap number1 = $num1 and number2 = $num2 <br>";
$num1 = $num1 + $num2;
$num2 = $num1 - $num2;
$num1 = $num1 - $num2;
echo "After swap number1 = $num1 and number2 = $num2 <br>";
echo "<br><br>";


echo "3. Write a PHP script to check whether a given year is a leap year or not.Hints: A year is a leap year if it is divisible by 4, but not divisible by 100, unless it is also divisible by 400.<br>";

$year = 2024;
if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a Leap Year";
} else {
    echo "$year is NOT a Leap Year";
}
echo "<br><br>";


echo "4. Write a PHP script to find the factorial of a number. Hints: Use loop (for/while).<br>";

$num = 4;
$fact=1;
echo "Number: $num <br>";
for($i=1; $i<=$num; $i++){
    $fact = $i*$fact;
}
echo "Factorial of $num = $fact";
echo "<br><br>";


echo "5. Write a PHP script to print all the prime numbers between 1 to 50 <br>";

echo "Prime numbers between 1 and 50 are: <br>";

for ($num = 2; $num <= 50; $num++) {
    $count = 0;

    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $count++;
        }
    }

    if ($count == 2) {
        echo "$num ";
    }
}
echo "<br><br>";

echo "6. Write a PHP script to print the following patterns using nested loops:<br>
# Pattern 1 <br>
***** <br>
**** <br>
*** <br>
** <br>
* <br>
# Pattern 2 <br>
1 <br>
1 2 <br>
1 2 3 <br>
1 2 3 4 <br>
# Pattern 3 <br>
A <br>
B B <br>
C C C <br>
D D D D <br><br>";

echo "Answer: <br> Pattern 1 <br>";
for($i=5; $i>0; $i--){
    for($j=$i; $j>0; $j--){
        echo "* ";
    }echo "<br>";
}
echo "<br> Pattern 2 <br>";
for($i=1; $i<5; $i++){
    for($j=1; $j<=$i; $j++){
        echo "$j ";
    }echo "<br>";
}
echo "<br>Pattern 3 <br>";
$n=65;
for($i=1; $i<5; $i++){
    for($j=1; $j<=$i; $j++){
        echo chr("$n ");
    }
    echo "<br>";
    $n++;
}
?>