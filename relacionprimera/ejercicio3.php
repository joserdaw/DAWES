<html>
<style>

  td, table{

    border: 1px solid black;


  }

</style>


<body>

<table>

  <?php

  $words=["Inglés", "Español","Door","puerta","Table","Mesa", "Car", "Coche", "Desktop",
  "Escritorio", "Smart", "Inteligente", "Chair", "Silla", "Mouse", "Ratón",
  "Bag", "Bolsa", "Driver", "Controlador","Wake up", "Despertar"];

  for ($i=0; $i < sizeof($words) ; $i++) {
    # code...
    echo "<tr><td>".$words[$i]."</td>";
    $i++;
    echo "<td>".$words[$i]."</td></tr>";

  }


   ?>
</table>
</body>

</html>
