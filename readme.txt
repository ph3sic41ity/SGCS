Design Document
Purpose: Develop an automated tool to manage combat in the game Shattered Galaxy. 
Scope: Battles consisting of a variety of ship types and planetary ranges. 

Necessary features: 
1)	Needs to control combat between two or more fleets, consisting of ships, armed with weapons. 
1a)	Combat consists of each ship being assigned one or more targets, and that ship's weapons firing on said target
1b)	The amount of weapons able to be fired at a target depends on the ship's position in space and its orientation. 
1c)	Each weapon emplacement on a ship is assigned a fire arc (orientation) and spread (# of degrees) it can reach.
1d)	Weapons deal damage, ships are destroyed when its Hull value reaches 0. 
2)	Needs to be able to save ship designs.
3)	Needs to be able to save fleets. 
4)	Needs to be able to conduct a battle: Iterative turns with one fleet attacking another.
4a)	Needs to include possibility of reinforcements: additional fleets joining another.
4b)	Needs to be able to control individual ships firing at one or more targets.
4c)	Need to be able to set up the battle, save it. Iterate a 'turn' (one side firing at the other), save it. Iterate a turn, save it. 
4d)	Needs to be able to produce a battle report 
5)	Needs to be able to have a gui interface
5a)	In the beginning, there will simply be lists.
5b)	Eventually, I will want to encorporate a physical map to do positions / orientations visually.


OOP ideas.... (Very incomplete)

Fleet object
Parameters:  Name, location, allegiance, maximum speed 
Accepts: Ship object
Public methods: Set name, set location, set allegiance, add ship, remove ship

Ship object
	Parameters:  Name, ship_class, Size, Shielding, Hull, Crew, Troop compliment, Speed (sublight), Speed(hyperspace), Turning rate, position, orientation, state
	Accepts: Weapon object
	Public methods:  set all parameters, get all parameters, import ship_class, move_to, turn_towards

Weapon object
	Parameters:  Maximum range, damage, fire-arc, spread, firing?
Sample unit: 

Victory-II star destroyer
Length: 900m
Shielding: 2880 SBD
Hull: 1660 RU
Armament: 
- - - Quad Turbolaser batteries (20)
- - - Double heavy turbolaser batteries (40)
- - - Ion cannons (20)
- - - Tractor beam projectors (10) 
Crew: 6,107
Passengers: 1,600
Speed: 1
Turning rate: 1

