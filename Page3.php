<html>
    <head>
        <title>Page 3</title>
        <link rel="stylesheet" href="Page1.css">
    </head>
    <body>
        <strong><a href="index.html">Return to Main Page</a></strong><br><br>
        <?php
        function midterm($midtermQuizzes, $midtermProject, $midtermExam){
            $midtermGrade = ($midtermQuizzes * .30) + ($midtermProject * .20) + ($midtermExam * .50);
            return $midtermGrade;
        }
        function tentative($tentativeQuizzes, $tentativeProject, $tentativeExam){
            $tentativeGrade = ($tentativeQuizzes * .30) + ($tentativeProject * .20) + ($tentativeExam * .50);
            return $tentativeGrade;
        }

        function finals($midtermGrade, $tentativeGrade){
            $finalGrade = ($midtermGrade + $tentativeGrade) / 2;
            return $finalGrade;
        }
        $midtermQuiz1 = 40;
        $midtermQuiz2 = 20;
        $midtermQuiz3 = 25;
        $midtermQuizzes = ($midtermQuiz1 + $midtermQuiz2 + $midtermQuiz3) / 3;
        $midtermProject1 = 92;
        $midtermExam = 88;
        $midtermGrade = midterm($midtermQuizzes, $midtermProject1, $midtermExam);echo "<br>";
        $tentativeQuiz1 = 20;
        $tentativeQuiz2 = 20;
        $tentativeQuiz3 = 20;
        $tentativeQuizzes = ($tentativeQuiz1 + $tentativeQuiz2 + $tentativeQuiz3) / 3;
        $tentativeProject1 = 86;
        $tentativeProject2 = 90;
        $tentativeProject = ($tentativeProject1 + $tentativeProject2) / 2;
        $tentativeExam = 90;
        $tentativeGrade = tentative($tentativeQuizzes, $tentativeProject, $tentativeExam);echo "<br>";
        $finalGrades = finals($midtermGrade, $tentativeGrade);echo "<br>";
        echo "<center>";
        echo "<table border='5' style='border-spacing: 3px;'>";        
        echo "<tr>";
        echo "<td colspan = 7 rowspan = 3><b><center>Midterm</center></b>";
        echo "</tr>";
        echo "<tr>";
        echo "<td style='height: 100px; width: 50px;'><b>Quiz 1</b></td>";
        echo "<td><b>Quiz 2</b></td>";
        echo "<td><b>Quiz 3</b></td>";
        echo "<td><b>Project 1</b></td>";
        echo "<td><b>Midterm Exam</b></td>";
        echo "<td><b>Midterm Grade</b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td style = 'background-color: yellow;'><b><center>40</center></b></td>";
        echo "<td  style = 'background-color: yellow;'><b><center>20</center></b></td>";
        echo "<td style = 'background-color: yellow;'><b><center>25</center></b></td>";
        echo "<td style = 'background-color: yellow;'><b><center>92</center></b></td>";
        echo "<td style = 'background-color: yellow;'><b><center>88</center></b></td>";
        echo "<td style = 'background-color: yellow;'><b><center>$midtermGrade</center></b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td colspan = 7 rowspan = 3><b><center>Tentative Final</center></b>";
        echo "</tr>";
        echo "<tr>";
        echo "<td style='height: 100px; width: 50px;'><b>Quiz 1</b></td>";
        echo "<td><b>Quiz 2</b></td>";
        echo "<td><b>Quiz 3</b></td>";
        echo "<td><b>Project 1</b></td>";
        echo "<td><b>Project 2</b></td>";
        echo "<td><b>Tentative Exam</b></td>";
        echo "<td><b>Tentative Grade</b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td style = 'background-color: yellow;'><b><center>20</center></b></td>";
        echo "<td style = 'background-color: yellow;'><b><center>20</center></b></td>";
        echo "<td style = 'background-color: yellow;'><b><center>20</center></b></td>";
        echo "<td style = 'background-color: yellow;'><b><center>86</center></b></td>";
        echo "<td style = 'background-color: yellow;'><b><center>90</center></b></td>";
        echo "<td style = 'background-color: yellow;'><b><center>90</center></b></td>";
        echo "<td style = 'background-color: yellow;'><b><center>$tentativeGrade</center></b></td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td colspan = 7 rowspan = 3><b><center>Final Grade</center></b>";
        echo "</tr>";
        echo "<tr>";
        echo "<td colspan = 7 style='height: 50px; width: 50px; background-color:#FF474D;'><b><center><center>$finalGrades</center></center></b></td>";
        echo "</tr>";
        echo "</table>";
        echo "<center>";
        ?>
         <div class = "Author1">
            <strong>Creator's Name: Clerene A. Agor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Created: 10/10/2024</strong>
        </div>
</body>
</html>     