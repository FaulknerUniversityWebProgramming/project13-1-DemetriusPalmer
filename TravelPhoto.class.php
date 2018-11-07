<?php
class TravelPhoto{
	private $date;
	private $fileName;
	private $description;
	private $title;
	private $latitude;
	private $longitude;
	private $ID;
	
	public static $photoID;
	
	function _construct($fileName, $title, $description, $latitude, $longitude){
		return _toString(). "<img">.$fileName."<alt>".$description."<title>".$title."</img>";
	}
}

?>