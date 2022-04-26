<?php

namespace App\Controllers\Definitions;

use \App\Controllers\BaseController;
use App\Models\SubscriberModel;
use App\Entities\SubscriberEntity;

class Subscribers extends BaseController
{
	protected $subscriberModel;
	protected $subscriberEntity;

	public function __construct()
	{
		$this->subscriberModel = new SubscriberModel();
		$this->subscriberEntity = new SubscriberEntity();
	}

	public function list()
	{
		$model = $this->subscriberModel;

		if ($where = $this->request->getGet('q'))
		{
			$where = [
				'no' => $where,
				'firstname' => $where,
				'lastname' => $where,
				'degree' => $where,
				'phone' => $where,
				'mobile' => $where,
				'deposit' => $where,
				'factor' => $where,
				'receipt_no' => $where,
				'year(created_at)' => $where // TODO: Yılı alınacak.
			];

			$model = $model->orLike($where);
		}

		$data = [
			'subscribers' => $model->paginate(10),
			'pager' => $model->pager
		];

		return view('pages/definitions/subscribers', $data);
	}
}