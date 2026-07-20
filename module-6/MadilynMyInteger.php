<!DOCTYPE html>
<html>
<head>
    <title>MyInteger Class</title>
</head>
<body>

<?php

/*
 * Madilyn Carpenter
 * Date: July 19, 2026
 * Assignment: Module 6.2 Programming Assignment
 * Purpose: This program creates a PHP class that tests integer values for even, odd, and prime numbers.
 */

class MadilynMyInteger
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    // Check if even
    public function isEven($number)
    {
        return $number % 2 == 0;
    }

    // Check if odd
    public function isOdd($number)
    {
        return $number % 2 != 0;
    }

    // Check if prime
    public function isPrime()
    {
        if ($this->number < 2) {
            return false;
        }

        for ($i = 2; $i <= sqrt($this->number); $i++) {
            if ($this->number % $i == 0) {
                return false;
            }
        }

        return true;
    }
}

// Create two instances
$num1 = new MadilynMyInteger(10);
$num2 = new MadilynMyInteger(17);

echo "<h2>Testing Object 1</h2>";
echo "Number: " . $num1->getNumber() . "<br>";
echo "Is Even? " . ($num1->isEven($num1->getNumber()) ? "Yes" : "No") . "<br>";
echo "Is Odd? " . ($num1->isOdd($num1->getNumber()) ? "Yes" : "No") . "<br>";
echo "Is Prime? " . ($num1->isPrime() ? "Yes" : "No") . "<br><br>";

echo "<h2>Testing Object 2</h2>";
echo "Number: " . $num2->getNumber() . "<br>";
echo "Is Even? " . ($num2->isEven($num2->getNumber()) ? "Yes" : "No") . "<br>";
echo "Is Odd? " . ($num2->isOdd($num2->getNumber()) ? "Yes" : "No") . "<br>";
echo "Is Prime? " . ($num2->isPrime() ? "Yes" : "No") . "<br><br>";

// Test the setter
$num1->setNumber(23);

echo "<h2>After Using Setter on Object 1</h2>";
echo "New Number: " . $num1->getNumber() . "<br>";
echo "Is Prime? " . ($num1->isPrime() ? "Yes" : "No") . "<br>";

?>

</body>
</html>