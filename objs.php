<?php


class faction{
	public $name;
	public $starfighter_weapons_tech;
	public $starship_weapons_tech;
	public $maneuverability_tech;
	public $shipspeed_tech;
	public $defence_tech;
	
	public function __construct($in_name) {
		$this->name = $in_name;
		$this->starfighter_weapons_tech = 0;
		$this->starship_weapons_tech = 0;
		$this->maneuverability_tech = 0;
		$this->shipspeed_tech = 0;
		$this->defence_tech = 0;
	}
	
}

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
	
	// WEEEEEEEEEEEE
	
	// Add new ship (new class) to fleet: 
	
	
	// Add new ship (stored class) to fleet: 
	public function add_stored($in_name, $in_class){
		// Load ship class from storage place
		// Create new ship object and define it with loaded class features? Call special constructor? Can you do that?
	}
	
	// Eventually include functionality for hyperdrive movement
}

class ship extends ship_type{
	// instance of an idividual ship present in a fleet.
	public $name;
	public $position;
	public $orientation;
	public $state;
	

	// List of weapons? 
	
	// Constructor
	public function __construct($in_name){
		$this->name = $in_name;
		$this->position = array(0.0,0.0,0.0);
		$this->state = 1;
		$this->orientation = 0.0;
		
	}


}

class ship_type{
	public $ship_class;
	public $size;
	public $shield_rating;
	public $hull;
	public $crew;
	public $troop;
	public $speed_sublight;
	public $speed_hyperspace;
	public $turn_rate;
	
		public function __construct($in_ship_class, $in_size, $in_shield_rating, $in_hull, $in_crew, $in_troop, $in_speed_sublight, $in_speed_hyperspace, $in_turn_rate){
			$this->ship_class = $in_ship_class;
			$this->size = $in_size
			$this->shield_rating = $in_shield_rating;
			$this->hull = $in_hull;
			$this->crew = $in_crew;
			$this->troop = $in_troop;
			$this->speed_sublight = $in_speed_sublight;
			$this->speed_hyperspace = $in_speed_hyperspace;
			$this->turn_rate = $in_turn_rate;
	}
}

class weapon_group{
	public $name; 

}

class weapon{
	public $name; 
	public $damage;
	public $range;
	public $is_ion
	
	
	public function __construct($in_name, $in_damage, $in_range, $is_ion){
		$this->name = $in_name;
		$this->damage = $damage;
		$this->in_range = $in_range;
		$this->is_ion = $is_ion;
	}


}
?>