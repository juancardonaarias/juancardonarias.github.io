<?php
   error_reporting(E_ALL);

   class Repuesto {

             
             public $nombre_Repuesto=NULL;
            // public $descripcion=NULL;
             public $id_tipo=NULL;


             function agregar_Repuesto($conn) {
                $stmt = $conn->prepare("INSERT INTO repuesto (nombre_repuesto,id_tipo) VALUES (?, ?)");
                $stmt->bind_param("si",$this->nombre_Repuesto, $this->id_tipo);
                return $stmt->execute();

             }

             function consultar_Repuesto($conn) {
                $stmt = $conn->prepare("SELECT * FROM repuesto");
                $stmt->execute();
                return $stmt->get_result()->fetch_assoc();

             }





   }








?>