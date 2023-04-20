<?php
include 'conexion.php';
include 'security.php';

$conexion = conectar();//en conexion.php

$accion = NULL;

if(isset($_GET['accion_ingreso'])){
    $accion = $_GET['accion_ingreso'];
}

if(isset($_POST['accion_ingreso'])){
    $accion = $_POST['accion_ingreso'];
}

switch($accion){
    case 'nuevo_R':
   //     $id_AE = 200;///($_GET['id_Usuario']);
        $id_AP = 5;
        $fecha_RegistroR = '2023-04-01';
        $fecha_ActividadR = ($_GET['fecha_ActividadR']);
        $hora_InicioR = ($_GET['hora_InicioR']);
        $hora_FinalR = ($_GET['hora_FinalR']);
        $observacionesR = strtoupper($_GET['observacionesR']);
        reprogramada($id_AP, $fecha_RegistroR, $fecha_ActividadR, $hora_InicioR, $hora_FinalR, $observacionesR); 
        break;
    case 'nuevo_E':
   //     $id_AE = 200;///($_GET['id_Usuario']);
        $id_AP = 5;
        $hora_InicioE = ($_GET['hora_InicioE']);
        $hora_FinalE = ($_GET['hora_FinalE']);
        $num_Beneficiarios= ($_GET['num_Beneficiarios']);
        $serv_Entregado = strtoupper($_GET['serv_Entregado']);
        $unidad_Medida = strtoupper($_GET['unidad_Medida']);
        $conclusiones = strtoupper($_GET['conclusiones']);
        $acuerdos = strtoupper($_GET['acuerdos']);
        $observaciones = strtoupper($_GET['observaciones']);
        ejecutada($id_AP, $hora_InicioE, $hora_FinalE, $num_Beneficiarios, $serv_Entregado, $unidad_Medida, $conclusiones, $acuerdos, $observaciones); 
        break;
    case 'nuevo_P':
       // $id_AP =1;// $_GET['id_AP'];
        $id_Usuario = 200;///($_GET['id_Usuario']);
        $fecha_Registro = '2023-04-01';
        $nom_Responsable = strtoupper($_GET['nom_Responsable']);
        $nom_Actividad = strtoupper($_GET['nom_Actividad']);
        $nom_Cientifica = strtoupper($_GET['nom_Cientifica']);
        $estado = strtoupper($_GET['estado']);
        $municipio = strtoupper($_GET['municipio']);
        $parroquia = strtoupper($_GET['parroquia']);
        $fecha_Actividad = strtoupper($_GET['fecha_Actividad']);
        $hora_Inicio = ($_GET['hora_Inicio']);
        $hora_Final = ($_GET['hora_Final']);
        $objetivo_Actividad = strtoupper($_GET['objetivo_Actividad']);
        $descripcion_Actividad = strtoupper($_GET['descripcion_Actividad']);
        $organizacion_Actividad = strtoupper($_GET['organizacion_Actividad']);
        planificada($id_Usuario, $fecha_Registro, $nom_Responsable, $nom_Actividad, $nom_Cientifica, $estado, $municipio, $parroquia, $fecha_Actividad, $hora_Inicio, $hora_Final, $objetivo_Actividad, $descripcion_Actividad, $organizacion_Actividad);        
        break;
    case 'ingreso':
        $usuario = validar($_POST['usuario']);
        $password = validar($_POST['password']);
        verificarIngreso($usuario, $password);
        break;
}

function eliminarAlumno($id){   
    $resultado = [
        'error' =>false,
        'mensaje' => ''
    ];
    
    global $conexion;
   
   try{
        
        $sql = 'DELETE FROM actividad_planificada WHERE id_AP = ?';
        $st = $conexion->prepare($sql);
        $st->bindParam(1, $id_AP);
        $st->execute();        
    }catch(PDOException $e){
        $resultado['error'] = true;
        $resultado['mensaje'] = $e->getMessage();
    }
    header('location:principal.php');
}

function consultarPlanificada(){   
    $resultado = [
        'error' =>false,
        'mensaje' => ''
    ];
        echo '$fecha_Registro';
    global $conexion;

    try{
        echo '$fecha_Registro';
        $sql = 'SELECT id_AP, id_Usuario, fecha_Registro, nom_Responsable, nom_Actividad, nom_Cientifica, estado, municipio, parroquia, fecha_Actividad, hora_Inicio, hora_Final, objetivo_Actividad, descripcion_Actividad, organizacion_Actividad FROM actividad_planificada WHERE id_AP = ?, id_Usuario=?, fecha_Registro=?, nom_Responsable=?, nom_Actividad=?, nom_Cientifica=?, estado=?, municipio=?, parroquia=?, fecha_Actividad=?, hora_Inicio=?, hora_Final=?, objetivo_Actividad=?, descripcion_Actividad=?, organizacion_Actividad=?';
        $st = $conexion->prepare($sql);
            $st->bindParam(1, $id_AP);
            $st->bindParam(2, $id_Usuario);
            $st->bindParam(3, $fecha_Registro);
            $st->bindParam(4, $nom_Responsable);
            $st->bindParam(5, $nom_Actividad);
            $st->bindParam(6, $nom_Cientifica);
            $st->bindParam(7, $estado);
            $st->bindParam(8, $municipio);
            $st->bindParam(9, $parroquia);
            $st->bindParam(10, $fecha_Actividad);
            $st->bindParam(11, $hora_Inicio);
            $st->bindParam(12, $hora_Final);
            $st->bindParam(13, $objetivo_Actividad);
            $st->bindParam(14, $descripcion_Actividad);
            $st->bindParam(15, $organizacion_Actividad);
            $st->execute();
        echo '$fecha_Registro';
        $planificada = $st->fetch(PDO::FETCH_ASSOC);    
    }catch(PDOException $e){
        $resultado['error'] = true;
        $resultado['mensaje'] = $e->getMessage();
    }
    return $planificada;
    }

