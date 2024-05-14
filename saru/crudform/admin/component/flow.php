<!-- 1. if statement -->
<?php
$num=30;
if($num>0){
    echo $num."is positive";
}
?>


<!--  2. if else statement -->
<?php
$age = 25;

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
?>

<!--  3.if else if else statement -->
<?php
$grade = 75;

if ($grade >= 90) {
    echo "Your grade is A.";
} elseif ($grade >= 80) {
    echo "Your grade is B.";
} elseif ($grade >= 70) {
    echo "Your grade is C.";
} elseif ($grade >= 60) {
    echo "Your grade is D.";
} else {
    echo "Your grade is F.";
}
?>


<!-- 3. switch statement -->
<?php
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "Today is Monday.";
        break;
    case "Tuesday":
        echo "Today is Tuesday.";
        break;
    case "Wednesday":
        echo "Today is Wednesday.";
        break;
    case "Thursday":
        echo "Today is Thursday.";
        break;
    case "Friday":
        echo "Today is Friday.";
        break;
    case "Saturday":
        echo "Today is Saturday.";
        break;
    case "Sunday":
        echo "Today is Sunday.";
        break;
    default:
        echo "Invalid day.";
}
?>


<!-- 4.while statement -->
<?php
$num = 1;

while ($num <= 5) {
    echo "The number is: $num <br>";
    $num++;
}
?>
