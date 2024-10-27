<html>
    <head>
        <title>Page 6</title>
        <link rel="stylesheet" href="Page1.css">
    </head>
    <body>
    <strong><a href="index.html">Return to Main Page</a></strong><br><br><br><br>
    <?php
    $string1 = "Proud";
    $string2 = "Pilipino";
    $string3 = "Lamatong";
    $string4 = "Bisaya";
    $string5 = "Kini";
    $num1 = 4;
    $num2 = 3;
    $num3 = 5;
    $num4 = 1;
    $num5 = 2;
    echo "<table>";
    echo "<tr><td style='padding: 3px;'><strong class = st>$string1</strong></td>";
    echo "<td style='padding: 3px;'><strong class = st>$string2</strong></td>";
    echo "<td style='padding: 3px;'><strong class = st>$string3</strong></td>";
    echo "<td style='padding: 3px;'><strong class = st>$string4</strong></td>";
    echo "<td style='padding: 3px;'><strong class = st>$string5</strong></td></tr>";
    echo "<td style='padding: 3px;'><strong class = st>$num1</strong></td>";
    echo "<td style='padding: 3px;'><strong class = st>$num2</strong></td>";
    echo "<td style='padding: 3px;'><strong class = st>$num3</strong></td>";
    echo "<td style='padding: 3px;'><strong class = st>$num4</strong></td>";
    echo "<td style='padding: 3px;'><strong class = st>$num5</strong></td></tr>";
    echo "</table><br><br><br><br>";
    function AscendingString($string) {
        $length = count($string);
        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = 0; $j < $length - 1 - $i; $j++) {
                if ($string[$j] > $string[$j + 1]) {
                    $temp = $string[$j];
                    $string[$j] = $string[$j + 1];
                    $string[$j + 1] = $temp;
                }
            }
        }
        return $string;
    }
    function DescendingString($string) {
        $length = count($string);
        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = 0; $j < $length - 1 - $i; $j++) {
                if ($string[$j] < $string[$j + 1]) {
                    $temp = $string[$j];
                    $string[$j] = $string[$j + 1];
                    $string[$j + 1] = $temp;
                }
            }
        }
        return $string;
    }
    function AscendingNumbers($numbers) {
        $length = count($numbers);
        for ($i = 0; $i < $length - 1; $i++) {
            for ($j = 0; $j < $length - 1 - $i; $j++) {
                if ($numbers[$j] > $numbers[$j + 1]) {
                    $temp = $numbers[$j];
                    $numbers[$j] = $numbers[$j + 1];
                    $numbers[$j + 1] = $temp;
                }
            }
        }
        return $numbers;
    }
    function Calculation($numbers) {
        $sum = 0;
        $product = 1;
        foreach ($numbers as $number) {
            $sum += $number;
            $product *= $number;
        }
        $average = $sum / count($numbers);
        
        return [$sum, $product, $average];
    }
    echo "<center>";
    echo "<center><table border='5' height='200' width='900'>";
    echo "<tr>";
    $string = [$string1, $string2, $string3, $string4, $string5];
    echo "<td class = p6><strong>Strings in Ascending Order</strong></td>";
    foreach (AscendingString($string) as $strings) {
        echo "<td style='padding: 5px;'><mark style='background-color: #04fd57;''><b>$strings</b></mark></td>";
    }echo "</tr>";
    echo "<td class = p6><strong>Strings in Descending Order</strong></td>";
    foreach (DescendingString($string) as $strings) {
        echo "<td style='padding: 5px;'><mark style='background-color: #04fd57;''><b>$strings</b></mark></td>";
    }    
    echo "</tr>";

    $numbers = [$num1, $num2, $num3, $num4, $num5];
if ($num1 % $num5 == 0) {
    echo "<tr><td class = p6><strong>The first number is divisible by the fifth number</strong></td>";
    list($sum, $product, $average) = Calculation($numbers);
    echo "<td style='padding: 5px;'><mark style='background-color: #04fd57;''><b>Sum: $sum</b></mark></td>";
    echo "<td style='padding: 5px;'><mark style='background-color: #04fd57;''><b>Product: $product</b></mark></td>";
    echo "<td style='padding: 5px;'><mark style='background-color: #04fd57;''><b>Average: $average</b></mark></td>";
} else {
    echo "<tr><td class = p6><strong>Numbers in Ascending Order</strong></td>";
    foreach (AscendingNumbers($numbers) as $number) {
        echo "<td style='padding: 5px;'><mark style='background-color: #04fd57;''><b>$number</b></mark></td>";
    }
}    echo "</tr>";

echo "</table>";
echo "</center>";
    ?>
     <div class = "Author1">
            <strong>Creator's Name: Clerene A. Agor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Created: 10/19/2024</strong>
        </div>
    </body>
</html>