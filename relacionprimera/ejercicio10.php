<html>
<style>



</style>


<body>

<table>

  <?php

      $aste="*";
      $espacio="&nbsp";
      $huecos=4;
      $numaste=1;

      for ($i=0; $i < 5; $i++) {

        for ($z=0; $z <$huecos ; $z++) {
          echo $espacio;
        }

        for ($p=0; $p < $numaste; $p++) {
          echo $aste;
        }
        echo "<br>";

        $numaste+=2;
        $huecos--;
      }


   ?>
</table>
</body>

</html>
