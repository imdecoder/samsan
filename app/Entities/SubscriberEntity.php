<?php

namespace App\Entities;

use \CodeIgniter\Entity;

class SubscriberEntity extends Entity
{
	protected $id;
	protected $no;
	protected $firstname;
	protected $lastname;
	protected $degree;
	protected $phone;
	protected $mobile;
	protected $deposit;
	protected $factor;
	protected $ownership;
	protected $receipt_no;
	protected $status;

	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at'
	];

	public function getID()
	{
		return $this->attributes['id'];
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

	public function getFactor()
	{
		return $this->attributes['factor'];
	}

	public function getOwnership()
	{
		return $this->attributes['ownership'];
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

	public function setNo(int $no)
	{
		$this->attributes['no'] = $no;
	}

	public function setFirstname(string $firstname)
	{
		$this->attributes['firstname'] = $firstname;
	}

	public function setLastname(string $lastname)
	{
		$this->attributes['lastname'] = $lastname;
	}

	public function setDegree(string $degree)
	{
		$this->attributes['degree'] = $degree;
	}

	public function setPhone(string $phone)
	{
		$this->attributes['phone'] = $phone;
	}

	public function setMobile(string $mobile)
	{
		$this->attributes['mobile'] = $mobile;
	}

	public function setDeposit(int $deposit)
	{
		$this->attributes['deposit'] = $deposit;
	}

	public function setFactor(int $factor)
	{
		$this->attributes['factor'] = $factor;
	}

	public function setOwnership($ownership = SUBS_OWN_YES)
	{
		$this->attributes['ownership'] = $ownership;
	}

	public function setReceiptNo(int $receipt_no)
	{
		$this->attributes['receipt_no'] = $receipt_no;
	}

	public function setStatus($status = SUBS_ACTIVE)
	{
		$this->attributes['status'] = $status;
	}

	public function setDeletedAt()
	{
		$this->attributes['deleted_at'] = date('Y-m-d H:i:s');
	}
}