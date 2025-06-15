<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function Examples</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #fff;
            color: #000;
        }
        .section {
            border: 1px solid #000;
            padding: 20px;
            margin-bottom: 20px;
        }
        h2 {
            border-bottom: 1px solid #000;
            padding-bottom: 10px;
        }
        .subheading {
            font-size: 0.9rem;
            color: #555;
        }
    </style>
</head>
<body class="container mt-4">

    <div class="section">
        <h2>TASK 1: Simple Function in PHP</h2>
        <?php
        function introduceFood($food1, $food2, $food3) {
            echo "<p>Food 1: $food1</p>";
            echo "<p>Food 2: $food2</p>";
            echo "<p>Food 3: $food3</p>";
        }
        introduceFood("Hotdog", "CheeseDog", "Ham");

        echo "<hr>";

        function greetUser($name) {
            return "Hello, " . strtoupper($name) . "!";
        }
        echo greetUser("Carl");

        echo "<hr>";

        function showScope() {
            global $globalVar, $localVar;
            $localVar = "I'm local now";
            echo "<p>Inside: $globalVar</p>";
            echo "<p>Inside (local): $localVar</p>";
        }

        $globalVar = "I'm global";
        $localVar = "Global copy";
        showScope();
        echo "<p>Outside: $localVar</p>";

        echo "<hr>";

        function visitCounter() {
            static $count = 0;
            $count++;
            echo "Visits: $count<br>";
        }
        visitCounter();
        visitCounter();
        visitCounter();

        echo "<hr>";

        function displayItems($items) {
            echo "<div style='border:1px solid black; width:200px; padding:10px;'>";
            print_r($items);
            echo "</div>";
        }
        $box = ["Coffee", "Sugar", "Milk"];
        displayItems($box);

        echo "<hr>";

        function countdown($num) {
            if ($num <= 0) {
                echo "Boom!<br>";
            } else {
                echo "$num...<br>";
                countdown($num - 1);
            }
        }
        countdown(5);
        ?>
    </div>

    <div class="section">
        <h2>TASK 2: Function Applying Return</h2>
        <?php
        function computeSum($num1, $num2) {
            $sum = $num1 + $num2;
            return $sum;
        }

        $num1 = 789;
        $num2 = 586;
        echo "The sum of my groceries is " . computeSum($num1, $num2) . "<br>";

        $num1 = 99;
        $num2 = 88;
        echo "The sum of the students enrolled in this class is " . computeSum($num1, $num2) . "<br>";
        ?>
    </div>

    <div class="section">
        <h2>TASK 3: Function by Reference</h2>
        <?php
        $myNum = 10;

        function addFive($num) {
            $num += 5;
        }
        addFive($myNum);
        echo "Value without Reference: $myNum<br>";

        function addTen(&$num) {
            $num += 10;
        }
        addTen($myNum);
        echo "Value with Reference (&): $myNum<br>";

        echo "<hr>";

        function updateNumber($num) {
            $num = 100;
            echo "Inside function (by value): $num<br>";
        }

        $value = 50;
        updateNumber($value);
        echo "Outside function: $value<br>";

        echo "<hr>";

        function updateReference(&$num) {
            $num = 200;
            echo "Inside function (by reference): $num<br>";
        }

        updateReference($value);
        echo "Outside function after reference: $value<br>";
        ?>
    </div>

    <div class="section">
        <h2>TASK 4: Function Using Multiple Returns</h2>
        <?php
        function multiplyAndDivide($num1, $num2) {
            $product = $num1 * $num2;
            $quotient = ($num2 != 0) ? ($num1 / $num2) : "Undefined (division by zero)";
            return array($product, $quotient);
        }

        $calculationResults = multiplyAndDivide(20, 5);
        echo "Product: " . $calculationResults[0] . "<br>";
        echo "Quotient: " . $calculationResults[1] . "<br><br>";

        list($calculatedProduct, $calculatedQuotient) = multiplyAndDivide(100, 4);
        echo "Product (using list): " . $calculatedProduct . "<br>";
        echo "Quotient (using list): " . $calculatedQuotient . "<br><br>";

        list($productZero, $quotientZero) = multiplyAndDivide(50, 0);
        echo "Product (division by zero example): " . $productZero . "<br>";
        echo "Quotient (division by zero example): " . $quotientZero . "<br>";
        ?>
    </div>

</body>
</html>
