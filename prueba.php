<?php
    include 'modelo.php';
    $alumnos = mostrarAlumnos();

    $tipo = $_SESSION['nivel_Acceso'];
?>


<div id='centro'>
    <h1>ACTIVIDADES PLANIFICADAS</h1>

    <table id="alumnos">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE ACTIVIDAD</th>
                <th>RESPONSABLE ACTIVIDAD</th>
                <th>FECHA REGISTRO</th>
                <th colspan="2">ACCIONES</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach($alumnos as $fila){ ?>
            <tr>
                <td><?= $fila['id_AP']?></td>
                <td><?= $fila['nom_Actividad']?></td>
                <td><?= $fila['nom_Responsable']?></td>
                <td><?= $fila['fecha_Registro']?></td>
                <td style='text-align:center;'><a href="<?='editar_planificada.php?id=' . $fila['id_AP']?>">EDITAR DATOS</a>
                </td>
                <?php if($tipo=='1'){?>
                <td style='text-align:center;'><a href="<?='modelo.php?id=' . $fila['id_AP'] . '&accion=' . 'eliminar'?>">ELIMINAR</a></td>
                <?php } ?>
            </tr>
            <?php } ?>

        </tbody>
    </table>
</div>
