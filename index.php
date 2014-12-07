<!DOCTYPE html>
<html lang="en">

<head>
    <title>MY BMI</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    
</head>

<body onload="fade('tabla');">
    <!-- Header -->
    <header id="top" class="header">
        <div class="text-vertical-center">
            <h1>Calcula tu IMC</h1>
            <h3>Conoces tu indice de masa corporal?</h3>
            <br>
            <div class='container'>
                <div class='col-md-4 col-md-offset-4'>
                    <div class='panel panel-default'>
                       <div class='panel-body'>
                        <div id='calculadora'>                
                            <?php require("views/Vista_Calculadora.php"); ?>
                        </div>
                    </div>                    
                </div>
                <button type="button" class="btn btn-default" onclick="toggle_visibility('tabla')">Ocultar/Mostrar Tabla</button>
            </div>                    
            <div class='col-md-8 col-md-offset-2'>
                <div id='tabla'>
                    <div class='panel panel-default'>
                       <div class='panel-body'>

                        <table class="table table-striped">
                           <thead>
                            <tr>
                              <th class="text-center">BMI</th>
                              <th class="text-center">Clasificacion</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>Menor a 18 </td>
                            <td>Peso bajo. Necesario valorar signos de nutricion</td>
                        </tr>
                        <tr>
                            <td>18 a 24.9 </td>
                            <td>Peso normal</td>
                        </tr>
                        <tr>
                            <td>25 a 26.9</td>
                            <td>Sobrepeso</td>
                        </tr>
                        <tr>
                            <td>27 a 29.9</td>
                            <td>Obesidad grado I. Riesgo relativo alto para desarrollar enfermedades
                                cardiovasculares</td>
                            </tr>
                            <tr>
                                <td>30 a 39.9</td>
                                <td>Obesidad grado II. Riesgo relativo muy alto para desarrollar enfermedades
                                    cardiovasculares</td>
                                </tr>
                                <tr>
                                    <td>30 a 39.9</td>
                                    <td>Obesidad grado III. Riesgo relativo extremadamente alto para desarrollar enfermedades
                                        cardiovasculares</td>
                                    </tr>
                                </tbody>
                            </table>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->

    <script type="text/javascript">

    function fade (id) {
       var e = document.getElementById(id);
        e.style.display = 'none';
    }

    function toggle_visibility(id) {
        var e = document.getElementById(id);
        if(e.style.display == 'block')
            e.style.display = 'none';
        else
            e.style.display = 'block';
    }

   

    </script

    </body>

    </html>
