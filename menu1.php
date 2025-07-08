<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú Principal</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <style>
        body {
            margin: 0;
            background-color: #f0f2f5;
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .icon-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 40px;
            width: 90%;
            max-width: 1100px;
            text-align: center;
        }

        .icon-button {
            border-radius: 20px;
            padding: 30px 20px;
            text-decoration: none;
            transition: transform 0.2s ease;
            color: white;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .icon-button i {
            font-size: 64px;
            margin-bottom: 10px;
        }

        .icon-button span {
            font-size: 16px;
            font-weight: bold;
        }

        .icon-button:hover {
            transform: scale(1.05);
        }

        /* Colores por módulo */
        .usuarios       { background-color: #4a90e2; }
        .vehiculos      { background-color: #50e3c2; }
        .talleres       { background-color: #f5a623; }
        .repuestos      { background-color: #bd10e0; }
        .mecanicos      { background-color: #7ed321; }
        .mantenimientos { background-color: #d0021b; }
        .diagnosticos   { background-color:rgb(14, 28, 138)}
        .notificaciones { background-color: #9013fe; }
        .reportes       { background-color: #417505; }
        .logout         { background-color: #9b9b9b; }

        .logout:hover {
            background-color: #7a7a7a;
        }

        
    </style>
</head>
<body>




<div class="icon-grid">
    <a href="cliente.php" class="icon-button usuarios" title="Gestión de Usuarios">
        <i class="ph ph-user"></i>
        <span>Gestión de Usuarios</span>
    </a>
    <a href="vehiculo.php" class="icon-button vehiculos" title="Gestión de Vehículos">
        <i class="ph ph-car"></i>
        <span>Gestión de Vehículos</span>
    </a>
    <a href="taller.php" class="icon-button talleres" title="Gestión de Talleres">
        <i class="ph ph-buildings"></i>
        <span>Gestión de Talleres</span>
    </a>
    <a href="repuesto.php" class="icon-button repuestos" title="Gestión de Repuestos">
        <i class="ph ph-gear"></i>
        <span>Gestión de Repuestos</span>
    </a>
    <a href="mecanico.php" class="icon-button mecanicos" title="Gestión de Mecánicos">
        <i class="ph ph-user-gear"></i>
        <span>Gestión de Mecánicos</span>
    </a>
    <a href="diagnosticos.php" class="icon-button diagnosticos" title="Diagnosticos">
        <i class="ph ph-pipe-wrench"></i>
        <span>Diagnosticos</span>
    </a>
    <a href="mantenimiento.php" class="icon-button mantenimientos" title="Mantenimientos">
        <i class="ph ph-wrench"></i>
        <span>Mantenimientos</span>
    </a>
    <a href="notificaciones.php" class="icon-button notificaciones" title="Notificaciones">
        <i class="ph ph-bell"></i>
        <span>Notificaciones</span>
    </a>
    <a href="reportes.php" class="icon-button reportes" title="Reportes">
        <i class="ph ph-chart-bar"></i>
        <span>Reportes</span>
    </a>
    <a href="logout.php" class="icon-button logout" title="Salir del sistema">
        <i class="ph ph-sign-out"></i>
        <span>Salir</span>
    </a>
</div>


</body>
</html>


