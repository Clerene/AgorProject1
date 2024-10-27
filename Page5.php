<html>
    <head>
        <title>Page 5</title>
        <link rel="stylesheet" href="Page1.css">
    </head>
    <body>
    <strong><a href="index.html">Return to Main Page</a></strong><br><br><br><br>
    <?php
    define("PI", 3.14);
    define("SPEED_OF_LIGHT", 299792458 . " m/s");
    define("GRAVITY",  9.81 . " m/s² ");
    define("EULER",  2.71828);
    define("AVOGADRO",  6.022 . ' x ' . 10 . '<sup>23</sup>'. " mol<sup>-1</sup>");
    define("PLANCKS_CONSTANT",  6.626  . ' x ' . 10 . '<sup>-34</sup>' . " J s");
    define("ELEMENTARY_CHARGE",  1.602  . ' x ' . 10 . '<sup>-19</sup>' . " C ");
    define("RYDBERG_CONSTANT",  1.097373  . ' x ' . 10 . '<sup>7</sup>' . " m<sup>-1</sup>");
    define("PROTON_MASS",  1.6726  . ' x ' . 10 . '<sup>-27</sup>' . " kg ");
    define("ELECTRON_MASS",  9.109  . ' x ' . 10 . '<sup>-31</sup>' . " kg ");


    echo "<center>";
    echo "<table border = '3' width = '750'>";
    echo "<tr>";
    echo "<td style='padding: 4px; background-color: yellow;' ><center><strong>Constant Values</strong></center></td>";
    echo "<td style='padding: 4px; background-color: yellow;'><center><strong>Examples</strong></center></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style='padding: 4px;'><center><b>PI &nbsp;&nbsp;π = " . PI ."</b></center></td>";
    echo "<td style='padding: 4px; background-color: #80ffff;'>π = 3.14<br>radius = 5<br>circumference = 2 * π * radius<br>The circumference is 31.4<br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style='padding: 4px;'><center><b>SPEED OF LIGHT &nbsp;&nbsp;c = " . SPEED_OF_LIGHT . "</b></center></td>";
    echo "<td style='padding: 4px; background-color: #80ffff;'>c = 299792458 m/s<br>time = 3 s<br>distance = c * time<br>Light travels 899377374 meters in 3 seconds<br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style='padding: 4px;'><center><b>GRAVITY&nbsp;&nbsp; g = " . GRAVITY . "</b></center></td>";
    echo "<td style='padding: 4px; background-color: #80ffff;'>g = 9.81 m/s²<br>mass = 10 kg<br>
    weight = mass * g<br>Weight: 98 N</mark><br></td>";
    echo "<tr>";
    echo "<td style='padding: 4px;'><center><b>EULER &nbsp;&nbsp;e = " . EULER . "</b></center></td>";
    echo "<td style='padding: 4px; background-color: #80ffff;'>e = 2.71828<br>x = 2<br>
    exponential_growth = e<sup>x</sup><br>Exponential growth: 7.3890461584</mark><br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style='padding: 4px;'><center><b>AVOGADRO&nbsp;&nbsp; N<sub>A</sub> = " . AVOGADRO . "</b></center></td>";
    echo "<td style='padding: 4px; background-color: #80ffff;'>N<sub>A</sub> = 6.022e23 mol<sup>-1</sup><br>moles = 4<br>molecules = moles * N<sub>A</sub><br>Molecules: 2.4088e24</mark><br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style='padding: 4px;'><center><b>PLANCKS CONSTANT&nbsp;&nbsp; h = " . PLANCKS_CONSTANT . "</b></center></td>";
    echo "<td style='padding: 4px; background-color: #80ffff;'>h = 6.626e-34 J s<br>frequency = 5e14 Hz<br>energy = h * frequency<br>Energy: 3.313e-19</mark><br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style='padding: 4px;'><center><b>ELEMENTARY CHARGE&nbsp;&nbsp; e = " . ELEMENTARY_CHARGE . "</b></center></td>";
    echo "<td style='padding: 4px; background-color: #80ffff;'>e = 1.602e-19 C<br>electrons = 2<br>total_charge = electrons * e<br>Toltal charge: 3.204e-19<br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style='padding: 4px;'><center><b>ELEMENTARY CHARGE &nbsp;&nbsp;R<sub>H</sub> = " . RYDBERG_CONSTANT . "</b></center></td>";
    echo "<td style='padding: 4px; background-color: #80ffff;'>R<sub>H</sub> = 1.097373e7 m<sup>-1</sup><br>n1 = 2<br>
    n2 = 5<br>wavelength = 1 / (R<sub>H</sub> * (1/n1<sup>2</sup> - 1/n2<sup>2</sup>))<br>Wavelength transition: 4.33936753e-7</mark><br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style='padding: 4px;'><center><b>PROTON MASS &nbsp;&nbsp;m<sub>p</sub> = " . PROTON_MASS . "</b></center></td>";
    echo "<td style='padding: 4px; background-color: #80ffff;'>m<sub>p</sub> = 1.6726e-27 kg<br>AVOGADRO = 6.022e23 mol<sup>-1</sup><br>Mass of proton = m<sub>p</sub> * AVOGADRO<br>Mass of proton: 0.00100723972 kg</mark><br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td style='padding: 4px;'><center><b>ELECTRON MASS&nbsp;&nbsp;m<sub>e</sub> = " . ELECTRON_MASS . "</b></center></td>";
    echo "<td style='padding: 4px; background-color: #80ffff;'>m<sub>e</sub> = 9.109e-31 kg<br>Number of electrons = 5<br>total_mass = number of electrons * m<sub>e</sub><br>Total mass: 4.5545e-30 kg</mark><br></td>";
    echo "</tr>";
    echo "</table><br><br>";
    echo "</center>";
    ?>
     <div class = "Author1">
            <strong>Creator's Name: Clerene A. Agor&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date Created: 10/17/2024</strong>
        </div>
    </body>
</html>