<?php 

class View
{
	function __construct()
	{
		// echo 'pozz iz vjua <br>';
	}
	public function render($name, $def = false)
	{
		if ($def == true) {
			require 'view/' . $name . '.php';
		} else {
			require 'view/inc/header.php';
			require 'view/' . $name . '.php';
			require 'view/inc/footer.php';			
		}
	} 

	public function renderdaily($name, $def = false)
	{
		if ($def == true) {
			require 'view/' . $name . '.php';
			
		} else {
			require 'view/inc/header.php';
			require 'view/' . $name . '.php';
			require 'view/inc/footer.php';			
		}
	} 
}