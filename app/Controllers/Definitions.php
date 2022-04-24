<?php

namespace App\Controllers;

use App\Models\SubscriberModel;
use App\Entities\SubscriberEntity;

class Definitions extends BaseController
{
	protected $subscriberModel;
	protected $subscriberEntity;

	public function __construct()
	{
		$this->subscriberModel = new SubscriberModel();
		$this->subscriberEntity = new SubscriberEntity();
	}

	public function index()
	{

	}

	public function subscribers()
	{
		$data = [
			'subscribers' => $this->subscriberModel->paginate(10),
			'pager' => $this->subscriberModel->pager
		];

		return view('pages/definitions/subscribers', $data);
	}
}
