<?php
      include_once 'controllers/Controlador_Calculadora.php';
echo "<link rel='stylesheet' type='text/css' href='../css/bootstrap.min.css'>
      <link rel='stylesheet' type='text/css' href='../css/stylish-portfolio.css'>";

      if ($imc<18) {
          echo " <div class='alert alert-warning' id='alerta'>Peso bajo, tu IMC es:$imc</div>";        
      }
      if ($imc >= 18 or $imc <=26.9) {
        echo " <div class='alert alert-success' id='alerta'>Peso normal, tu IMC es:$imc</div>";
      }
      if ($imc >= 27 or $imc <=29.9) {
        echo " <div class='alert alert-warning' id='alerta'>Sobrepeso, tu IMC es:$imc</div>";
      }
      if ($imc >= 30 or $imc <=39.9) {
        echo " <div class='alert alert-danger' id='alerta'>Obesidad grado I, tu IMC es:$imc</div>";
      }
      if ($imc >= 27 or $imc <=29.9) {
        echo " <div class='alert alert-danger' id='alerta'>Obesidad grado II, tu IMC es:$imc</div>";
      }
      if ($imc >= 40) {
        echo " <div class='alert alert-danger' id='alerta'>Obesidad grado III, tu IMC es:$imc</div>";
      }

?>