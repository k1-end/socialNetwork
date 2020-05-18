<?php
class Page {
	protected $html="";
	function __construct(){
		$this->setHtml(file_get_contents("./myNest/includes/html/header.section"));
		$this->setHtml("\t****\n");
		$this->setHtml(file_get_contents("./myNest/includes/html/footer.section"));
	}
	protected function setHtml($h){
		$this->html .= $h;
	}
	public function getHtml(){
	return $this->html;
	}
}


/**
 *
 */
class LoginPage extends Page{

	function __construct(){
		parent::__construct();
		$body = file_get_contents("./myNest/includes/html/login.section");
		$h = $this->getHtml();
		$h = str_replace("****" , $body , $h);
		$this->html = $h;
	}
}

class SignupPage extends Page{

	function __construct(){
		parent::__construct();
		$body = file_get_contents("./myNest/includes/html/sign-up.section");
		$h = $this->getHtml();
		$h = str_replace("****" , $body , $h);
		$this->html = $h;
	}
}

class HomePage extends Page{

	function __construct(){
		parent::__construct();
		$body = file_get_contents("./myNest/includes/html/home.section");
		$h = $this->getHtml();
		$h = str_replace("****" , $body , $h);
		$this->html = $h;
	}
}



?>