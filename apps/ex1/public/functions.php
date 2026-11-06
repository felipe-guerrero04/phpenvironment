<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
    <?php include_once "../includes/styles.php" ?>
</head>
<body>
    <h1>Functions</h1>
    <a href="/">Home</a>
    <?php  

        /**
         * Adds two values
         * @param int|float $x Value 1
         * @param int|float $y Value 2
         * @return float|int The sum of the two values
         */
        function add(int|float $x, int|float $y):int|float {
            return $x + $y;
        }

        /**
         * Subtracts two values
         * @param mixed $x Value 1
         * @param mixed $y Value 2
         * @return float|int The subtraction of the two values
         */
        function subtract($x, $y) {
            return $x - $y;
        }

        /**
         * Multiplies two values
         * @param mixed $x Value 1
         * @param mixed $y Value 2
         * @return float|int The multiplication of the two values
         */
        function multiply($x, $y) {
            return $x * $y;
        }

        /**
         * Divides two values
         * @param mixed $x Value 1
         * @param mixed $y Value 2
         * @return float|int The division of the two values
         */
        function divide($x, $y) {
            return $x / $y;
        }

        /**
         * Get the remaining value of a division
         * @param mixed $x Value 1
         * @param mixed $y Value 2
         * @return int The remaining
         */
        function modulus($x, $y) {
            return $x % $y;
        }
    ?>
    <div>13 + 5 = <?= add(13, 5)?></div>
    <div>21 - 15 = <?= subtract(21, 15)?></div>
    <div>9 * 7 = <?= multiply(9, 7)?></div>
    <div>36 / 4 = <?= divide(36, 4)?></div>
    <div>10 / 0 = Throws an Exception
        <?php
            // Division by zero throws an error
            // echo divide(10, 0);
        ?>
    </div>
    <div>27 % 5 = <?= modulus(27, 5) ?></div>

</body>
</html>