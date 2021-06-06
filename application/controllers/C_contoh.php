<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_contoh extends CI_Controller
{

	public function index()
	{
		$data['_title'] = 'test';

		//view display
		$this->layout->display('pages/user', $data);
	}
}
