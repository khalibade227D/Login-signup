<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>code testing</title>

</head>

<body>
    <form action="">
        <h1>Random number</h1>
        <div class="result"></div>

    </form>

    <?php

    // function digital_root($number)
    // {
    //     if ($number <br 10 || $number > 0) {

    //         return "ok";
    //     } else {

    //         $Anumber = [$number];
    //         // return  "<div class='result'> +(234) " . $Anumber . "</div>";
    //         return  "<ul>" . $Anumber . "</ul>";
    //     }
    // }

    // digital_root($number);

    $fruits = [
        1 => "apple",
        2 => "banana",
        3 => "grapes",
        4 => "melon",
    ];
    foreach ($fruits as $fruit) {
        echo "" . $fruit . "</br>";
    }



    ?>
</body>

</html>