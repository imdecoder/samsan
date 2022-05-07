<?php

namespace App\Controllers\Definitions;

use App\Controllers\BaseController;
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
			'subscribers' => $model->orderBy('no', 'DESC')->paginate(10),
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
			$counter_type = $this->request->getPost('counter_type');
			$counter_lighting_no = $this->request->getPost('counter_lighting_no');
			$counter_lighting_factor = $this->request->getPost('counter_lighting_factor');
			$counter_lighting_brand = $this->request->getPost('counter_lighting_brand');
			$counter_engine_no = $this->request->getPost('counter_engine_no');
			$counter_engine_factor = $this->request->getPost('counter_engine_factor');
			$counter_engine_brand = $this->request->getPost('counter_engine_brand');
			$ownership = $this->request->getPost('ownership');
			$deposit = $this->request->getPost('deposit');
			$receipt_no = $this->request->getPost('receipt_no');
			$receipt_date = $this->request->getPost('receipt_date');
			$status = STATUS_ACTIVE; // TODO: Durum formdan getirilecek. $this->request->getPost('status')

			$this->subscriberEntity->setYear($year);
			$this->subscriberEntity->setNo($no);
			$this->subscriberEntity->setFirstname($firstname);
			$this->subscriberEntity->setLastname($lastname);
			$this->subscriberEntity->setDegree($degree);
			$this->subscriberEntity->setNotes($notes);
			$this->subscriberEntity->setPhone($phone);
			$this->subscriberEntity->setMobile($mobile);
			$this->subscriberEntity->setCounterType($counter_type);
			$this->subscriberEntity->setCounterLightingNo($counter_lighting_no);
			$this->subscriberEntity->setCounterLightingFactor($counter_lighting_factor);
			$this->subscriberEntity->setCounterLightingBrand($counter_lighting_brand);
			$this->subscriberEntity->setCounterEngineNo($counter_engine_no);
			$this->subscriberEntity->setCounterEngineFactor($counter_engine_factor);
			$this->subscriberEntity->setCounterEngineBrand($counter_engine_brand);
			$this->subscriberEntity->setOwnership($ownership);
			$this->subscriberEntity->setDeposit($deposit);
			$this->subscriberEntity->setReceiptNo($receipt_no);
			$this->subscriberEntity->setReceiptDate($receipt_date);
			$this->subscriberEntity->setStatus($status);

			$this->subscriberModel->save($this->subscriberEntity);

			if ($this->subscriberModel->errors())
			{
				return redirect()->back()->with('error', $this->subscriberModel->errors());
			}

			return redirect()->back()->with('success', 'Yeni abone başarılı bir şekilde eklendi.');
		}

		return view('pages/definitions/subscribers/add');
	}

	public function edit(int $id)
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
			$counter_type = $this->request->getPost('counter_type');
			$counter_lighting_no = $this->request->getPost('counter_lighting_no');
			$counter_lighting_factor = $this->request->getPost('counter_lighting_factor');
			$counter_lighting_brand = $this->request->getPost('counter_lighting_brand');
			$counter_engine_no = $this->request->getPost('counter_engine_no');
			$counter_engine_factor = $this->request->getPost('counter_engine_factor');
			$counter_engine_brand = $this->request->getPost('counter_engine_brand');
			$ownership = $this->request->getPost('ownership');
			$deposit = $this->request->getPost('deposit');
			$receipt_no = $this->request->getPost('receipt_no');
			$receipt_date = $this->request->getPost('receipt_date');
			$status = STATUS_ACTIVE; // $this->request->getPost('status')

			$this->subscriberEntity->setId($id);
			$this->subscriberEntity->setYear($year);
			//$this->subscriberEntity->setNo($no);
			$this->subscriberEntity->setFirstname($firstname);
			$this->subscriberEntity->setLastname($lastname);
			$this->subscriberEntity->setDegree($degree);
			$this->subscriberEntity->setNotes($notes);
			$this->subscriberEntity->setPhone($phone);
			$this->subscriberEntity->setMobile($mobile);
			$this->subscriberEntity->setCounterType($counter_type);
			$this->subscriberEntity->setCounterLightingNo($counter_lighting_no);
			$this->subscriberEntity->setCounterLightingFactor($counter_lighting_factor);
			$this->subscriberEntity->setCounterLightingBrand($counter_lighting_brand);
			$this->subscriberEntity->setCounterEngineNo($counter_engine_no);
			$this->subscriberEntity->setCounterEngineFactor($counter_engine_factor);
			$this->subscriberEntity->setCounterEngineBrand($counter_engine_brand);
			$this->subscriberEntity->setOwnership($ownership);
			$this->subscriberEntity->setDeposit($deposit);
			$this->subscriberEntity->setReceiptNo($receipt_no);
			$this->subscriberEntity->setReceiptDate($receipt_date);
			$this->subscriberEntity->setStatus($status);

			$this->subscriberModel->update($id, $this->subscriberEntity);

			if ($this->subscriberModel->errors())
			{
				return redirect()->back()->with('error', $this->subscriberModel->errors());
			}

			return redirect()->back()->with('success', 'Abone başarılı bir şekilde güncellendi.');
		}

		$data = [
			'subscriber' => $this->subscriberModel->find($id)
		];

		return view('pages/definitions/subscribers/edit', $data);
	}
}
