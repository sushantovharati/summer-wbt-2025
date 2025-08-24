<?php
echo "1. Write a PHP script to calculate the area and perimeter of a Rectangle, and display the result. Hints: The area of a Rectangle = length × width, perimeter = 2 × (length + width)<br>";

$length = 10;
$width = 5;
$area = $length*$width;
$perimeter = 2*  ($length+$width);
echo "Area: " . $area . "<br>"; 
echo "Perimeter: " . $perimeter . "<br><br>"; 

echo "2. Write a PHP script to calculate the VAT (Value Added Tax) over an amount Hints: VAT = 15% of the amount<br>";

$price = 500;
$vat = $price*15/100;
echo "Price: ".$price."<br>VAT: ".$vat."<br><br>";

echo "3. Write a PHP script to find whether a given number is odd or even Hints: use IF-ELSE<br>
";
$number = 10;
if($number%2==0) echo $number." is even.<br><br>";
else echo $number." is odd.<br><br>";

echo "4. Write a PHP script to find the largest number from three given numbers Hints: use IF-ELSE
<br>";

$num1 = 20;
$num2 = 30;
$num3 = 50;

if($num1>$num2 && $num1>$num3) echo $num1." is the largest number.<br><br>";
else if($num2>$num1 && $num2>$num3) echo $num2." is the largest number.<br><br>";
else echo $num3." is the largest number.<br><br>";

echo "5. Write a PHP script to print all the odd numbers between 10 to 100 Hints: use LOOP & IF-ELSE<br>";

for($i=10; $i<=100; $i++)
{
    if($i%2!=0) echo $i." ";
}
echo "<br><br>";

echo "6. Write a PHP script to search an element from an array Hints: use LOOP, IF-ELSE & ARRAY<br>";
$arr = array(10, 20, 30, 40, 50);
$num = 30;
$found = false;

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] == $num) {
        $found = true;
        break;
    }
}

if ($found) {
    echo "$num found in the array";
} else {
    echo "$num not found in the array";
}

echo "<br><br>";

echo "7. Print the following shapes Hints: use NESTED LOOP<br>";
echo "<br>";
for($i=0; $i<3; $i++){
    for($j=0; $j<=$i; $j++)
    {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";
for($i=3; $i>0; $i--){
    for($j=1; $j<=$i; $j++){
        echo $j." ";
    }
    echo "<br>";
}
echo "<br>";
$ch = 65;

for ($i = 1; $i <= 3; $i++){
    for ($j = 1; $j <= $i; $j++) {
        echo chr($ch++) . " ";
    }
    echo "<br>";
}

?>