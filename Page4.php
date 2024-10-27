<html>
    <head>
        <title>Page 4</title>
        <link rel="stylesheet" href="Page1.css">
    </head>
    <body>
        <strong><a href="index.html">Return to Main Page</a></strong><br><br>
        <?php
        function one($num1){
            echo "<u><b>". abs($num1)."</b></u>";
        }
        function two($num6){
            echo "<u><b>".sqrt(num: $num6) ."</b></u>";
        }
        function three($num2){
            echo "<u><b>".round($num2)."</b></u>";
        }

        function four($num8, $num7){
            echo "<b><u>".pow($num8, $num7)."</b></u>";
        }
        function five($num9, $num3, $num10, $num7){
            echo "<b><u>".max($num9, $num3, $num10, $num7)."</b></u>";
        }
        function six($num9, $num3, $num10, $num7){
            echo "<b><u>". min($num9, $num3, $num10, $num7)."</b></u>";
        }
        function seven($num9){
            echo "<b><u>".dechex($num9)."</b></u>";
        }
        function eight($num10){
            echo "<b><u>".sin($num10)."</b></u>";
        }
        function nine($num6){
            echo "<b><u>".tan($num6)."</b></u>";
        }
        function ten($num9){
            echo "<b><u>".cos($num9)."</b></u>";
        }
        function eleven($num3){
            echo "<b><u>".floor($num3)."</b></u>";
        }

        function twelve($num2){
            echo "<b><u>". ceil($num2)."</b></u>";
        }
        function thirteen($rand7, $num8){
            echo "<b><u>".rand($rand7, $num8)."</b></u>";
        }
        function fourteen($num9, $num7){
            echo "<b><u>".fmod($num9, $num7)."</b></u>";
        }
        function fifteen($num10, $num7){
            echo "<b><u>".intdiv($num10, $num7)."</b></u>";
        }
        $num1= 2.5;
        $num2 = 5.1;
        $num3 = 15.22;
        $num4 = 10.23;
        $num5 = 12.11;
        $num6 = 100;
        $num7 = 2;
        $num8 = 20;
        $num9 = 12;
        $num10 = 24;
        echo "<br><br><table>";
        echo "<tr><td style='padding: 5px;'><strong class = st>$num1</strong></td>";
        echo "<td style='padding: 5px;'><strong class = st>$num2</strong></td>";
        echo "<td style='padding: 5px;'><strong class = st>$num3</strong></td>";
        echo "<td style='padding: 5px;'><strong class = st>$num4</strong></td>";
        echo "<td style='padding: 5px;'><strong class = st>$num5</strong></td></tr>";
        echo "<tr><td style='padding: 5px;'><strong class = st>$num6</strong></td>";
        echo "<td style='padding: 5px;'><strong class = st>$num7</strong></td>";
        echo "<td style='padding: 5px;'><strong class = st>$num8</strong></td>";
        echo "<td style='padding: 5px;'><strong class = st>$num9</strong></td>";
        echo "<td style='padding: 5px;'><strong class = st>$num10</strong></td></tr>";
        echo "</table><br><br>";
        echo "<table border = '3'; style = padding: '2px' height = '400px'>";;
        echo "<tr><td><b>abs($num1) = </b>"; 
        one($num1);echo"<br>";
        echo "The use of this math function <mark>abs()</mark> or absolute is to return the positive value of a number.<br></td>";
        echo "<td><b>sqrt($num6) = </b>"; 
        two($num6);echo"<br>";
        echo "The use of this math function <mark>sqrt()</mark> or square root is to return the square root of a number.<br></td></tr>";
        echo "<tr><td><b>round($num2) = </b>"; 
        three($num2);echo"<br>";
        echo "The use of this math function <mark>round()</mark> is to round a floating-point number.<br></td>";
        echo "<td><b>pow($num8, $num7) = </b>"; 
        four($num8, $num7);echo"<br>";
        echo "The use of this math function <mark>pow(x,y)</mark> is to raise the x to the power of y.
        <mark>x is the base use, and y is the exponent.</mark><br></td></tr>";
        echo "<tr><td><b>max($num9, $num3, $num10, $num7) = </b>"; 
        five($num9, $num3, $num10, $num7);echo"<br>";
        echo "The use of this math function <mark>max()</mark> is to return the highest value in the array or the highest
         value of several specified values.<br></td>";
        echo "<td><b>min($num9, $num3, $num10, $num7) = </b>"; 
        six($num9, $num3, $num10, $num7);echo"<br>";
        echo "The use of this math function <mark>min()</mark> is to return the lowest value in the array or the lowest
        value of several specified values.<br></td></tr>";
        echo "<tr><td><b>dechex($num9) = </b>"; 
        seven($num9);echo"<br>";
        echo "The use of this math function <mark>dechex()</mark> is to convert a decimal number to a hexadecimal number.<br></td>";
        echo "<td><b>sin($num10) = </b>"; 
        eight($num10);echo"<br>";
        echo "The use of this math function <mark>sin()</mark> is to return the sine of a number.<br></td></tr>";
        echo "<tr><td><b>tan($num6) = </b>"; 
        nine($num6);echo"<br>";
        echo "The use of this math function <mark>tan()</mark> is to return the tangent of a number.<br></td>";
        echo "<td><b>cos($num9) = </b>"; 
        ten($num9);echo"<br>";
        echo "The use of this math function <mark>cos()</mark> is to return the cosine of a number.<br></td></tr>";
        echo "<td><b>floor($num3) = </b>"; 
        eleven($num3);echo"<br>";
        echo "The use of this math function <mark>floor()</mark> is to round a number down to the nearest integer, if necessary.<br></td>";
        echo "<td><b>ceil($num2) = </b>"; 
        twelve($num2);echo"<br>";
        echo "The use of this math function <mark>ceil()</mark> is to round a number up to the nearest integer, if necessary.<br></td></tr>";
        echo "<tr><td><b>rand($num7, $num8) = </b>"; 
        thirteen($num7, $num8);echo"<br>";
        echo "The use of this math function <mark>rand(min, max)</mark> is to generate a random integer.<br></td>";
        echo "<td><b>fmod($num9, $num7) = </b>"; 
        fourteen($num9, $num7);echo"<br>";
        echo "The use of this math function <mark>fmod(x, y)</mark> is to return the remainder of modulo x / y.<br></td></tr>";
        echo "<tr><td><b>intdiv($num10, $num7) = </b>"; 
        fifteen($num10, $num7);echo"<br>";
        echo "The use of this math function <mark>intdiv(dividend, divisor)</mark> is integer division.<br></td></tr>";
        echo "</table>";
        ?>
         <div class = "Author1">
            <strong>Creator's Name: Clerene A. Agor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Created: 10/14/2024</strong>
        </div>
</body>
</html>