<?php

error_reporting(E_ALL);

class Vehiculo
{
    public $idVehiculo = null;
    public $placaVehiculo = null;
    public $marcaVehiculo = null;
    public $modeloVehiculo = null;
    public $idPropietario = null;
   // public $kilometraje = null;

    public function ingresarVehiculo($conexion)
    {
        $stmt = $conexion->prepare("INSERT INTO vehiculo (marca_vehiculo,modelo_vehiculo,placa_vehiculo, id_propietario) VALUES (?, ?, ?,?)");
        $stmt->bind_param("sssi", $this->marcaVehiculo, $this->modeloVehiculo, $this->placaVehiculo,$this->idPropietario);
        $stmt->execute();
        echo "<script>
                alert('Vehiculo registrado con éxito');
                window.location.href = '../menu.php';
                </script>";
                exit;
    }

    public function consultarVehiculo($conexion, $idVehiculo)
    {
        $stmt = $conexion->prepare("SELECT * FROM vehiculo WHERE id_vehiculo = ?");
        $stmt->bind_param("i", $idVehiculo);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
?>
