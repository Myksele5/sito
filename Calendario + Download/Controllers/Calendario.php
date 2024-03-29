<?php

namespace App\Controllers;

use App\Models\webApp\CalendarioModel;

class Calendario extends BaseController
{
	public function __construct()
	{
		helper(["html"]);
	}
	public function index()
	{
        echo view('templates/header_loggedIn');
		echo view('pages/calendario');
        echo view('templates/footer_loggedIn_users');
	}

	public function loadData()
	{
		$event = new CalendarioModel();
		// on page load this ajax code block will be run
		$data = $event->where([
			'start >=' => $this->request->getVar('start'),
			'end <='=> $this->request->getVar('end')
		])->findAll();

		return json_encode($data);
	}
}