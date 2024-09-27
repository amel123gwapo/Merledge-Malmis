<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="" method="post">
        <label for="num1">First Number:</label>
        <input type="text" name="num1">
        <br>

        <label for="num2">Second Number:</label>
        <input type="text" name="num2">
        <br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $number1 = $_POST['num1'];
        $number2 = $_POST['num2'];
        if (($number1)&($number2)) {
            $add = $number1 + $number2;
            $sub = $number1 - $number2;
            $multi = $number1 * $number2;
            if ($number2 != 0) {
                $div = $number1 / $number2;
            } else {
                $div = "Division by zero is not allowed.";
            }
            echo "<p>Addition = $add</p>";
            echo "<p>Subtraction = $sub</p>";
            echo "<p>Multiplication = $multi</p>"; 
            echo "<p>Division = $div</p>";
        }
    }
    ?>
</body>
</html>