<?php

	class Modelo_Calculadora
	{
		private $peso;
		private $estatura;

		function __construct($peso, $estatura)
		{
			$this->peso = (float)$peso;
			$this->estatura = (float)$estatura;
		}

		public function calcular()
		{
			return $this->peso / ($this->estatura * $this->estatura);
		}
	}

?>