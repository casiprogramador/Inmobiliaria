<?php
require 'config/path.php';
require 'config/database.php';

function __autoload($class){

	require "libs/$class.php";

}
// require 'libs/Bootstrap.php';
// require 'libs/Controller.php';
// require 'libs/Model.php';
// require 'libs/View.php';

// require 'libs/Database.php';
// require 'libs/Session.php';


$app = new Bootstrap();



 ?>
