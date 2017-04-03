<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH. '/libraries/REST_Controller.php';

class Api extends Rest_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function services_get()
	{
		$id = $this->uri->segment(3);
		 // $student = [
		 // 1 => ['first_name' => 'Shilpa', 'last_name' => 'Jain'],
		 // 2 => ['first_name' => 'S', 'last_name' => 'J']
		 // ];
		 if(isset($student[$id]))
		$this->response($student[$id]);
	else
		//$this->response('The specified service could not be found', 404);
	$this->response(['status' => 'failure', 'message' =>'Service couldnt be found', 400]);	
	}

	
}