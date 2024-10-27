<html>
    <head>
        <title>Page 9</title>
        <link rel="stylesheet" href="Page1.css">
    </head>
    <body>
    <strong><a href="index.html">Return to Main Page</a></strong><br><br><br><br>
        <?php
  $people = [
      ["name" => "Clerene", "age" => "21", "sex" => "Male", "nationality" => "Filipino"],
      ["name" => "John", "age" => "22", "sex" => "Male", "nationality" => "Filipino"],
      ["name" => "Lucy", "age" => "20", "sex" => "Female", "nationality" => "Filipino"],
      ["name" => "Andie", "age" => "18", "sex" => "Male", "nationality" => "Filipino"],
      ["name" => "Dianne", "age" => "19", "sex" => "Female", "nationality" => "Filipino"],
      ["name" => "Jacie", "age" => "21", "sex" => "Male", "nationality" => "Filipino"],
      ["name" => "Marry", "age" => "19", "sex" => "Female", "nationality" => "Filipino"],
      ["name" => "Jose", "age" => "22", "sex" => "Male", "nationality" => "Filipino"],
      ["name" => "Josephine", "age" => "23", "sex" => "Female", "nationality" => "Filipino"],
      ["name" => "Jay", "age" => "20", "sex" => "Male", "nationality" => "Filipino"],
      ["name" => "Noel", "age" => "21", "sex" => "Male", "nationality" => "Filipino"],
  ];

  echo "<center><table border='3' width='800px'>"; 
  echo "<tr><td colspan = '4'style='background-color: ffc8d2;'><center><strong>Unsorted Lists</strong></center></td></tr>";
  echo "<tr><td><b><center>Name</center></b></td>
        <td><b><center>Age</center></b></td>
        <td><b><center>Sex</center></b></td>
        <td><b><center>Nationality</center></b></td></tr>";
        function displayArray($people) {
            foreach($people as $p) {
                echo "<tr><td style='padding: 5px;'>".$p['name']."</td>".
               "<td style='padding: 5px;'>".$p['age']."</td>".
               "<td style='padding: 5px;'>".$p['sex']."</td>".
               "<td style='padding: 5px;'>".$p['nationality']."</td></tr>";
            }
        }
        function sortArray($people) {
            $length = count($people);
            for ($i = 0; $i < $length - 1; $i++) {
                for ($j = 0; $j < $length - 1 - $i; $j++) {
                    if (strcmp($people[$j]['name'], $people[$j + 1]['name']) > 0) {
                        $temp = $people[$j];
                        $people[$j] = $people[$j + 1];
                        $people[$j + 1] = $temp;
                    }
                }
            }
            return $people;
        }
        displayArray($people);  
        echo "<tr><td colspan = '4'style='background-color: ffc8d2;'><center><strong><mark  style='background-color: ffc8d2;'>Sorted Lists</mark></strong></center></td></tr>";
        echo "<tr><td><b><center>Name</center></b></td>
        <td><b><center>Age</center></b></td>
        <td><b><center>Sex</center></b></td>
        <td><b><center>Nationality</center></b></td></tr>";
        displayArray(sortArray($people));  
        echo "</table></center><br><br><br>";
        ?>
        
        <div class = "Author1">
            <strong>Creator's Name: Clerene A. Agor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Created: 10/23/2024</strong>
        </div>
    </body>
</html>