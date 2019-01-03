<?php

class User{
	private $login;

	public function getLogin(){
		return $this->login;
	}

	public function setLogin($amount){
		$this->login = $amount;
	}
}