function mostrarAlumnos(){   
    $resultado = [
        'error' =>false,
        'mensaje' => ''
    ];

    global $conexion;

    try{
        
        $sql = 'SELECT id_AP, nom_Actividad, nom_Responsable, fecha_Registro FROM actividad_planificada ORDER BY id_AP';
        $st = $conexion->prepare($sql);
        $st->execute();
        $alumnos = $st->fetchAll();        
    }catch(PDOException $e){
        $resultado['error'] = true;
        $resultado['mensaje'] = $e->getMessage();
    }
    return $alumnos;
}

function reprogramada($id_AP, $fecha_RegistroR, $fecha_ActividadR, $hora_InicioR, $hora_FinalR, $observacionesR){
    $resultado = [
        'error' =>false,
        'mensaje' => ''
    ];

        echo "entro";
        global $conexion;

        try{
             $sql = 'INSERT INTO actividad_reprogramada(id_AP, fecha_RegistroR, fecha_ActividadR, hora_InicioR, hora_FinalR, observacionesR) VALUES (?,?,?,?,?,?)';
            
            $st = $conexion->prepare($sql);
            $st->bindParam(1, $id_AP);
            $st->bindParam(2, $fecha_RegistroR);
            $st->bindParam(3, $fecha_ActividadR);
            $st->bindParam(4, $hora_InicioR);
            $st->bindParam(5, $hora_FinalR);
            $st->bindParam(6, $observacionesR);
            $st->execute();
           header('location:index.php');    
        }catch(PDOException $e){
            $resultado['error'] = true;
            $resultado['mensaje'] = $e->getMessage();
            echo $e;
         }

}

function ejecutada($id_AP, $hora_InicioE, $hora_FinalE, $num_Beneficiarios, $serv_Entregado, $unidad_Medida, $conclusiones, $acuerdos, $observaciones){
    $resultado = [
        'error' =>false,
        'mensaje' => ''
    ];

        echo "entro";
        global $conexion;

        try{
             $sql1 = 'INSERT INTO actividad_ejecutada (id_AP, hora_InicioE, hora_FinalE, num_Beneficiarios, serv_Entregado, unidad_Medida, conclusiones, acuerdos, observaciones) VALUES (?,?,?,?,?,?,?,?,?)';

            $st = $conexion->prepare($sql1);
            $st->bindParam(1, $id_AP);
            $st->bindParam(2, $hora_InicioE);
            $st->bindParam(3, $hora_FinalE);
            $st->bindParam(4, $num_Beneficiarios);
            $st->bindParam(5, $serv_Entregado);
            $st->bindParam(6, $unidad_Medida);
            $st->bindParam(7, $conclusiones);
            $st->bindParam(8, $acuerdos);
            $st->bindParam(9, $observaciones);
            $st->execute();
            header('location:index.php');    
        }catch(PDOException $e){
            $resultado['error'] = true;
            $resultado['mensaje'] = $e->getMessage();
            echo $e;
         }

}


function planificada( $id_Usuario, $fecha_Registro, $nom_Responsable, $nom_Actividad, $nom_Cientifica, $estado, $municipio, $parroquia, $fecha_Actividad, $hora_Inicio, $hora_Final, $objetivo_Actividad, $descripcion_Actividad, $organizacion_Actividad){
    $resultado = [
        'error' =>false,
        'mensaje' => ''
    ];

        global $conexion;

        try{
             $sql = 'INSERT INTO actividad_planificada (id_Usuario, fecha_Registro, nom_Responsable, nom_Actividad, nom_Cientifica, estado, municipio, parroquia, fecha_Actividad, hora_Inicio, hora_Final, objetivo_Actividad, descripcion_Actividad, organizacion_Actividad) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)';
            
            
            $st = $conexion->prepare($sql);
            $st->bindParam(1, $id_Usuario);
            $st->bindParam(2, $fecha_Registro);
            $st->bindParam(3, $nom_Responsable);
            $st->bindParam(4, $nom_Actividad);
            $st->bindParam(5, $nom_Cientifica);
            $st->bindParam(6, $estado);
            $st->bindParam(7, $municipio);
            $st->bindParam(8, $parroquia);
            $st->bindParam(9, $fecha_Actividad);
            $st->bindParam(10, $hora_Inicio);
            $st->bindParam(11, $hora_Final);
            $st->bindParam(12, $objetivo_Actividad);
            $st->bindParam(13, $descripcion_Actividad);
            $st->bindParam(14, $organizacion_Actividad);
            $st->execute();
            header('location:index.php');    
        }catch(PDOException $e){
            $resultado['error'] = true;
            $resultado['mensaje'] = $e->getMessage();
            echo $e;
        }

}

function verificarIngreso($usuario, $password){
    global $conexion;
    try{
        $sql = 'SELECT usuario, password, nivel_Acceso FROM usuario WHERE usuario = ? AND password = ?';
        $st = $conexion->prepare($sql);
        $st->bindParam(1, $usuario);
        $st->bindParam(2, $password);
        $st->execute();
        $usuario = $st->fetch(PDO::FETCH_ASSOC);
        if(isset($usuario['usuario'])){
            session_start();
            $_SESSION["usuario"] = $usuario;
            $_SESSION['nivel_Acceso'] = $usuario['nivel_Acceso'];
            header('location:planificada.php');
        
        }else{
            header('location:index.php?ingreso=' . "error"); 
        }
    }catch(PDOException $e){
        $resultado['error'] = true;
        $resultado['mensaje'] = $e->getMessage();
    }
}


?>

