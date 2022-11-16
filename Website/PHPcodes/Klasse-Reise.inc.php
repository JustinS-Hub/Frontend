<?php
	private $reiseNr;									// Attribute der Klasse
	private $zielOrt;
	private $tagespreis;
	private $tage;
	private $ticketPreis;							

	public function __construct($nummer, $ziel, $tagespreis, $tage, $ticketpreis){
		$this -> reiseNr = $nummer;
		$this -> zielOrt = $ziel;
		$this -> tagespreis = $tagespreis;
		$this -> tage = $tage;
		$this -> ticketPreis = $ticketpreis;
	}

	public function __destruct(){
		echo "<br/ > Destruktor:
			objekt mit der Reisenummer ".
			$this->reiseNr ." ist nun gelöscht.";
	}

	public function SetzeZielOrt($ziel){				//Methoden der Klasse	
		$this -> zielOrt = $ziel;						//Setter Methode um privat gesetzte Attribute zu ändern
	}
	
	public function SetzeReiseNr($reiseNr){	
		$this -> reiseNr = $reiseNr;			
	}

	public function SetzeTagesPreis($tagespreis){	
		$this -> tagespreis = $tagespreis;			
	}	

	public function SetzeTage($tage){	
		$this -> tage = $tage;			
	}
	
	public function SetzeTicketPreis($Preis){	
		$this -> ticketPreis = $Preis;			
	}	
		
	public function HoleZielOrt(){						//Getter Methode um privat gesetzte Attribute auszugeben
		return $this->zielOrt;
	}
	
	public function HoleReiseNr(){			
		return $this->reiseNr;
	}

	public function HoleTagesPreis(){			
		return $this->tagespreis;
	}	

	public function HoleTage(){			
		return $this->tage;
	}
	
	public function HoleTicketPreis(){			
		return $this->ticketPreis;
	}
	
	public function BerechneHotelPreis(){
		return $this ->tagespreis * $this ->tage;
	}
	
	public function BerechneGesamtPreis(){
		return $this->BerechneHotelPreis() + $this-> ticketpreis;
	}
?>