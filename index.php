

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Random Number Generator</title>
    <link rel="stylesheet" href="assets/css/style.css" />
    
</head>
    <body>
        <header>
            <img src="assets/img/logocat.png" alt="Logo" />
            <h1>Random Number Generator</h1>
        </header>
        <div class="container">
            <h1>Random Number Generator</h1>
            <?php
            
            $randomNumber = rand(1, 10);

            
            echo '<div class="random-number">' . $randomNumber . '</div>';
            ?>
            <a href="page/index.php?number=<?php echo $randomNumber; ?>" class="btn-compliments">See Compliments</a>
            <div class="refresh-note">Refresh the page to generate a new number</div>
        </div>
    </body>
</html>
