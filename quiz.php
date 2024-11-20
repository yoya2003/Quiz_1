<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz 1</title>
</head>
<body>
<table border="1" cellspacing="0" cellpadding="0">
<?php 
// 1) Write a PHP script using a nested for loop that creates a chessboard.
for ($row=0; $row < 8 ; $row++) { 
    echo"<tr>";
    for ($col=0; $col < 8 ; $col++) { 
        if (($col + $row) %2 ==0){
            echo"<td style='width: 50px; height: 50px; background-color: black;'></td>";
        }else {
            echo"<td style='width: 50px; height: 50px; background-color: white;'></td>";
        }
    }
}
echo"<hr>";
?>
</table>
</body>
</html>

<?php
// 2.2 write a PHP program to print this shape (using nested loop)
for ($i=0; $i <= 5 ; $i++) { 
    for ($j=0; $j <= $i ; $j++) { 
        echo"*";
    }
    echo"<br>";
}
for ($i=5; $i <= 5 ; $i--) { 
    for ($j=0; $j <= $i ; $j++) { 
        echo"*";
    }
    echo"<br>";
}
echo"<hr>";

// 2.3 write a PHP program to print this shape (using nested loop)
for ($i=1; $i <= 5 ; $i++) {
    if ($i %2 != 0) {
    for ($j=1; $j <= $i ; $j++) {
            echo"*";
    }
    echo"<br>";
}
}
for ($i=3; $i <= 3 ; $i--) {
    if ($i %2 != 0) {
    for ($j=1; $j <= $i ; $j++) {
            echo"*";
    }
    echo"<br>";
}
}
echo"<hr>";
//3- $array = [2,4,3,1,6,7,5,8,0,9] 
// Write a PHP program to sort this array to ASC and also sort it as DESC 
// (without using built in functions)
$array = [2,4,3,1,6,7,5,8,0,9];
$n=count($array);
for ($i = 0; $i < $n ; $i++) {
    for ($j = $i + 1; $j < $n ; $j++) {
        if ($array[$i] > $array[$j]) {
        }
    }
}
foreach ($array as $key => $value) {
    echo" $key <br>";
}

echo "<hr>";
for ($i = 0; $i < $n; $i++) {
    for ($j = $i + 1; $j < $n; $j++) {
        if ($array[$i] < $array[$j]) {
            // Swap values
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
}
echo "Descending: " . implode(", ", $array) . "<br>";
echo "<hr>";

//4- write a program to calculate the avg of numbers array.
$array = [2,4,3,1,6,7,5,8,0,9] ;
$sum = 0;
$count=count($array);
$n= count($array);
foreach ($array as $arr) {
    $sum += $arr ;
}
$avg = $sum / $n;
echo "The Average of this array = $avg";
echo "<hr>";


// 5- write a program to filter even numbers from an array, delete all even numbers.
$arr=[1,2,3,4,5,6,7,8,9,10];
foreach ($arr as $key => $value) {
    if ($value % 2 == 0 ) {
        unset($arr[$key]);
        echo "$key <br>";
    }
}
echo"<hr>";

// 6- write a program to find the max number of numbers group [10,30,20], using if.
$num=[10,30,20];
if ($num[0]>$num[1] & $num[0]>$num[2]) {
    echo $num[0]. " is the max number";
}elseif($num[1]>$num[0] & $num[1]>$num[2]){
    echo $num[1]. " is the max number";
}else{
    echo $num[2]. "is the max number";
}
echo"<hr>";

// 7-Write a PHP script to increment date by one month
// Sample date : 2012-12-21
// Expected Output : 2013-01-21
$inputDate = "2012-12-21";
list($year, $month, $day) = explode("-", $inputDate);
$year = (int)$year;
$month = (int)$month;
$day = (int)$day;

if ($month > 12) {
    $month = 1;
    $year++;
}

$month++; 

$daysInMonth = 31; 
if ($month == 2) { 
    if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
        $daysInMonth = 29; 
    } else {
        $daysInMonth = 28; 
    }
} else if ($month == 4 || $month == 6 || $month == 9 || $month == 11) {
    $daysInMonth = 30; 
}


if ($day > $daysInMonth) {
    $day = $daysInMonth;
}

$newDate = ($year . '-' . $month. '-' .$day);

echo "Original Date: $inputDate<br>";
echo "Updated Date: $newDate";

// 8- Write a PHP script to get the number of the month before the current month.
$currentYear = 2024;
$currentMonth = 1; 
$previousMonth = $currentMonth;
$previousYear = $currentYear;
for ($m=0; $m <1 ; $m++) { 
    $previousMonth-- ;
    if ($currentMonth == 1) {
        $previousMonth = 12;
        $previousYear-- ;
    }
}
echo "$currentMonth is the current month <br> $previousMonth is the previous Month";
echo "<hr>";

// 9-Write a PHP script that checks if a string contains another string.(using regular expression).
$mainText="Hello World";
$txt="Worlddd";
$pattern="/$txt/";
if (preg_match($pattern, $mainText)) {
    echo"$txt is found in the main text : $mainText";
}else {
    echo"$txt is NOT found in the main text";
}
echo "<hr>";
// 10- Write a function to check whether a number is prime or not.
// Note: A prime number (or a prime) is a natural number greater than 1 that has no 
// positive divisors other than 1 and itself.
function prime($number){
    if ($number <= 1) {
        echo "Invalid";
    }
    for ($i = 2; $i < $number ; $i++) { 
            if ($number % $i == 0) {
                return "$number is NOT a prime number";
            }else {
                return "$number is a prime number";
            }
        }
    }
echo prime(5);


echo"<hr>";
// 11- Use a cookie to change the default website background color. choose the 
// new color from a dropdown menu of colors
// Check if the form is submitted and set the cookie
if (isset($_POST['color'])) {
    $color = $_POST['color'];
    // Set the color in a cookie for 30 days
    setcookie('bgColor', $color, time() + (30 * 24 * 60 * 60), "/");
} else {
    // If no color is selected, check if a cookie is already set
    $color = isset($_COOKIE['bgColor']) ? $_COOKIE['bgColor'] : 'white'; // Default to white
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
    <style>
        body {
            background-color: <?php echo $color; ?>;
            transition: background-color 0.5s ease; /* Smooth transition */
        }
    </style>
</head>
<body>

    <h2>Choose a Background Color</h2>

    <!-- Dropdown menu to select a color -->
    <form method="POST">
        <select name="color">
            <option value="white" <?php if($color == 'white') echo 'selected'; ?>>White</option>
            <option value="lightblue" <?php if($color == 'lightblue') echo 'selected'; ?>>Light Blue</option>
            <option value="lightgreen" <?php if($color == 'lightgreen') echo 'selected'; ?>>Light Green</option>
            <option value="lightyellow" <?php if($color == 'lightyellow') echo 'selected'; ?>>Light Yellow</option>
            <option value="lightcoral" <?php if($color == 'lightcoral') echo 'selected'; ?>>Light Coral</option>
        </select>
        <button type="submit">Change Color</button>
    </form>

</body>
</html>