<?php
	 Class equipment
	 {
		 var $id;
		 var $name;
		 var $creation;
		 var $length;
		 var $width;
		 var $weight;
		 var $image;
		 var $icon;
		 var $description;
		 var $type;
		 
		 function __construct($id, $name, $creation, $length, $width, $weight, $image, $icon, $description, $type)
		 {
			 $this->id=$id;
			 $this->name=$name;
			 $this->creation=$creation;
			 $this->length=$length;
			 $this->width=$width;
			 $this->weight=$weight;
			 $this->image=$image;
			 $this->icon=$icon;
			 $this->description=$description;
			 $this->type=$type;
		 }
		 
		 function antiqueness()
		 {
			$actual_date=date("Y");
			$antiqueness = $actual_date - $this->creation;
			if ($antiqueness<=0)
			{
				$antiqueness = "Menos de un año";
			}
			else
			{
				$antiqueness = $antiqueness . " años";
			}
			return($antiqueness);
			
		 }
	 }
	Class sword extends equipment
	{
		var $edge;
		var $curvature;
		
		function __construct($id, $name, $creation, $length, $width, $weight, $image, $icon, $description, $type, $edge="double", $curvature="straight")
		{
			parent::__construct($id, $name, $creation, $length, $width, $weight, $image, $icon, $description, $type);
			
			$this->edge=$edge;
			$this->curvature=$curvature;
			
		}
	}
	Class bow extends equipment
	{
		var $strength_level;
		var $arrow_length;
		
		function __construct($id, $name, $creation, $length, $width, $weight, $image, $icon, $description, $type, $strength_level="medium", $arrow_length="140")
		{
			parent::__construct($id, $name, $creation, $length, $width, $weight, $image, $icon, $description, $type);
			
			$this->strength_level=$strength_level;
			$this->arrow_length=$arrow_length;
		}
	}

	Class crosier extends equipment
	{
		var $element;
		var $gemstone;
		
		function  __construct($id, $name, $antiqueness, $length, $width, $weight, $image, $icon, $description, $type, $element="light", $gemstone="true")
		{
			parent::__construct($id, $name, $antiqueness, $length, $width, $weight, $image, $icon, $description, $type);
			
			$this->element=$element;
			$this->gemstone=$gemstone;
		}
	}
	Class armor extends equipment
	{
		var $Wtype;
		var $gender;
		
		function __construct($id, $name, $antiqueness, $length, $width, $weight, $image, $icon, $description, $type, $Wtype="medium", $gender)
		{
			parent::__construct($id, $name, $antiqueness, $length, $width, $weight, $image, $icon, $description, $type);
			
			$this->Wtype=$Wtype;
			$this->gender=$gender;
		}
		
	}


	include("json_equipamiento.php");
	$equipment = json_decode($json_equipment, true);
	$equipamientos = Array();

	foreach($equipment as $object)
	{
		if ($object["type"]=="Espada")
		{
			$eq = new sword($object["id"], $object["name"], $object["creation"], $object["length"], $object["width"], $object["weight"], $object["image"], $object["icon"], $object["description"], $object["type"], $object["car1"], $object["car2"]);
			array_push($equipamientos, $eq);

		}
		else if($object["type"]=="Arco")
		{
			$eq = new bow($object["id"], $object["name"], $object["creation"], $object["length"], $object["width"], $object["weight"], $object["image"], $object["icon"], $object["description"], $object["type"], $object["car1"], $object["car2"]);
			array_push($equipamientos, $eq);
		}
		else if($object["type"]=="Báculo")
		{
			$eq = new crosier ($object["id"], $object["name"], $object["creation"], $object["length"], $object["width"], $object["weight"], $object["image"], $object["icon"], $object["description"], $object["type"], $object["car1"], $object["car2"]);
			array_push($equipamientos, $eq);
		}
		else if($object["type"]=="Armadura")
		{
			$eq = new armor ($object["id"], $object["name"], $object["creation"], $object["length"], $object["width"], $object["weight"], $object["image"], $object["icon"], $object["description"], $object["type"], $object["car1"], $object["car2"]);
			array_push($equipamientos, $eq);
		}
	}
?>