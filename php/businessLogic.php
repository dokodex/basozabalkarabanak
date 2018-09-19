<?php
include 'php/dataAccess.php';

class businessLogic{

	public function getcomingshows(){
		$da = new dataAccess();
		return $da->getcomingshows();
	}

  public function getpastshows(){
    $da = new dataAccess();
    return $da->getpastshows();
  }
}

?>