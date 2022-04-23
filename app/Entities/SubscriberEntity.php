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
}