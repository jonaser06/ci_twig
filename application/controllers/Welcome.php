<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {
	public function index()
	{	
		$this->data['message'] = $this->test();
		
		$view = $this->twig->render('index.html', $this->data);
		echo $view;
	}
}
