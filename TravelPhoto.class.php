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
	
	function _construct($fileName, $title, $description, $latitude, $longitude){};
	function _toString(){
		
		return parent:: _toString()."<li> <a href='detail.php?id=7' class='img-responsive'>".
		"<img src=".$fileName. "alt=".$description">".
			"<div class='caption'>
			<div class='blur'></div>
				<div class='caption-text'>
					<h1>Lunenburg Port</h1>
				</div>
			</div>
            </a>
		</li>";
	} 
	
}

?>