<?php
 class Alumno{
 public $nombre;
 public $edad;
 public $curso;
 public $ciclo;
 

	public function getNombre()
		{
        return $this->nombre;
		}
	public function getEdad()
		{
        return $this->edad;
		}
	public function getCurso()
		{
        return $this->curso;
		}
	public function getCiclo()
		{
        return $this->ciclo;
		}
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	public function setEdad($edad){
		if ($edad>=18){
		$this->edad=$edad;
		}else{
			$this->edad="18";
		}
	}
	public function setCurso($curso){
		if ($curso==1){
		$this->curso=$curso;
		}
		elseif ($curso==2 ){
		$this->curso=$curso;
		}
		else{
			$this->curso="1";
		}
		
	}
	public function setCiclo($ciclo){
		$this->ciclo=$ciclo; 
	}
 }
	
$escuela= new Alumno();
echo "<h2> FICHA DEL ALUMNO:</h2>";
echo $escuela->setNombre("Manuel"). "<br>";
echo "<h4>NOMBRE:</h4>".$escuela->getNombre(). "<br>";
echo $escuela->setEdad("18"). "<br>";
echo "<h4>EDAD:</h4>".$escuela->getEdad(). "<br>";
echo $escuela->setCurso("2"). "<br>";
echo "<h4>CURSO:</h4>".$escuela->getCurso(). "<br>";
echo $escuela->setCiclo("DAM"). "<br>";
echo "<h4>CICLO:</h4>".$escuela->getCiclo();

	

