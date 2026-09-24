
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Practice</title>
</head>

<body>

<?php


print "This is my PHP learning practice.<br><br>";

echo "<h2>Student Details</h2>";


// VARIABLES
$studentName = "Mohamed Ali";
$studentAge = 22;
$course = "Software Engineering";

echo "Student Name: $studentName <br>";
echo "Student Age: $studentAge <br>";
echo "Course: $course <br><br>";


// CONSTANT
define("COLLEGE_NAME", "University of Somalia");

echo "College: " . COLLEGE_NAME . "<br><br>";


// IF / ELSEIF / ELSE
$mark = 76;

echo "<b>Mark Evaluation:</b><br>";

if ($mark >= 90) {

    echo "Excellent work!<br>";

} elseif ($mark >= 70) {

    echo "Very Good!<br>";

} elseif ($mark >= 50) {

    echo "You passed.<br>";

} else {

    echo "You failed. Try again.<br>";
}


// SWITCH
$day = "Wednesday";

echo "<br><b>Day Evaluation:</b><br>";

switch ($day) {

    case "Monday":
        echo "It is the first day of the week.<br>";
        break;

    case "Tuesday":
        echo "It is the second day of the week.<br>";
        break;

    case "Wednesday":
        echo "It is the middle of the week.<br>";
        break;

    case "Friday":
        echo "The weekend is coming.<br>";
        break;

    case "Sunday":
        echo "It is a peaceful day.<br>";
        break;

    default:
        echo "It is a regular day.<br>";
}

?>

</body>

</html>
```
