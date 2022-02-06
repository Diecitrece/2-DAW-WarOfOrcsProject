<?php
class Personaje{

    public $id;
    public $nombre;
    public $dni;
    public $altura;
    public $peso;
    public $imagen;
    public $icono;
    public $descripcion;
    public $tipo;

    function __construct($id, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion, $tipo){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->dni = $dni;
        $this->altura = $altura;
        $this->peso = $peso;
        $this->imagen = $imagen;
        $this->icono = $icono;
        $this->descripcion = $descripcion;
        $this->tipo = $tipo;
    }

    function validarDni()
	{
		$base_numeros = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
		$base_letras = array_merge(range('A', 'Z'), range('a', 'z'));
		$valido=true;
		$dni = $this->dni;
		$dni = str_split($dni);
		if (count($dni)==9)
		{
			for ($i=0; $i<=7; $i++)
			{
				if (!in_array($dni[$i], $base_numeros))
				{
					$valido=false;
				}
			}
			if (!in_array($dni[8], $base_letras))
			{
				$valido=false;
			}
		}
		else
		{
			$valido = false;
		}
		
		if ($valido==true)
		{
			$valido = " ✔ ";
		}
		else if ($valido==false)
		{
			$valido = " ❌ ";
		}
		
		return ($valido);
	}
        
    
}

class Orco extends Personaje{
    public $fuerza;
    public $miedo;

    function __construct($id, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion,$tipo, $fuerza, $miedo){
        parent::__construct($id, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion,$tipo);

        $this->fuerza = $fuerza;
        $this->miedo = $miedo;
    }

   
   
}
class Elfo extends Personaje{
    public $distancia;
    public $velocidad;

    function __construct($id, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion, $tipo, $distancia, $velocidad){
        parent::__construct($id, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion,$tipo);
    
        $this->distancia = $distancia;
        $this->velocidad = $velocidad;
    }

}
class Humano extends Personaje{
    public $armas;
    public $inteligencia;

    function __construct($id, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion,$tipo, $armas, $inteligencia){
        parent::__construct($id, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion,$tipo);

        $this->armas = $armas;
        $this->inteligencia = $inteligencia;
    }

}
class Enano extends Personaje{
    public $dureza;
    public $ingenieria;

    function __construct($id, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion,$tipo, $dureza, $ingenieria){
        parent::__construct($id, $nombre, $dni, $altura, $peso, $imagen, $icono, $descripcion,$tipo);
    
        $this->dureza = $dureza;
        $this->ingenieria = $ingenieria;
    }
}




?>