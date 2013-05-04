<?php

abstract class Session{

	public static function init(){
		@session_start();
	}

    public function set($key,$value){

 		$_SESSION[$key] = $value;
    }

    public function get($key){
    	if (isset($_SESSION[$key]))
   		return $_SESSION[$key];
    }

    public static function destroy(){
		session_destroy();
	}

}

 ?>
