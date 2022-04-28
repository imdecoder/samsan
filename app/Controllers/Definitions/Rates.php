<?php

namespace App\Controllers\Definitions;

use \App\Controllers\BaseController;
use App\Entities\RateEntity;
use App\Models\RateModel;

class Rates extends BaseController
{
	protected $rateModel;
	protected $rateEntity;

	public function __construct()
	{
		$this->rateModel = new RateModel();
		$this->rateEntity = new RateEntity();
	}

	public function list()
	{
		return view('pages/definitions/rates/list');
	}
}
