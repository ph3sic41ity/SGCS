<?php

// debated on whether or not it was sensible to separate this into multiple files...

class fleet{
	public $name;
	public $allegiance;
	public $location;
	public $maximum_speed;
	public $commander;
	
	// Several ships must belong to a fleet... sooo.. variable for list of ships? Array?
	public $ships;
	
	// Constructor
	public function __construct($in_name, $in_allegiance) {
		$this->name = $in_name;
		$this->allegiance = $in_allegiance;
		$this->location = 'La-la land';
		$this->maximum_speed = 0.0;
		$this->commander = 0.0;
		$ships->ships = array();
	}
	
	
	// Add new ship (new class) to fleet: 
	
	
	// Add new ship (stored class) to fleet: 
	public function add_stored($in_name, $in_class){
		// Load ship class from storage place
		// Create new ship object and define it with loaded class features? Call special constructor? Can you do that?
	}
	
	// Eventually include functionality for hyperdrive movement
}

class ship{
	public $name;
	public $position;
	public $orientation;
	public $state;
	private $ship_class;
	private $size;
	private $shield_rating;
	private $hull;
	private $crew;
	private $troop;
	private $speed_sublight;
	private $speed_hyperspace;
	private $turn_rate;
	// List of weapons? 
	
	// Constructor
	public function __construct($in_name){
		$this->name = $in_name;
		$this->position = array(0.0,0.0,0.0);
		$this->state = 1;
		$this->orientation = 0.0;
	}


}

class weapon{
	public $name; 
	public $damage;
	public $fire_arc;
	public $spread;
	public $range;
	
	
	public function __construct($in_name, $in_damage, $in_fire_arc, $in_spread, $in_range){
		$this->name = $in_name;
		$this->damage = $damage;
		$this->fire_arc = $in_fire_arc;
		$this->in_spread = $in_spread;
		$this->in_range = $in_range;
	}


}
?>