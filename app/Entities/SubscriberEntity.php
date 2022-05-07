<?php

namespace App\Entities;

use \CodeIgniter\Entity;

class SubscriberEntity extends Entity
{
	protected $id;
	protected $year;
	protected $no;
	protected $firstname;
	protected $lastname;
	protected $degree;
	protected $notes;
	protected $phone;
	protected $mobile;
	protected $deposit;
	protected $counter_type;
	protected $counter_lighting_no;
	protected $counter_lighting_factor;
	protected $counter_lighting_brand;
	protected $counter_engine_no;
	protected $counter_engine_factor;
	protected $counter_engine_brand;
	protected $ownership;
	protected $receipt_date;
	protected $receipt_no;
	protected $status;

	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at'
	];

	public function getYear()
	{
		return $this->attributes['year'];
	}

	public function getNo()
	{
		return $this->attributes['no'];
	}

	public function getFirstname()
	{
		return $this->attributes['firstname'];
	}

	public function getLastname()
	{
		return $this->attributes['lastname'];
	}

	public function getFullName()
	{
		return $this->attributes['firstname'] . ' ' . $this->attributes['lastname'];
	}

	public function getDegree()
	{
		return $this->attributes['degree'];
	}

	public function getNotes()
	{
		return $this->attributes['notes'];
	}

	public function getPhone()
	{
		return $this->attributes['phone'];
	}

	public function getMobile()
	{
		return $this->attributes['mobile'];
	}

	public function getDeposit()
	{
		return $this->attributes['deposit'];
	}

	public function getCounterType()
	{
		return $this->attributes['counter_type'];
	}

	public function getCounterLightingNo()
	{
		return $this->attributes['counter_lighting_no'];
	}

	public function getCounterLightingFactor()
	{
		return $this->attributes['counter_lighting_factor'];
	}

	public function getCounterLightingBrand()
	{
		return $this->attributes['counter_lighting_brand'];
	}

	public function getCounterEngineNo()
	{
		return $this->attributes['counter_engine_no'];
	}

	public function getCounterEngineFactor()
	{
		return $this->attributes['counter_engine_factor'];
	}

	public function getCounterEngineBrand()
	{
		return $this->attributes['counter_engine_brand'];
	}

	public function getOwnership()
	{
		return $this->attributes['ownership'];
	}

	public function getOwnershipName()
	{
		$ownership = $this->attributes['ownership'];

		if ($ownership == SUBS_OWN_YES)
		{
			return 'Evet';
		}

		if ($ownership == SUBS_OWN_NO)
		{
			return 'Hayır';
		}

		return 'Bilinmiyor';
	}

	public function getReceiptDate()
	{
		return $this->attributes['receipt_date'];
	}

	public function getReceiptNo()
	{
		return $this->attributes['receipt_no'];
	}

	public function getStatus()
	{
		return $this->attributes['status'];
	}

	public function getCreatedAt()
	{
		return $this->attributes['created_at'];
	}

	public function getUpdatedAt()
	{
		return $this->attributes['updated_at'];
	}

	public function getDeletedAt()
	{
		return $this->attributes['deleted_at'];
	}

	public function setId($id)
	{
		$this->attributes['id'] = $id;
	}

	public function setYear($year)
	{
		$this->attributes['year'] = $year;
	}

	public function setNo($no)
	{
		$this->attributes['no'] = $no;
	}

	public function setFirstname($firstname)
	{
		$this->attributes['firstname'] = $firstname;
	}

	public function setLastname($lastname)
	{
		$this->attributes['lastname'] = $lastname;
	}

	public function setDegree($degree)
	{
		$this->attributes['degree'] = $degree;
	}

	public function setNotes($notes)
	{
		$this->attributes['notes'] = $notes;
	}

	public function setPhone($phone)
	{
		$this->attributes['phone'] = $phone;
	}

	public function setMobile($mobile)
	{
		$this->attributes['mobile'] = $mobile;
	}

	public function setDeposit($deposit)
	{
		$this->attributes['deposit'] = $deposit;
	}

	public function setCounterType($counter_type)
	{
		$this->attributes['counter_type'] = $counter_type;
	}

	public function setCounterLightingNo($counter_lighting_no)
	{
		$this->attributes['counter_lighting_no'] = $counter_lighting_no;
	}

	public function setCounterLightingFactor($counter_lighting_factor)
	{
		$this->attributes['counter_lighting_factor'] = $counter_lighting_factor;
	}

	public function setCounterLightingBrand($counter_lighting_brand)
	{
		$this->attributes['counter_lighting_brand'] = $counter_lighting_brand;
	}

	public function setCounterEngineNo($counter_engine_no)
	{
		$this->attributes['counter_engine_no'] = $counter_engine_no;
	}

	public function setCounterEngineFactor($counter_engine_factor)
	{
		$this->attributes['counter_engine_factor'] = $counter_engine_factor;
	}

	public function setCounterEngineBrand($counter_engine_brand)
	{
		$this->attributes['counter_engine_brand'] = $counter_engine_brand;
	}

	public function setOwnership($ownership = SUBS_OWN_YES)
	{
		$this->attributes['ownership'] = $ownership;
	}

	public function setReceiptDate($receipt_date)
	{
		$this->attributes['receipt_date'] = $receipt_date;
	}

	public function setReceiptNo($receipt_no)
	{
		$this->attributes['receipt_no'] = $receipt_no;
	}

	public function setStatus($status = STATUS_ACTIVE)
	{
		$this->attributes['status'] = $status;
	}

	public function setDeletedAt()
	{
		$this->attributes['deleted_at'] = date('Y-m-d H:i:s');
	}
}
