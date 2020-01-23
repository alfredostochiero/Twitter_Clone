<?php
class usuarios 
{
	public function isLogged() {
		if(isset($_SESSION['twlg']) && !empty($_SESSION['twlg'])) {
			return true;
		} else {
			return false;
		}
	}	
}