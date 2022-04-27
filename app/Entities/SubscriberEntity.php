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
	protected $counter_id;
	protected $factor;
	protected $ownership;
	protected $receipt_date;
	protected $receipt_no;
	protected $status;

	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at'
	];

	/*public function getID()
	{
		return $this->attributes['id'];
	}*/

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

	public function getCounterID()
	{
		return $this->attributes['counter_id'];
	}

	public function getFactor()
	{
		return $this->attributes['factor'];
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

	public function setYear(int $year)
	{
		$this->attributes['year'] = $year;
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

	public function setNotes(string $notes)
	{
		$this->attributes['notes'] = $notes;
	}

	public function setPhone(string $phone)
	{
		$this->attributes['phone'] = $phone;
	}

	public function setMobile(string $mobile)
	{
		$this->attributes['mobile'] = $mobile;
	}

	public function setDeposit($deposit)
	{
		$this->attributes['deposit'] = $deposit;
	}

	public function setCounterID(int $counter_id)
	{
		$this->attributes['counter_id'] = $counter_id;
	}

	public function setFactor(int $factor)
	{
		$this->attributes['factor'] = $factor;
	}

	public function setOwnership($ownership = SUBS_OWN_YES)
	{
		$this->attributes['ownership'] = $ownership;
	}

	public function setReceiptDate($receipt_date)
	{
		$this->attributes['receipt_date'] = $receipt_date;
	}

	public function setReceiptNo(int $receipt_no)
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
