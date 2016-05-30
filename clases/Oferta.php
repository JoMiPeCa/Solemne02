<?php

class Producto{
	private $nidoferta;
	private $sdescripcion;
	private $nprecio;
	private $sdias;
	private $dfechainicio;
	private $querysel;
	function __construct($nid=NULL,$snom=NULL,$ntot=NULL,$nano=NULL,$dfechaini=NULL){
		$this->nidoferta=$nid;
		$this->sdescripcion=$snom;
		$this->nprecio=$ntot;
		$this->sdias=$nano;
		$this->dfechainicio=$dfechaini;
		
	}
	
	function IdOferta(){
		return $this->nidoferta;
	}
	
	function Descripcion(){
		return $this->sdescripcion;
	}
	
	function Precio(){
		return $this->nprecio;
	}
	function Dias(){
		return $this->sdias;
	}
        function getDfechainicio() {
            return $this->dfechainicio;
        }

        function setDfechainicio($dfechainicio) {
            $this->dfechainicio = $dfechainicio;
        }

        function setNidoferta($nidoferta) {
            $this->nidoferta = $nidoferta;
        }

        function setSdescripcion($sdescripcion) {
            $this->sdescripcion = $sdescripcion;
        }

        function setNprecio($nprecio) {
            $this->nprecio = $nprecio;
        }

        function setSdias($ndias) {
            $this->sdias = $ndias;
        }

        function setQuerysel($querysel) {
            $this->querysel = $querysel;
        }

        	
	function Selecciona(){
		
		if (!$this->querysel){
		$db=dbconnect();
		/*Definicion del query que permitira ingresar un nuevo registro*/
		
			$sqlsel="select idoferta,descripcion,precio,dias,fechainicio from oferta order by idoferta";
		
			/*Preparacion SQL*/
			$this->querysel=$db->prepare($sqlsel);
		
			$this->querysel->execute();
		}
		
		$registro = $this->querysel->fetch();
		if ($registro){
			return new self($registro['idoferta'], $registro['descripcion'], $registro['precio'], $registro['dias'], $registro['fechainicio']);			
		}
		else {
			return false;
			
		}
	}
	
	function Elimina($id){
	
		$db=dbconnect();
		
			/*Definicion del query que permitira eliminar un registro*/
			$sqldel="delete from oferta where idoferta=:id";
	
			/*Preparacion SQL*/
			$querydel=$db->prepare($sqldel);
			
			$querydel->bindParam(':id',$id);
			
			$valaux=$querydel->execute();
	
		return $valaux;
	}
        
        function Agrega($id,$descripcion,$precio,$dias,$fecha){
	
		$db=dbconnect();
		
			/*Definicion del query que permitira agregar un registro*/
			$sqladd="INSERT INTO oferta VALUES(:id,:descripcion,:precio,:dias,:fecha)";
	
			/*Preparacion SQL*/
			$queryadd=$db->prepare($sqladd);
			
			$queryadd->bindParam(':id',$id);
			$queryadd->bindParam(':descripcion',$descripcion);
			$queryadd->bindParam(':precio',$precio);
			$queryadd->bindParam(':dias',$dias);
			$queryadd->bindParam(':fecha',$fecha);
			
			$valaux=$queryadd->execute();
	
		return $valaux;
	}
        
        function ActualizaProducto($id,$descripcion,$precio,$dias,$fecha){
            
		$db=dbconnect();
		/*Definicion del query que permitira actualizar el producto*/
		$sqlupd="update oferta
					set descripcion=:descripcion,
					set precio=:precio,
					set dias=:dias,
					set fecha=:fecha,
					where idoferta=:id";
	
		/*Preparacion SQL*/
		$querysel=$db->prepare($sqlupd);
	
		/*Asignacion de parametros utilizando bindparam*/
		$querysel->bindParam(':descripcion',$descripcion);
		$querysel->bindParam(':precio',$precio);
		$querysel->bindParam(':dias',$dias);
		$querysel->bindParam(':fecha',$fecha);
                $querysel->bindParam(':id',$id);

		$valaux=$querysel->execute();
	
		return $valaux;
	}
}
?>