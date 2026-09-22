<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    28. WAP to calculate the Gross Salary of an employee.

    <form action="" method="post">
        <label>Enter Basic Salary</label>
        <input type="number" name="BS" required>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php

    if (isset($_POST['submit'])) {
        $basic_salary = ($_POST["BS"]);

        if ($basic_salary < 1500) {
            $DA = 90 / 100 * $basic_salary;
            $HRA = 10 / 100 * $basic_salary;
            $gross_salary = $basic_salary + $DA + $HRA;
            echo "Gross Salary is:  $" . $gross_salary;
        } else {
            $DA = 98 / 100 * $basic_salary;
            $HRA = 500;
            $gross_salary = $basic_salary + $DA + $HRA;
            echo "Gross Salary is:  $" . $gross_salary;
        }
    }
    ?>

    <?php

    $dayNum = 4;

    switch ($dayNum) {
        case 1:
            $dayName = "Monday";
            break;
        case 2:
            $dayName = "Tuesday";
            break;
        case 3:
            $dayName = "Wednesday";
            break;
        case 4:
            $dayName = "Thursday";
            break;
        case 5:
            $dayName = "Friday";
            break;
        case 6:
            $dayName = "Saturday";
            break;
        case 7:
            $dayName = "Sunday";
            break;
        default:
            $dayName = "Invalid day number";
            break;
    }

    echo $dayName;
    ?>

    30. WAP to display arithmetic operations using switch-case
    statement.

    <?php
    $num1 = 10;
    $num2 = 5;
    $operation = 'add';
    switch ($operation) {
        case 'add':
            $result = $num1 + $num2;
            break;
        case 'subtract':
            $result = $num1 - $num2;
            break;
        case 'multiply':
            $result = $num1 * $num2;
            break;
        case 'divide':
            $result = $num1 / $num2;
            break;
        default:
            $result = "Invalid operation";
            break;
    }
    echo  $result;


    ?>


    <?php
    $count = 0;
    while ($count < 10) {
        echo "<br>";
        echo  "khalifa" . "<br>";
        $count++;
    }

    ?>


    32. WAP to print first 10 natural nos.

    <?php
    // for ($i = 1; $i <= 10; $i++) {
    //     echo "<br>";
    //     echo $i."<br>";
    // }
    ?>

    33. WAP to print first N natural numbers and their sum.
    <form action="" method="post">
        <label>Enter N</label>
        <input type="number" name="N" required>
        <input type="submit" name="submit" value="display">
    </form>
    <?php
    $sum = [];
    $n = $_POST['N'];
    for ($i = 1; $i <= $n; $i++) {

        echo "<br>";
        echo $i . "<br>";
    }

    ?>




</body>

</html>