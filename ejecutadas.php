<?php include 'templates/header.php'?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ACTIVIDADES EJECUTADAS</title>
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
  <h2 align="center">REPORTE DE ACTIVIDADES EJECUTADAS FUNDACITE-MERIDA</h2>
  <div class="container-fluid col-12 col-sm-8 offset-sm-2">
  <div class="row1">
    <div class="col-75">
      <div class="container">
        <form action="modelo.php" method="GET">
        
          <div class="row1">
            <div class="col-50">
              <br>
              <div class="custom-control custom-radio custom-control-inline">
              <label >Indique hora de la actividad (Hora de inicio y hora de culminacion)</label></div>
	            <input type="time" name="hora_InicioE"> <input type="time" name="hora_FinalE"> 
	            <br><br>
	            <div class="custom-control custom-radio custom-control-inline">
	            <label>Número de personas beneficiadas</label></div>
				<input type ="number" name="num_Beneficiarios" style ="width: 100px; height: 25px">
				<br><br>
				<label>Bien o servicio que se entrega</label>
				<textarea style="width: 900px; height: 80px;" name="serv_Entregado" required/></textarea><br><br>
				<label>Unidad de medida</label>
				<textarea style="width: 900px; height: 80px;" name="unidad_Medida" required/></textarea><br><br>
				<label>Conclusiones</label>
				<textarea style="width: 900px; height: 80px;" name="conclusiones" required/></textarea><br><br>
				<label>Acuerdos</label>
				<textarea style="width: 900px; height: 80px;" name="acuerdos" required/></textarea><br><br>
				<label>Observaciones</label>
				<textarea style="width: 900px; height: 80px;" name="observaciones" required/></textarea><br><br>
<!--				<label>Adjunte fotografias de la actividad</label><br>
				<div class="custom-control custom-radio custom-control-inline">
				<input type="file" name="imagensubida" accept="image/png, .jpeg, .jpg, image/gif" >
				<input style="width:120px; height:30px" type="submit" value="Enviar datos">
				</div><br><br> -->
          <div align="center">
          <input type="submit" value="Limpiar" class="btn">
          <input type="submit" value="Cancelar" class="btn">
          <input type="hidden" name='accion_ingreso' value='nuevo_E'>
          <button type="submit" class="btn btn-primary mb-2">
                  Enviar
          </button> 
          </div>
        </form>
      </div>
    </div>
  </body>
</html>