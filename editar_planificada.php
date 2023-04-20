<?php
include 'modelo.php';

$id = $_GET['id_AP'];
$planificada = consultarPlanificada(); //$id_AP, $id_Usuario, $fecha_Registro, $nom_Responsable, $nom_Actividad, $nom_Cientifica, $estado, $municipio, $parroquia, $fecha_Actividad, $hora_Inicio, $hora_Final, $objetivo_Actividad, $descripcion_Actividad, $organizacion_Actividad)

include 'templates/header.php';
?>

<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Actividad Planificada</title>
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
    <link rel="stylesheet" href="css/responsive.css"> 
</head>

<body><br><br>
  <h2 align="center">REPORTE DE ACTIVIDADES FUNDACITE-MERIDA</h2>
  <div class="container-fluid col-12 col-sm-8 offset-sm-2">
  <div class="row1">
    <div class="col-75">
      <div class="container">
        <form action="modelo.php" method="GET">
        
          <div class="row1">
            <div class="col-50">
              <br>
              <label for="nom_Responsable"><i class="fa fa-user"></i>Indique nombres y apellidos del responsable de la Actividad</label>
              <input type="text" id="nom_Responsable" name="nom_Responsable" value="<?php echo($planificada['nom_Responsable']); ?>"><br>
              <label for="nom_Actividad"><i class="fa fa-envelope"></i> Nombre de la Actividad</label>
              <textarea name="nom_Actividad" id="nom_Actividad"  placeholder="....@exemplo.com"></textarea><br><br>
              <label>Seleccione a que ruta cientifica pertenece la actividad</label>
              <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="nom_Cientifica" value="Formacion en Ciencias Naturales">Formación en Ciencias Naturales
                </label>
              </div>
              <div class="form-check">
                  <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="nom_Cientifica" value="Producion Audiovisual">Producción Audiovisual
                  </label>
              </div>
              <div class="form-check disabled">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="nom_Cientifica" value="Formacion Socio-Productiva">Formación Socio-Productiva
                  </label>
              </div> 
              <div class="form-check disabled">
                  <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="nom_Cientifica" value='Otra'>Otra
                  </label>
              </div> 
              <br>
              <label>Indique donde se desarrolla la actividad, Parroquia, Municipio y Estado</label>
              <div class="row1">
                <div class="col-50">
                  <label for="estado" >Estado</label>
                  <select id="estado" name="estado" class="form-control"> 
                    <option>-Seleccionar-</option>
                    <option value="Amazonas">Amazonas</option>
                    <option value="Anzoategui">Anzoategui</option>
                    <option value="Apure">Apure</option>
                    <option value="Aragua">Aragua</option>  
                    <option value="Barinas">Barinas</option>
                    <option value="Bolívar">Bolivar</option>
                    <option value="Carabobo">Carabobo</option>
                    <option value="Cojedes">Cojedes</option>
                    <option value="Delta Amacuro">Delta Amacuro</option>
                    <option value="Distrito Capital">Distrito Capital</option>
                    <option value="Falcón">Falcón</option>
                    <option value="Guárico">Guárico</option>
                    <option value="Lara">Lara</option>
                    <option value="Mérida">Mérida</option>
                    <option value="Miranda">Miranda</option>
                    <option value="Monagas">Monagas</option>
                    <option value="Nueva Esparta">Nueva Esparta</option>
                    <option value="Portuguesa">Portuguesa</option>
                    <option value="Sucre">Sucre</option>
                    <option value="Táchira">Táchira</option>
                    <option value="Trujillo">Trujillo</option>
                    <option value="La Guaira">La Guaira</option>
                    <option value="Yaracuy">Yaracuy</option>
                    <option value="Zulia">Zulia</option>
                  </select>
                </div>
                <div class="col-50">
                  <label for="municipio">Municipio:</label>
                  <select id="municipio" name="municipio" class="form-control">
                    <option>-Seleccionar-</option>
                    <option value="Alberto Adriani">Alberto Adriani</option>
                    <option value="Andrés Bello">Andrés Bello</option>
                    <option value="Antonio Pinto Salinas">Antonio Pinto Salinas</option>
                    <option value="Aricagua">Aricagua</option>
                    <option value="Arzobispo Chacón">Arzobispo Chacón</option>
                    <option value="Campo Elías">Campo Elías</option>
                    <option value="Caracciolo Parra Olmedo">Caracciolo Parra Olmedo</option>
                    <option value="Cardenal Quintero">Cardenal Quintero</option>
                    <option value="Guaraque">Guaraque</option>
                    <option value="Julio César Salas">Julio César Salas</option>
                    <option value="Justo Briceño">Justo Briceño</option>
                    <option value="Libertador">Libertador</option>
                    <option value="Miranda">Miranda</option>
                    <option value="Obispo Ramos de Lora">Obispo Ramos de Lora</option>
                    <option value="Padre Noguera">Padre Noguera</option>
                    <option value="Pueblo Llano">Pueblo Llano</option>
                    <option value="Rangel">Rangel</option>
                    <option value="Rivas Dávila">Rivas Dávila</option>
                    <option value="Santos Marquina">Santos Marquina</option>
                    <option value="Sucre">Sucre</option>
                    <option value="Tovar">Tovar</option>
                    <option value="Tulio Febres Cordero">Tulio Febres Cordero</option>
                    <option value="Zea">Zea</option>
                  </select>
                </div>
                <div class="col-50">
                  <label  for="parroquia">Parroquia:</label>  
                  <select id="parroquia" name="parroquia"  class="form-control"> 
                    <option>-Seleccionar-</option>
                    <option value="1">Ciudad I</option>
                    <option value="2">Ciudad II</option>
                    <option value="3">Ciudad III</option>
                    <option value="4">Ciudad VI</option>
                  </select><br>
                </div>
              </div>
           <label for="fecha_Actividad">Indique fecha de la actividad (Dia/Mes/Año)</label>
            <div class="md-form md-outline input-with-post-icon datepicker">
            <input placeholder="Fecha a Realizar la Actividad" type="date" id="fecha_Actividad" name="fecha_Actividad" class="form-control">
            </div>
            <br>
            <label for="hora_Inicio & hora_Final">Indique hora de la actividad (Hora de inicio y hora de culminacion)</label>
            <input type="time" id="hora_Inicio" name="hora_Inicio"> <input type="time" id="hora_Final" name="hora_Final"> 
            <br><br>
            <label for="objetivo_Actividad">Objetivo de la actividad (Recuerde que debe estar redactado en infinitivo)</label>
            <textarea style="width: 900px; height: 150px;" id="objetivo_Actividad" name="objetivo_Actividad" required/></textarea>
            <br><br>
            <label for="descripcion_Actividad">Breve descripcion de la actividad</label>
            <textarea style="width: 900px; height: 150px;" id="descripcion_Actividad" name="descripcion_Actividad" required/></textarea>
            <br><br>
            <label for="organizacion_Actividad">Seleccione quién organiza la actividad</label>
            <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" id="organizacion_Actividad" name="organizacion_Actividad" value="FUNDACITE-MERIDA">Fundacite-Merida
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                <input type="radio" class="form-check-input" id="organizacion_Actividad" name="organizacion_Actividad" value='Otra institución'>Otra institución
                </label>
            </div><br><br>
          <div align="center">
          <input type="submit" value="Cancelar" class="btn" name="btn_cerrar">
          <input type="hidden" name='accion_ingreso' value='nuevo_P'>
          <button type="submit" class="btn btn-primary mb-2">
                            Enviar
                        </button> 
          </div>
        </form>
      </div>
    </div>
  </body>
</html>