<?php

namespace App\Controllers\Definitions;

use App\Controllers\BaseController;
use App\Models\CounterModel;
use App\Models\SubscriberModel;
use App\Entities\SubscriberEntity;

class Subscribers extends BaseController
{
	protected $counterModel;
	protected $subscriberModel;
	protected $subscriberEntity;

	public function __construct()
	{
		$this->counterModel = new CounterModel();
		$this->subscriberModel = new SubscriberModel();
		$this->subscriberEntity = new SubscriberEntity();
	}

	public function list()
	{
		$model = $this->subscriberModel;

		if ($where = $this->request->getPost('q'))
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
				'year(created_at)' => $where
			];

			$model = $model->orLike($where);
		}

		$data = [
			'subscribers' => $model->paginate(10),
			'pager' => $model->pager
		];

		return view('pages/definitions/subscribers/list', $data);
	}

	public function add()
	{
		if ($this->request->getPost())
		{
			$year = $this->request->getPost('year');
			$no = $this->request->getPost('no');
			$firstname = $this->request->getPost('firstname');
			$lastname = $this->request->getPost('lastname');
			$degree = $this->request->getPost('degree');
			$notes = $this->request->getPost('notes');
			$phone = $this->request->getPost('phone');
			$mobile = $this->request->getPost('mobile');
			$counter_id = $this->request->getPost('counter_id');
			//$factor = $this->request->getPost('factor');
			$ownership = $this->request->getPost('ownership');
			$deposit = $this->request->getPost('deposit');
			$receipt_no = $this->request->getPost('receipt_no');
			$status = STATUS_ACTIVE; // $this->request->getPost('status')

			$this->subscriberEntity->setYear($year);
			$this->subscriberEntity->setNo($no);
			$this->subscriberEntity->setFirstname($firstname);
			$this->subscriberEntity->setLastname($lastname);
			$this->subscriberEntity->setDegree($degree);
			$this->subscriberEntity->setNotes($notes);
			$this->subscriberEntity->setPhone($phone);
			$this->subscriberEntity->setMobile($mobile);
			$this->subscriberEntity->setCounterID($counter_id);
			//$this->subscriberEntity->setFactor($factor);
			$this->subscriberEntity->setOwnership($ownership);
			$this->subscriberEntity->setDeposit($deposit);
			$this->subscriberEntity->setReceiptNo($receipt_no);
			$this->subscriberEntity->setStatus($status);

			$this->subscriberModel->save($this->subscriberEntity);

			if ($this->subscriberModel->errors())
			{
				print_r($this->subscriberModel->errors());
			}
		}

		$counters = $this->counterModel->orderBy('id', 'ASC')->findAll();

		$data = [
			'counters' => $counters
		];

		return view('pages/definitions/subscribers/add', $data);
	}
}
