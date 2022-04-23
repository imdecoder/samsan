<?php

namespace App\Controllers;

use App\Models\SubscriberModel;

class Test extends BaseController
{
	public function index()
	{
		$model = new SubscriberModel();
		$subscriber = $model->find(2);

		return $this->response->setJSON([
			'subscriber' => $subscriber->getDegree()
		]);
	}
}
