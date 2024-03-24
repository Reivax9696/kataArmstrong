<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            text-align: center;
        }
        input[type="text"] {
            padding: 10px;
            margin-bottom: 10px;
            width: 200px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>És un nombre de Armstrong?</h2>
        <form method="post" action="">
            <input type="text" name="number" placeholder="Escriu el teu nombre">
            <br>
            <input type="submit" value="Comprova!">
        </form>
        <div class="result">
            <?php
            function isArmstrongNumber($number) {
                
                $numStr = (string) $number;
                $numDigits = strlen($numStr);
                $sum = 0;
                
                
                for ($i = 0; $i < $numDigits; $i++) {
                    $digit = (int) $numStr[$i];
                    $sum += $digit ** $numDigits;
                }
                
                if ($sum == $number) {
                    return true; 
                } else {
                    return false; 
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $number = $_POST["number"];

                if (is_numeric($number)) {
                    if (isArmstrongNumber($number)) {
                        echo "<p>$number és un nombre d'Armstrong!</p>";
                    } else {
                        echo "<p>$number no és un nombre d'Armstrong!</p>";
                    }
                } else {
                    echo "<p>Número no valid.</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>