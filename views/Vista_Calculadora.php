<?php
echo "<link rel='stylesheet' type='text/css' href='../css/bootstrap.min.css'>
      <link rel='stylesheet' type='text/css' href='../css/stylish-portfolio.css'>";
echo "
        
             <form action='controllers/Controlador_Calculadora.php' method='post' class='form center'>
               <label class='control-label'>Ingresa tu peso:</label>
                <div class='input-group'>
                      <input type='text' class='form-control' id='peso' name='peso' placeholder='Peso'>
                       <span class='input-group-addon'>kg</span>
                 </div>
                 <br>
                 <label class='control-label'>Ingresa tu estatura:</label>
                <div class='input-group'>
                      <input type='text' class='form-control' id='estatura' name='estatura' placeholder='Estatura'>
                       <span class='input-group-addon'>mt</span>
                 </div>
                  <br>
                  <div class='input-group text-center'>
                 <input type='submit' name='calcular' class='btn btn-primary' value='Calcular'>
                  </div>
             </form>";
?>
