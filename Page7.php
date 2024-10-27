<html>
    <head>
        <title>Page 7</title>
        <link rel="stylesheet" href="Page1.css">
    </head>
    <body>
    <strong><a href="index.html">Return to Main Page</a></strong><br><br><br><br>
    <?php
    
    function nFibo($n){
        $i = 1;
        $first = 0;
        $second = 1;
        while($i <= $n){
            echo "<b>$first, </b>";

            $next = $first + $second;
            $first = $second;
            $second = $next;
            $i++;
        }
    }
    function mFibo($m){
        $i = 1;
        $first = 0;
        $second = 1;
        while($i <= $m){
            echo "<b>$first, </b>";

            $next = $first + $second;
            $first = $second;
            $second = $next;
            $i++;
        }
    }
    
    function Factorial($n){
        $factorial = 1;
        $i = 1;
        do {
            echo "<b>$n x </b>";
            $factorial *= $n;
            $n--;
          } while ($n >= $i);
          return $factorial;
    }
    
    function Sum($m): float|int{
    $sum = 0;
    $i = 0;
        do {
            echo "<b>$i + </b>";
            $sum += $i;
            $i++;
        } while ($i <= $m);
          return $sum;
    }
    $n = 5;
    $m = 6;
    echo "<table>";
    echo "<tr><td style='padding: 5px;'><strong>n = $n</strong></td>";
    echo "<td style='padding: 5px;'><strong >m = $m</strong></td></tr>";
    echo "</table>";
    echo "<br><br><br><strong><mark>Multiplication Table</mark></strong><br><br>";
    echo "<table border = '3'>";
    for($i = 1; $i <= $n; $i++){
    echo "<tr>";
    for($k=1;$k <= $m; $k++){
    $result = $i * $k;
    echo "<td style='padding: 5px;'><b>$i x $k = $result</b></td>";
    }
    echo "</tr>";
    }
    echo "</table><br><br>";
    echo "<strong><mark>N Fibonacci series</mark></strong> &emsp; &emsp; &emsp; &emsp; &emsp;";
    echo "<strong><mark>M Fibonacci series</mark></strong> &emsp; &emsp; &emsp; &emsp; &emsp;";
    echo "<strong><mark>N Factorial</mark></strong> &emsp; &emsp; &emsp; &emsp; &emsp;&emsp;";
    echo "<strong><mark>M Summation</mark></strong> &emsp; &emsp; &emsp; &emsp; &emsp;<br><br>";
    nFibo(n: $n);echo "&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp;";
    mFibo($m);echo "&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;&emsp;&emsp;";
    echo "<b>= " . Factorial($n);echo "&emsp; &emsp;&emsp;&nbsp;";
    echo "= " . Sum($m);
    ?>
     <div class = "Author1">
            <strong>Creator's Name: Clerene A. Agor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Created: 10/19/2024</strong>
        </div>
    </body>
</html>