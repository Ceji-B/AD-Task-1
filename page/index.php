<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Compliments</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <header>
        <img src="../assets/img/logocat.png" alt="Logo" />
        <h1>Compliments</h1>
    </header>
    <div class="container">
        <?php
        // Read the number from the query parameter
        $number = 0;
        if (isset($_GET['number'])) {
            $number = intval($_GET['number']);
        }

        // Array of compliments
        $compliments = array(
            "You have a great sense of humor!",
            "Your positivity is infectious.",
            "You are an amazing friend.",
            "You have a brilliant mind.",
            "Your creativity knows no bounds.",
            "You are a fantastic listener.",
            "You have a heart of gold.",
            "Your determination is inspiring.",
            "You light up the room.",
            "You are incredibly thoughtful."
        );

        // Calculate how many compliments to show based on the number
        $countCompliments = count($compliments);
        $numToShow = ($number % $countCompliments) ? $number : 10;

        // Calculate start index to vary compliments shown
        $startIndex = $number % $countCompliments;

        // Loop to display compliments starting from startIndex, wrapping around
        $index = 0;
        while ($index < $numToShow) {
            $complimentIndex = ($startIndex + $index) % $countCompliments;
            echo '<div class="compliment">' . $compliments[$complimentIndex] . '</div>';
            $index++;
        }
        ?>
        <a href="../index.php" class="back-link">Back to Random Number Generator</a>
    </div>
</body>
</html>      
