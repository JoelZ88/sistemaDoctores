<?php
	require_once '../db/accesoDB.php';
	date_default_timezone_set("Mexico/General");

	function fechaNormal($fecha){
		$nfecha = date('d/m/Y',strtotime($fecha));
		return $nfecha;
	}

	class adminDAO{

		public function allBitacora(){
			try{
				$pdo = AccesoDB::getConnectionPDO();

				$sql = 'SELECT paciente,edad,peso,fecha,receta
				FROM receta ';

				$stmt = $pdo->prepare($sql);
				$stmt->execute();

				$return = $stmt->fetchAll();
				return $return;

			} catch (Exception $e){
				throw $e;
			}
		}

		public function buscarAllBitacoraFecha($desde,$hasta){
			try{
				$pdo = AccesoDB::getConnectionPDO();

				$sql = 'SELECT paciente,edad,peso,fecha,receta
				FROM receta WHERE fecha BETWEEN "'.$desde.'" AND "'.$hasta.'"';

				$stmt = $pdo->prepare($sql);
				$stmt->execute();

				$return = $stmt->fetchAll();
				return $return;

			} catch (Exception $e){
				throw $e;
			}
		}






	}

?>
