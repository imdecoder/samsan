<?php

namespace App\Controllers\Entries;

use \App\Controllers\BaseController;
use App\Entities\AccrualEntity;
use App\Entities\SubscriberEntity;
use App\Models\AccrualModel;
use App\Models\SubscriberModel;

class Endexes extends BaseController
{
	protected $accrualModel;
	protected $accrualEntity;
	protected $subscriberModel;
	protected $subscriberEntity;

	public function __construct()
	{
		$this->accrualModel = new AccrualModel();
		$this->accrualEntity = new AccrualEntity();
		$this->subscriberModel = new SubscriberModel();
		$this->subscriberEntity = new SubscriberEntity();
	}

	public function list()
	{
		$model = $this->subscriberModel->join('accruals', 'accruals.subscriber_id = subscribers.id');

		$data = [
			'endexes' => $model->paginate(10),
			'pager' => $model->pager
		];

		return view('pages/entries/endexes/list', $data);
	}
}
