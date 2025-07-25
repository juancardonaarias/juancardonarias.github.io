<?php
session_start();

// Redirigir al inicio de sesión si no hay una sesión activa.
if (!isset($_SESSION['tipo_usuario'])) {
    header('Location: login.php');
    exit;
}

$tipoUsuario = $_SESSION['tipo_usuario'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mantenimiento de Vehículos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="ph ph-wrench"></i> Mantenimiento de Vehículos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <?php if($tipoUsuario === 'mecanico'): ?>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="propietario-form">
                        <i class="ph ph-user"></i> Cliente
                    </a>
                </li>
                <?php endif; ?>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#" data-section="vehiculo-form">
                        <i class="ph ph-car"></i> Vehículo
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="taller-form">
                        <i class="ph ph-buildings"></i> Taller
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="repuesto-form">
                        <i class="ph ph-engine"></i> Repuesto
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="mecanico-form">
                        <i class="ph ph-user-gear"></i> Mecánico
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="mantenimiento-form">
                        <i class="ph ph-wrench"></i> Mantenimiento
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="notificaciones-form">
                        <i class="ph ph-bell"></i> Notificaciones
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="reportes-form">
                        <i class="ph ph-chart-bar"></i> Reportes y Consultas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-danger" href="logout.php">
                        <i class="ph ph-sign-out"></i> Salir
                    </a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    

    <div class="container mt-4">
        <div id="vehiculo-form" class="form-section">
            <h2>Registrar Vehículo</h2>
            <!-- Formulario de Vehículo -->
            <div class="container mt-5">
                <form id="vehiculo-form" method="POST" action="php/vehiculo_handler.php">
                    <div class="mb-3">
                        <label for="marca_vehiculo" class="form-label">Marca:</label>
                        <input type="text" class="form-control" id="marca_vehiculo" name="marca_vehiculo" required>
                    </div>
                    <div class="mb-3">
                        <label for="modelo_vehiculo" class="form-label">Modelo:</label>
                        <input type="text" class="form-control" id="modelo_vehiculo" name="modelo_vehiculo" required>
                    </div>
                    <div class="mb-3">
                        <label for="placa_vehiculo" class="form-label">Placa Vehiculo:</label>
                        <input type="text" class="form-control" id="placa_vehiculo" name="placa_vehiculo" required>
                    </div>
                    <div class="mb-3">
                        <label for="id_propietario" class="form-label">Seleccione Propietario:</label>
                        <select class="form-select" id="id_propietario" name="id_propietario"  required>
                            <!-- Opciones de propietarios cargadas dinámicamente -->
                        </select>
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Registrar Vehiculo</button>
                </form>
                <div id="response-message" class="mt-3"></div>
            </div>
        </div>
        <div id="taller-form" class="form-section" style="display: none;">
            <h2>Registrar Taller</h2>
            <!-- Formulario de Taller -->
            <div class="container mt-5">
                <form id="taller-form" method="POST" action="php/taller_handler.php">
                    <div class="mb-3">
                        <label for="nombre_taller" class="form-label">Nombre Taller:</label>
                        <input type="text" class="form-control" id="nombre_taller" name="nombre_taller" required>
                    </div>
                    <div class="mb-3">
                        <label for="direccion_taller" class="form-label">Direccion Taller:</label>
                        <input type="text" class="form-control" id="direccion_taller" name="direccion_taller" required>
                    </div>
                    
                   
                    <div class="mb-3">
                        <label for="id_departamento" class="form-label">Seleccione Departamento:</label>
                        <select id="id_departamento" name="id_departamento" class="form-select" required>
                            <!-- Opciones de departamento cargadas dinámicamente -->
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="id_ciudad" class="form-label">Seleccione Ciudad:</label>
                        <select id="id_ciudad" name="id_ciudad"  class="form-select"  required>
                            <!-- Opciones de ciudad cargadas dinámicamente -->
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
                <div id="response-message" class="mt-3"></div>
            </div>
        </div>
        <div id="repuesto-form" class="form-section" style="display: none;">
            <h2>Registrar Repuesto</h2>
            <!-- Formulario de Repuesto -->
            <div class="container mt-5">
                <form id="repuesto-form" method="POST" action="php/repuesto_handler.php">
                    <div class="mb-3">
                        <label for="nombre_repuesto" class="form-label">Nombre Repuesto:</label>
                        <input type="text" class="form-control" id="nombre_repuesto" name="nombre_repuesto" required>
                    </div>
                    
                 <!--   <div class="mb-3">
                        <label for="descripcion_repuesto" class="form-label">Descripcion Repuesto:</label>
                        <input type="text" class="form-control" id="descripcion_repuesto" name="descripcion_repuesto" required>
                    </div>
                -->
                    <div class="mb-3">
                        <label for="id_tiporepuesto" class="form-label">Seleccione Tipo Repuesto:</label>
                        <select id="id_tiporepuesto" name="id_tiporepuesto"  class="form-select"  required>
                            <!-- Opciones de tipo cargadas dinámicamente -->
                        </select>
                    </div>
                    

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
                <div id="response-message" class="mt-3"></div>
            </div>
        </div>
        <div id="propietario-form" class="form-section" style="display: none;">
            <h2>Registrar Cliente</h2>
            <!-- Formulario de Propietario -->
            <div class="container mt-5">
                <form id="propietario-form" method="POST" action="php/propietario_handler.php">
                    <div class="mb-3">
                        <label for="nombre_propietario" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre_propietario" name="nombre_propietario" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono_propietario" class="form-label">Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono_propietario" name="telefono_propietario" required>
                    </div>
                  <!--  <div class="mb-3">
                        <label for="email_propietario" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email_propietario" name="email_propietario">
                    </div>
                --> 
                    
                    <!--  <div class="mb-3">
                        <label for="contrasena_propietario" class="form-label">Contraseña:</label>
                        <input type="text" class="form-control" id="contrasena_propietario" name="contrasena_propietario" required>
                    </div>
                    
                    -->
                    
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
                <div id="response-message" class="mt-3"></div>
            </div>
        </div>
        <div id="mecanico-form" class="form-section" style="display: none;">
            <h2>Registrar Mecánico</h2>
            <!-- Formulario de Mecánico -->
            <div class="container mt-5">
                <form id="mecanico-form" method="POST" action="php/mecanico_handler.php">
                    <div class="mb-3">
                        <label for="nombre_mecanico" class="form-label">Nombre Mecanico:</label>
                        <input type="text" class="form-control" id="nombre_mecanico" name="nombre_mecanico" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="telefono_mecanico" class="form-label">Teléfono Mecanico:</label>
                        <input type="tel" class="form-control" id="telefono_mecanico" name="telefono_mecanico" required>
                    </div>

                 <!--   <div class="mb-3">
                        <label for="email_mecanico" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email_mecanico" name="email_mecanico" required>
                    </div>
                    <div class="mb-3">
                        <label for="contrasena_mecanico" class="form-label">Contraseña:</label>
                        <input type="text" class="form-control" id="contrasena_mecanico" name="contrasena_mecanico" required>
                    </div>
                -->
                    <div class="mb-3">
                        <label for="id_taller" class="form-label">Seleccione Taller:</label>
                        <select id="id_taller" name="id_taller"  class="form-select"  required>
                           <!--  Opciones de taller cargadas dinámicamente --> 
                        </select>
                    </div>
                

                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
                <div id="response-message" class="mt-3"></div>
            </div>
        </div>
        <div id="mantenimiento-form" class="form-section" style="display: none;">
            <h2>Registrar Mantenimiento</h2>
            <!-- Formulario de Mantenimiento -->
            <div class="container mt-5">
                <form id="mantenimiento-form" action="php/mantenimiento_handler.php"  method="POST">
    
                    <div class="mb-3">
                        <label for="placa_vehiculo" class="form-label">Vehículo:</label>
                        <select id="id_vehiculo" name="id_vehiculo" class="form-select" required>
                            <!-- Opciones de vehículos -->
                        </select>
                    </div>
                


                    <div class="mb-3">
                        <label for="mecanico_form_mant" class="form-label">Mecánico:</label>
                        <select id="mecanico_form_mant" name="id_mecanico" class=" form-select" required>
                            <!-- Opciones de mecánicos -->
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="repuesto_mant" class="form-label">Repuesto:</label>
                        <div class="d-flex align-items-center">
                            <select class="form-select me-2" id="repuesto_mant"  required>
                                <!-- Opciones de repuestos -->
                            </select>
                            <i onclick="agregarRepuesto()"  class="ph-bold ph-plus fs-2 text-primary border border-primary  rounded-3" role="button"></i>
                        </div>
                        <div></div>
                            <input type="hidden" id="repuestos_lista" name="repuestos_lista">
                    </div>

                    <div class="mb-3">
                        <label for="id_tipomanto" class="form-label">Tipo Mantenimiento:</label>
                        <select class="form-select" id="id_tipomanto" name="id_tipomanto" required>
                            <!-- Opciones de repuestos -->
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="fecha_mantenimiento" class="form-label">Fecha de Mantenimiento:</label>
                        <input type="date" class="form-control" id="fecha_mantenimiento" name="fecha_mantenimiento" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion:</label>
                        <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                    </div>
                    <div class="mb-3">
                        <label for="kilometraje" class="form-label">Kilometraje:</label>
                        <input type="text" class="form-control" id="kilometraje" name="kilometraje" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
                <div id="response-message" class="mt-3"></div>
            </div>
        </div>
        <div id="notificaciones-form" class="form-section" style="display: none;">
            <h2>Notificaciones</h2>
            <!-- Formulario de Notificaciones -->
            <div class="container mt-5">
                <form>
                    <div class="mb-3">
                        <label for="notificaciones" class="form-label">Usuario:</label>
                        <select class="form-select" id="notificaciones" name="notificaciones" required>
                            <!-- Opciones de usuarios -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="notificaciones-tipo" class="form-label">Tipo:</label>
                        <select class="form-select" id="notificaciones-tipo" name="notificaciones-tipo" required>
                            <!-- Opciones de tipo mensaje -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje:</label>
                        <textarea id="mensaje" name="mensaje" rows="5" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
                <div id="response-message" class="mt-3"></div>
            </div>
        </div>
        
        <div class="container mt-4">
            <div id="reportes-form" class="form-section active">
                <h2>Reportes</h2>
                <div>
                    <a href="#" class="nav-link" data-section="reporte-propietario">Buscar por Propietario</a>
                    <a href="#" class="nav-link" data-section="reporte-vehiculo">Buscar por Vehículo</a>
                    <a href="#" class="nav-link" data-section="listar-propietarios">Listar Propietarios</a>
                </div>
            </div>

            
    
            <div id="reporte-propietario" class="form-section">
                <h2>Buscar por Propietario</h2>
                <form action="php/reporte_propietario.php" method="GET">
                   <div class="mb-3">
                        <label for="nombre_propietario" class="form-label">Seleccione Propietario:</label>
                        <input type="text" name="nombre_propietario" id="nombre_propietario">
                    </div>
                    <button type="submit" class="btn btn-primary">Generar Reporte</button>
                </form>
            </div>
    
          
           <div id="reporte-vehiculo" class="form-section">
                <h2>Buscar por Vehiculo</h2>
                <form action="php/reporte_vehiculo.php" method="GET">
                   <div class="mb-3">
                        <label for="placa_vehiculo" class="form-label">Placa del Vehiculo:</label>
                        <input type="text" name="placa_vehiculo" id="placa_vehiculo">
                    </div>
                    <button type="submit" class="btn btn-primary">Buscar Vehiculo</button>
                </form>
           </div>
            
           <div id="listar-propietarios" class="form-section">
                <h2>Listar Propietarios</h2>
                <form action="php/listar_propietarios.php" method="GET">
                   
                    <button type="submit" class="btn btn-primary">Listar Propietarios</button>
                </form>
           </div>

        </div>
        

    </div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
