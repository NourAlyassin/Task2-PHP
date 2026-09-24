<?php
// 1.Write a PHP script that records 3 digits and prints the total of the first two digits multiplied by the third digit.

$first = 1;
$second = 2;
$third = 3;

$total = ($first + $second) * $third;
echo "The result is: " . $total . "";

//-----------------------------------------
// 2.A program that calculates the size of a box whose length and width are fixed with a value of 5 and 10 and the height is variable (size = length x width x height)

$length = 5;
$width = 10;

echo "Enter the height of the box: ";
$height = (float)trim(fgets(STDIN));

$size = $length * $width * $height;
echo "The size of the box is: " . $size . "";

//-----------------------------------------
// 3.Write a PHP script that takes a number integer representing the hours and converts it to seconds.

echo "Enter number of hours: ";
$hours = (int)trim(fgets(STDIN));

$seconds = $hours * 60 * 60;

echo $hours . " hour(s) = " . $seconds . " seconds" . "";

//-----------------------------------------
// 4.Write a PHP script that calculates the Area of a Triangle store the base and height Print the area.

echo "Enter the base of the triangle: ";
$base = (float)trim(fgets(STDIN));

echo "Enter the height of the triangle: ";
$height = (float)trim(fgets(STDIN));

$area = 0.5 * $base * $height;

echo "The area of the triangle is: " . $area . "";

//-----------------------------------------
// 5.Write a PHP script that takes the age in years and prints the age in days.

echo "Enter your age in years: ";
$years = (int)trim(fgets(STDIN));

$days = $years * 365;

echo "Your age in days is: " . $days . " days" . "";

//-----------------------------------------
// 6.Get the length of this sentence "EraaSoft Learn by practice"

$sentence = "EraaSoft Learn by practice";
$length = strlen($sentence);
echo "The length of the sentence is: " . $length . " characters" . "";

//-----------------------------------------
// 7.Get the length of this sentence without spaces "EraaSoft Learn by practice"

$sentence = "EraaSoft Learn by practice";

$noSpaces = str_replace(' ', '', $sentence);

$length = strlen($noSpaces);

echo "The length of the sentence without spaces is: " . $length . " characters" . "";

//-----------------------------------------
// 8.Get the number of words in this sentence.

$sentence = "EraaSoft Learn by practice";

$wordCount = str_word_count($sentence);

echo "The number of words in the sentence is: " . $wordCount . "";

//-----------------------------------------
// 9.Check if this word (by) exists in the string or not.

$sentence = "EraaSoft Learn by practice";
$word = "by";

if (strpos($sentence, $word) !== false) {
    echo "The word '$word' exists in the sentence." . "";
} else {
    echo "The word '$word' does not exist in the sentence." . "";
}

//-----------------------------------------
// 10.Get the word (EraaSoft) from the string and print it.

$sentence = "EraaSoft Learn by practice";

$words = explode(" ", $sentence);

$firstWord = $words[0];

echo "The first word is: " . $firstWord . "";

//-----------------------------------------
// 11.Remove the word (by) from the string and print the string with and without (by)

$sentence = "EraaSoft Learn by practice";

$sentenceWithoutBy = str_replace("by", "", $sentence);

echo "Original sentence: " . $sentence . "";
echo "Sentence without 'by': " . trim(preg_replace('/\s+/', ' ', $sentenceWithoutBy)) . "";

//-----------------------------------------
// 12.Make a new variable called (Full_string) that concatenate string_one and string_two

$string_one = "Eraa";
$string_two = "Soft";

$Full_string = $string_one . $string_two;

if ($Full_string == "EraaSoft") {
    echo "The strings are equal <br>";
    echo $Full_string;
} else {
    echo "The strings are NOT equal.";
}

//-------------------------------------------
// 13.Compare the full_string and this string (EraaSoft).

$string = "EraaSoft Learn by practice";

$parts = explode(" ", $string);
print_r($parts);

//-------------------------------------------
// 14.Write a PHP script to split the following string.
// Sample string: 'ErraSoft' 
// Expected Output: Er/ra/So/ft

$string = "ErraSoft";
$chunks = str_split($string, 2);
echo implode("/", $chunks);

//--------------------------------------------
//15.Write a PHP script that stores the number as a variable and checks if it is odd or even.

$number = 7;

if ($number % 2 == 0) {
    echo "$number is Even.";
} else {
    echo "$number is Odd.";
}

//---------------------------------------------
//16.Write a PHP script that stores the string as a variable and checks if the length is odd or even.


$string = "EraaSoft";

if (strlen($string) % 2 == 0) {
    echo "The length is Even.";
} else {
    echo "The length is Odd.";
}

//--------------------------------------------
//17.Check from this string o If the string has “gain” Print ( success word )
// o If the string has ( peen ) Print ( success word )  Else ( wrong word )

$description = "no pain , no gain ";

if (strpos($description, "gain") !== false) {
    echo "success word";
} elseif (strpos($description, "peen") !== false) {
    echo "success word";
} else {
    echo "wrong word";
}

//----------------------------------------------
//18.A Boolean is a data type that has only two values true or false.
// These values often correspond to 1 (true) or 0 (false). When a 1 or a 0 is used, it's called an int Boolean.
// Write a PHP script that stores an int Boolean and outputs its opposite  (1 becomes 0 and 0 becomes 1).

$bool = 1;

$opposite = 1 - $bool;

echo "Opposite: $opposite";

//-----------------------------------------------
//19.Write a PHP script that stores a word and determines Is the Word is Singular or Plural? (A plural word is one that ends in "s".)

$word = "books";

if (substr($word, -1) == "s") {
    echo "$word is Plural.";
} else {
    echo "$word is Singular.";
}

//----------------------------------------------
//20.Make a calculator with these operations using if and else if Submission 
// o Subtraction 
// o Multiplication 
// o Division 
// o Power 
// o Modulus

$num1 = 10;
$num2 = 3;
$op   = "power";   // submission | subtraction | multiplication | division | power | modulus

if ($op == "submission") {
    echo $num1 + $num2;
} elseif ($op == "subtraction") {
    echo $num1 - $num2;
} elseif ($op == "multiplication") {
    echo $num1 * $num2;
} elseif ($op == "division") {
    if ($num2 == 0) {
        echo "Cannot divide by zero.";
    } else {
        echo $num1 / $num2;
    }
} elseif ($op == "power") {
    echo pow($num1, $num2);
} elseif ($op == "modulus") {
    echo $num1 % $num2;
} else {
    echo "Invalid operation.";
}


?>