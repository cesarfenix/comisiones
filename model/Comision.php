<?php
/**
 * 
 */
class Comision
{
	private $venta;

	public function __construct($venta)
	{
		$this->venta=$venta;
	}

	public function Venta()
	{
		return $this->venta;
	}
	public function ValorComision()
	{
				
		if ($this->venta >= 2000 && $this->venta < 10000) {
			return 0.07;
		}

		elseif ($this->venta >= 10000 && $this->venta < 20000) {
			return 0.10;
		}
		elseif ($this->venta >= 20000) {
			return 0.15;
		}
		else{
			return 0;
		}
	
	}
	public function PrecioComision()
	{
		return $this-> Venta()*$this->ValorComision()+$this->venta();
	}
}
?>