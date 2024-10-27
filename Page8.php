<html>
    <head>
        <title>Page 8</title>
        <link rel="stylesheet" href="Page1.css">
    </head>
    <body>
    <strong><a href="index.html">Return to Main Page</a></strong><br><br><br><br>
    <strong>Problem:</strong><br>   
<p style="font-size: 18.30px;">Identify the smallest, largest, summation, average, odd, even, factorial, right triangle star, multiplication table, and prime number and based on the given variables with value below:<br><br>
<center><b>$a = 10, $b = 5, $c = 7, $d = 6</b></center></p><br><br>
    <?php
        echo "<center>";
        echo "<table border = '3' width = '985'>";
        echo "<tr>
                <td style = 'background-color: yellow;'><center><strong>Functions</strong></center></td>
                <td style = 'background-color: yellow;'><center><strong>Explanations</strong></center></td>
        </tr>";
        echo "<tr>";
     echo '<td>function smallest($a, $b, $c, $d) {<br>
            if ($a <= $b && $a <= $c && $a <= $d) {<br>
                return $a;<br>
            }<br>
            elseif ($b <= $a && $b <= $c && $b <= $d) {<br>
                return $b;<br>
            }<br>
            elseif ($c <= $a && $c <= $b && $c <= $d) {<br>
                return $c;<br>
            }<br>
            else {<br>
                return $d;<br>
            }<br>
        }</td>
      <td style="background-color: pink;">This function displays the smallest value among the values of $a, $b, $c, and $d. Every if <br> condition compares each variable to others, then if it is true, it returns itself.</td>';
        echo "</tr>";
    echo "<tr>";
    echo '<td>function largest($a, $b, $c, $d) {<br>
        if ($a >= $b && $a >= $c && $a >= $d) {<br>
            return $a;<br>
        }
        elseif ($b >= $a && $b >= $c && $b >= $d) {<br>
            return $b;<br>
        }
        elseif ($c >= $a && $c >= $b && $c >= $d) {<br>
            return $c;<br>
        }<br>
        else {<br>
            return $d;<br>
        }<br>
    }</b></td>
      <td style="background-color: pink;">This function displays the largest value among the values of $a, $b, $c, and $d. Every if <br>condition compares each variable to others, then if it is true, it returns itself.</td>';
        echo "</tr>";
    echo "<tr>";
    echo '<td>function summation($a, $b, $c, $d){<br>
        $sum = $a + $b + $c + $d;<br>
        return $sum;<br>
    }</b></td>
    <td style="background-color: pink;">This function displays the summation of the value of $a, $b, $c and $d. It adds all variables <br> and then returns the sum.</td>';
    echo "</tr>";
    echo "<tr>";
    echo '<td>
    function average($a, $b, $c, $d){<br>
        $average = ($a + $b + $c + $d) / 3;<br>
        return $average;<br>
    }</b>
    </td>
    <td style="background-color: pink;">This function calculates the average of four numbers. The variable $average stores the result<br> of adding all four variables ($a, $b, $c, and $d), then dividing the sum by 4 since there are four<br> numbers. Then, returns the value of $average.
    </td>';
    echo "</tr>";
    echo "<tr>";
    echo '<td>function odd($a){<br>
        for($i = 0; $i <= $a; $i++)<bR>
            if($i % 2 != 0){<br>
               echo $i . " ,";<br>
            }<br>
        }</b></td>
    <td style="background-color: pink;">This function displays the odd numbers of the value of variable $a. It loops the number from 0 to<br>the value of $a, then it checks the if condition that the number is odd, then it prints it.</mar></td>';
    echo "</tr>";
    echo "<tr>";
    echo '<td>function even($b){<br>
        for($i = 0; $i <= $b; $i++)<br>
            if($i % 2 == 0){<br>
               echo $i . " ,";<br>
            }<br>
        }</b></td>
    <td style="background-color: pink;">This function displays the even numbers of the value of variable $b. It loops the number from 0 to<br>the value of $b, then it checks the if condition that the number is an even number, then it prints it.</mar></td>';
    echo "</tr>";
    echo "<tr>";
    echo '<td>function factorial($c){<br>
        $factorial = 1;<br>

        for($i = $c; $i >= 1; $i--){<br>
            $factorial *= $i;<br>
            echo $i . " x ";<br>
        }<br>
        return " = " . $factorial;<br>
    }</b></td>
    <td style="background-color: pink;">This function displays the factorial of the value of variable $c. It loops the number from <br>the value of $c to 1, then prints its factorial and returns the result.</td>';
    echo "</tr>";
    echo "<tr>";
    echo '<td>function rightTriangle($d){<br>
    for($i = 1; $i <= $d; $i++){<br>
        $show = \'\';<br>
        for($j = 0; $j < $i; $j++){<br>
          $show .= \'*\';<br>
        }<br>
        echo $show . "&lt;br&gt;";<br>
    }<br>
    }</b></td>
    <td style="background-color: pink;">This function is to display the right triangle star. The outer loop is used to display the row<br>of the triangle
 from 1 to the value of variable $d then inner loop runs for the current row<br> number $i after that the $show
 the variable is assigned a value asterisk, then display the variable<br> $show with a break line to create a new line.</td>';
    echo "</tr>";
    echo "<tr>";
    echo '<td>
        function mTable($a){<br>
            for($i = 1; $i <= $a; $i++){<br>
                for($j = 1; $j <= $a; $j++){<br>
                    $result = $i * $j;<br>
                    echo "&dollar;i x &dollar;j = &dollar;result &lt;br&gt;";<br>
                }<br>
                echo "&lt;br&gt;";<br>
            }<br>
        }</b></td>
    <td style="background-color: pink;">This function displays a multiplication table. The outer represents the row number from 1 to the<br> value of variable $a, then the inner loop represents the column number from 1 to $a, then inside<br>
 the inner loop multiplies the current row number and current column number that is assigned from<br>variable $resultsthen displays the multiplication operation and its result, followed by a line break,<br> 
 so each result is on its own line after the end of the row has an additional break line to separate<br> each row.</td>';
    echo "</tr>";
    echo "<tr>";
    echo '<td>function primeNumber($b){<br>
            if ($b == 1)<br>
            return "Not prime";<br>
            for ($i = 2; $i <= $b/2; $i++){<br>
                if ($b % $i == 0)<br>
                    return "Not prime";<br>
            }<br>
            return "Prime";<br>
        }</b></td>
        <td style="background-color: pink;">This function displays whether the number is prime or not prime. If the condition checks if the <br>value $b is equal to 1, then it prints not prime. 
     Proceed to the for loop, which loops through <br>numbers starting from 2 up to half of $b. Next is the if condition inside the loop for each <br>number $i in this
     range proceeds checks if $b is divisible by $i. Then, if the variable $b<br> is divisible by any number in this range, it returns not prime. Otherwise, it returns prime.</td>';
    echo "</tr>";
    echo "</table><br><br>";
    echo "</center>";
    ?>
     <div class = "Author1">
            <b>Creator's Name: Clerene A. Agor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Created: 10/21/2024</b>
        </div>
    </body>
</html>