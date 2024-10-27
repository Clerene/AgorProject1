<html>
    <head>
        <title>Page 10</title>
        <link rel="stylesheet" href="Page1.css">
    </head>
    <body>
    <strong><a href="index.html">Return to Main Page</a></strong>
        <?php
$num = array(
    array(22, 18, 5, 2),
    array(15, 13, 7, 4),
    array(11, 8, 10, 9),
    array(4, 14, 12, 16),
);
echo "<table border = '3' width = '200px' height = '50pxs'>";
echo "<tr>";
for ($row = 0; $row < count($num); $row++) {
   echo "<tr><td style='padding: 5px;'>".$num[$row][0]."</td>";
   echo "<td style='padding: 5px;'>".$num[$row][1]."</td>";
   echo "<td style='padding: 5px;'>".$num[$row][2]."</td>";
   echo "<td style='padding: 5px;'>".$num[$row][3]."</td></tr>";
    echo "<br>";
}
echo "</table>";

echo "<center><table border = '3'  width = '985'>";
function row_sum($num)
{
    echo "<tr>";    
    echo "<tr><td colspan = '2' style = 'background-color: aqua;'><center><strong>The Sum and Average of each row</strong></center></td></tr>";

    for ($i = 0; $i < count($num); ++$i) 
    {
        $sum = 0; 
        
        for ($j = 0; $j < count($num[$i]); ++$j) 
        {
            $sum += $num[$i][$j];
            $average = $sum / count($num);
        }
 
        echo "<td style='padding: 5px;'>Sum of row " . ($i + 1) . " = " . "<b>".$sum."</b>" . "</td>";
        echo "<td style='padding: 5px;'>Average of row " . ($i + 1) . " = " ."<b>".$average."</b>" ."</td></tr>";
    }
}
function col_sum($num){ 
    echo "<tr><td colspan = '2' style = 'background-color: aqua;'><center><strong>The Sum and Average of each column</strong></center></td>";
     for ($i = 0; $i < count($num[0]); ++$i){
        $sum = 0;
        for ($j = 0; $j < count($num); ++$j) 
        {
             $sum += $num[$j][$i];
             $average = $sum / count($num);
        }
        echo "<tr><td style='padding: 5px;'>Sum of column " . ($i + 1) . " = ". "<b>".$sum."</b>". "</td>";
        echo "<td style='padding: 5px;'>Average of column " . ($i + 1) . " = " . "<b>".$average."</b>"."</td></tr>";
    }
}

    function SumAveDiagonals($num) {
        echo "<tr><td colspan = '2' style = 'background-color: aqua;'><center><strong>The Sum and Average of two diagonals</strong></center></td>";
        $first = 0; 
        $second = 0; 
        $size = count($num);
        for ($i = 0; $i < $size; $i++) {
            $first += $num[$i][$i];
            $second += $num[$i][$size - 1 - $i]; 
        }
            $sum = $first + $second;
            $count = 2 * $size;
            $ave = $sum / $count;
        echo "<tr><td style='padding: 5px;'>Sum = " . "<b>".$sum."</b>" . "</td>";
        echo "<td style='padding: 5px;'>Average = " . "<b>".$ave."</b>" . "</td></tr>";
    }

function smallest_largestRow($num): void{
    echo "<tr><td colspan = '2' style = 'background-color: aqua;'><center><strong>The Smallest and Largest in each row</strong></center></td>";
    for ($i = 0; $i < count($num); ++$i) {
        $smallest = $num[$i][0];
        $largest = $num[$i][0];
        for ($j = 1; $j < count($num[$i]); ++$j) {
            if ($num[$i][$j] < $smallest) {
                $smallest = $num[$i][$j];
            }
            if ($num[$i][$j] > $largest) {
                $largest = $num[$i][$j];
            }
        }
        echo "<tr><td style='padding: 5px;'>Smallest of row " .($i + 1)  . " = " . "<b>".$smallest."</b>" . "</td>"    ;
        echo "<td style='padding: 5px;'>Largest of row " .($i + 1)  . " = " . "<b>".$largest."</b>" . "</td></tr>";
    }
}

function smallest_largestCol($num){
    echo "<tr><td colspan = '2' style = 'background-color: aqua;'><center><strong>The Smallest and Largest in each column</strong></center></td>";
    for ($i = 0; $i < count($num[0]); ++$i) {
        $smallest = $num[0][$i]; 
        $largest = $num[0][$i];             
        for ($j = 0; $j < count($num); ++$j) {
            if ($num[$j][$i] < $smallest) {
                $smallest = $num[$j][$i];
            }
            if ($num[$j][$i] > $largest) {
                $largest = $num[$j][$i];
            }
        }
        echo "<tr><td style='padding: 5px;'>Smallest of column " .($i + 1)  . " = " . "<b>".$smallest."</b>" . "</td>"    ;
        echo "<td style='padding: 5px;'>Largest of column " .($i + 1)  . " = " . "<b>".$largest."</b>" . "</td></tr>";
    }
}
function overallSumAve($num){
    echo "<tr><td colspan = '2' style = 'background-color: aqua;'><center><strong>Overall Sum and Average</strong></center></td>";
    $sum = 0;
    $count = 0;
    for ($i = 0; $i < count($num); ++$i) {      
        if (count($num[$i]) > 0) {  
        for ($j = 0; $j < count($num[$i]); ++$j) {
            $sum += $num[$i][$j];
            $count++;
            $average = $sum / $count;
        }
    }
}
echo "<tr><td style='padding: 5px;'>Overall Sum = "."<b>".$sum."</b>"."</td>";
echo "<td style='padding: 5px;'>Overall Sum = "."<b>".$average."</b>"."</td></tr>";
}
function overallSmallestLargest($num) {
    echo "<tr><td colspan = '2' style = 'background-color: aqua;'><center><strong>Overall Smallest and Largest numbers</strong></cetner></td>";
    $smallest = PHP_INT_MAX;
    $largest = PHP_INT_MIN; 

    for ($i = 0; $i < count($num); ++$i) {
        for ($j = 0; $j < count($num[$i]); ++$j) { 
            if ($num[$i][$j] < $smallest) {
                $smallest = $num[$i][$j];
            }
            if ($num[$i][$j] > $largest) {
                $largest = $num[$i][$j];
            }
        }
    }
    echo "<tr><td style='padding: 5px;'>Overall Smallest = " . "<b>".$smallest."</b>". "</td>";
    echo "<td style='padding: 5px;'>Overall Largest = " . "<b>".$largest."</b>". "</td></tr>";
}

// Call the row_sum function
row_sum($num);
col_sum($num);
SumAveDiagonals($num);
smallest_largestRow($num);
smallest_largestCol($num);
overallSumAve($num);
overallSmallestLargest($num);
echo "<br><br><br>";
echo "</table></center> ";
echo "<br><br>";
?>

        <div class = "Author1">
            <strong>Creator's Name: Clerene A. Agor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Created: 10/27/2024</strong>
        </div>
    </body>
</html>