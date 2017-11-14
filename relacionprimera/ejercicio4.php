<html>
<style>

 html{font-family: Arial}

  td, table, tr, th{

    border: 3px solid black;
    text-align: center;

  }

  td{padding: 7px}

  th{border: 3px solid black}

  #DWES{background-color: red;}

  #HLC{ background-color: blue; color: WHITE}

  #R, #E, #CR, #O{color: WHITE; background-color: BLACK;}

  #DWEC{background-color: YELLOW;}

  #DIW{background-color: GREEN; color: WHITE}

  #EIE{background-color: PURPLE; color: WHITE}

  #DAW{background-color: CYAN}

  #cabecera{background-color: #d8ff3f; }

</style>


<body>

<table>

  <?php

  $dias=["Lunes","Martes","Miércoles","Jueves","Viernes"];
  $horas=[["DWES","DWES","HLC", "R","DWEC","DWEC","DWEC"],
          ["DIW", "DIW","DIW", "E", "DWES", "DWES","DWES"],
          ["DIW","DIW","EIE","CR","EIE","DAW","DAW"],
          ["DAW","EIE","DIW", "E", "DWES","DWES","DWES"],
          ["DWEC","DWEC","DWEC", "O","EIE","HLC","HLC"]];


  echo "<tr>";

  for ($i=0; $i < sizeof($dias) ; $i++) {
    echo "<th id=\"cabecera\">".$dias[$i]."</th>";
  }

  echo "</tr>";


  for ($i=0; $i < 7; $i++) {

    echo "<tr>";

    for ($s=0; $s < 5; $s++) {

      echo "<td id=".$horas[$s][$i].">".$horas[$s][$i]."</td>";

    }
    echo "</tr>";
  }


   ?>
</table>
</body>

</html>
