<?php
namespace controllers;
use Ubiquity\attributes\items\router\Route;
 /**
  * Controller TestController
  * @property JsUtils $jquery
  */
class TestController extends \controllers\ControllerBase{

	public function index(){
		$this->jquery->getHref('a');
		$this->jquery->renderView("TestController/index.html");
	}

	#[Route(path: "hello/{message}",name: "test.hello")]
	public function hello($message){
		$this->loadDefaultView(['msg'=>$message]);
	}

}
