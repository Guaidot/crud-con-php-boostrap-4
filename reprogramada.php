<?php include 'templates/header.php'?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ACTIVIDADES REPROGRAMADAS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>
<body>
  <h2 align="center">REPORTE DE ACTIVIDADES REPROGRAMADAS FUNDACITE-MERIDA</h2>
  <div class="container-fluid col-12 col-sm-8 offset-sm-2">
  <div class="row1">
    <div class="col-75">
      <div class="container">
        <form action="modelo.php" method="GET">
        
          <div class="row1">
            <div class="col-50">
              <br>
              <label>Indique fecha de la reprogramacion (Mes/Dia/Año)</label>
				<input type="date" name="fecha_ActividadR">
				<br><br>
				<label>Indique hora de la actividad (Hora de inicio y hora de culminacion)</label>
				<input type="time" name="hora_InicioR"> <input type="time" name="hora_FinalR"> 
				<br><br>
				<label for="observacionesR">Motivo de la Reprogramacion</label>
				<textarea style="width: 900px; height: 80px;" name="observacionesR" required/></textarea><br><br>
          <div align="center">
          <input type="submit" value="Limpiar" class="btn">
          <input type="submit" value="Cancelar" class="btn">
          <input type="hidden" name='accion_ingreso' value='nuevo_R'>
          <button type="submit" class="btn btn-primary mb-2">
              Enviar
          </button> 
          </div>
        </form>
      </div>
    </div>
  </body>
</html>