<?php

#! Project is not finished jet, it's still in proccess

#Beta 2.22 version Irena Horoskop
#You can modify this project to your own needs
#We want to hear your thoughts, and to get started on this project! Please let us know if you have any questions on @aleksandar.it.spasovski@gmail.com

 /****Use spl_autoloader_register****/

 require 'config/abs_paths.php';

spl_autoload_register(function($class){
	require './library/'.$class.'.php';
});

 $root = new Bootstrap();


