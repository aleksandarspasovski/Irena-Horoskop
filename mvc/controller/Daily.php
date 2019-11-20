<?php 

class Daily extends BaseController
{
	
	function __construct()
	{
		parent::__construct();
	}
//*Prepravi funkciju koja renderuje daily!!!!!!!*//
	public function index()
	{
			$this->view->renderdaily('daily/ovan');
	}

	public function ovan()
	{
		// echo $val;
			$this->view->renderdaily('daily/ovan');
	}

	public function bik()
	{
		// echo $val;
		$this->view->renderdaily('daily/bik');
	}

	public function blizanci()
	{
		// echo $val;
		$this->view->renderdaily('daily/blizanci');
	}

	public function rak()
	{
		// echo $val;
		$this->view->renderdaily('daily/rak');
	}

	public function lav()
	{
		// echo $val;
		$this->view->renderdaily('daily/lav');
	}

	public function devica()
	{
		// echo $val;
		$this->view->renderdaily('daily/devica');
	}

	public function vaga()
	{
		// echo $val;
		$this->view->renderdaily('daily/vaga');
	}

	public function skorpija()
	{
		// echo $val;
		$this->view->renderdaily('daily/skorpija');
	}

	public function strelac()
	{
		// echo $val;
		$this->view->renderdaily('daily/strelac');
	}

	public function jarac()
	{
		// echo $val;
		$this->view->renderdaily('daily/jarac');
	}

	public function vodolija()
	{
		// echo $val;
		$this->view->renderdaily('daily/vodolija');
	}

	public function ribe()
	{
		// echo $val;
		$this->view->renderdaily('daily/ribe');
	}

	/*make functions for daily, weekly, monthly and yearly*/
}