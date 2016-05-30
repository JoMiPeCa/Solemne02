<?php 
class Usuario{
	private $nidacceso;
	private $snombre;
	private $susuario;
	private $sclave;
        private $spref01;
        private $spref02;
        private $spref03;
        private $spref04;
                
	function __construct($snom,$susr,$sclave){
		$this->snombre=$snom;
		$this->susuario=$susr;
		$this->sclave=md5($sclave);
	}
	public function getNombre(){
		return $this->snombre;
	}
	public function getIdacceso(){
		return $this->nidacceso;
	}
	
	function VerificaUsuario(){
		$db=dbconnect();
		/*Definición del query que permitira ingresar un nuevo registro*/
		$sqlsel="select nombre from acceso
		where nomusuario=:usr";
		/*Preparación SQL*/
		$querysel=$db->prepare($sqlsel);
		/*Asignación de parametros utilizando bindparam*/
		$querysel->bindParam(':usr',$this->susuario);
		
		$datos=$querysel->execute();
		
		if ($querysel->rowcount()==1)return true; else return false;
	}
	function VerificaAcceso(){
		$db=dbconnect();
		/*Definición del query que permitira ingresar un nuevo registro*/
		$sqlsel="select idacceso,nombre,pref01,pref02,pref03,pref04 from acceso
		where nomusuario=:usr and pwdusuario=:pwd";
		/*Preparación SQL*/
		$querysel=$db->prepare($sqlsel);
		/*Asignación de parametros utilizando bindparam*/
		$querysel->bindParam(':usr',$this->susuario);
		$querysel->bindParam(':pwd',$this->sclave);
                
                
		$datos=$querysel->execute();
                
		if ($querysel->rowcount()==1){
                        $registro = $querysel->fetch();
                        $this->snombre=$registro['nombre'];
                        $this->nidacceso=$registro['idacceso'];
                        $this->spref01=$registro['spref01'];
                        $this->spref02=$registro['spref02'];
                        $this->spref03=$registro['spref03'];
                        $this->spref04=$registro['spref04'];
			return true;
		}
		else{
			return false;
		}
	}
	function ActualizaClave($snewpwd){
		$db=dbconnect();
		/*Definición del query que permitira actualizar la clave*/
		$sqlupd="update acceso
					set pwdusuario=:pwd
					where idacceso=:id";
	
		/*Preparación SQL*/
		$querysel=$db->prepare($sqlupd);
	
		/*Asignación de parametros utilizando bindparam*/
		$querysel->bindParam(':pwd',md5($snewpwd));
		$querysel->bindParam(':id',$this->nidacceso);
		
		$valaux=$querysel->execute();
	
		return $valaux;
	}
}
?>