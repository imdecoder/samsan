<?php

namespace App\Entities;

use \CodeIgniter\Entity;

class AccrualEntity extends Entity
{
	protected $id;
	protected $subscriber_id;
	protected $period;
	protected $lighting_endex;
	protected $engine_endex;
	protected $read_date;
	protected $excludes;
	protected $lighting;
	protected $maintenance;
	protected $delay;
	protected $tax;
	protected $billing_price;
	protected $due_date;
	protected $billing_date;
	protected $receipt_no;
	protected $paid;
	protected $paid_date;
	protected $tm_kws;

	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at'
	];

	public function getSubscriberId()
	{
		return $this->attributes['subscriber_id'];
	}

	public function getPeriod()
	{
		return $this->attributes['period'];
	}

	public function getLightingEndex()
	{
		return $this->attributes['lighting_endex'];
	}

	public function getEngineEndex()
	{
		return $this->attributes['engine_endex'];
	}

	public function getReadDate()
	{
		return $this->attributes['read_date'];
	}

	public function getExcludes()
	{
		return $this->attributes['excludes'];
	}

	public function getLighting()
	{
		return $this->attributes['lighting'];
	}

	public function getMaintenance()
	{
		return $this->attributes['maintenance'];
	}

	public function getDelay()
	{
		return $this->attributes['delay'];
	}

	public function getTax()
	{
		return $this->attributes['tax'];
	}

	public function getBillingPrice()
	{
		return $this->attributes['billing_price'];
	}

	public function getDueDate()
	{
		return $this->attributes['due_date'];
	}

	public function getBillingDate()
	{
		return $this->attributes['billing_date'];
	}

	public function getReceiptNo()
	{
		return $this->attributes['receipt_no'];
	}

	public function getPaid()
	{
		return $this->attributes['paid'];
	}

	public function getPaidDate()
	{
		return $this->attributes['paid_date'];
	}

	public function getTmKws()
	{
		return $this->attributes['tm_kws'];
	}

	public function setId($id)
	{
		$this->attributes['id'] = $id;
	}

	public function setSubscriberId($subscriber_id)
	{
		$this->attributes['subscriber_id'] = $subscriber_id;
	}

	public function setPeriod($period)
	{
		$this->attributes['period'] = $period;
	}

	public function setLightingEndex($lighting_endex)
	{
		$this->attributes['lighting_endex'] = $lighting_endex;
	}

	public function setEngineEndex($engine_endex)
	{
		$this->attributes['engine_endex'] = $engine_endex;
	}

	public function setReadDate($read_date)
	{
		$this->attributes['read_date'] = $read_date;
	}

	public function setExcludes($excludes)
	{
		$this->attributes['excludes'] = $excludes;
	}

	public function setLighting($lighting)
	{
		$this->attributes['lighting'] = $lighting;
	}

	public function setMaintenance($maintenance)
	{
		$this->attributes['maintenance'] = $maintenance;
	}

	public function setDelay($delay)
	{
		$this->attributes['delay'] = $delay;
	}

	public function setTax($tax)
	{
		$this->attributes['tax'] = $tax;
	}

	public function setBillingPrice($billing_price)
	{
		$this->attributes['billing_price'] = $billing_price;
	}

	public function setDueDate($due_date)
	{
		$this->attributes['due_date'] = $due_date;
	}

	public function setBillingDate($billing_date)
	{
		$this->attributes['billing_date'] = $billing_date;
	}

	public function setReceiptNo($receipt_no)
	{
		$this->attributes['receipt_no'] = $receipt_no;
	}

	public function setPaid($paid)
	{
		$this->attributes['paid'] = $paid;
	}

	public function setPaidDate($paid_date)
	{
		$this->attributes['paid_date'] = $paid_date;
	}

	public function setTmKws($tm_kws)
	{
		$this->attributes['tm_kws'] = $tm_kws;
	}

	public function setDeletedAt()
	{
		$this->attributes['deleted_at'] = date('Y-m-d H:i:s');
	}
}
