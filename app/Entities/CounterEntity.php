<?php

namespace App\Entities;

use \CodeIgniter\Entity;

class CounterEntity extends Entity
{
	protected $id;
	protected $name;

	protected $dates = [
		'created_at',
		'updated_at',
		'deleted_at'
	];

	public function getID()
	{
		return $this->attributes['id'];
	}

	public function getName()
	{
		return $this->attributes['name'];
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

	public function setName(string $name)
	{
		$this->attributes['name'] = $name;
	}

	public function setDeletedAt()
	{
		$this->attributes['deleted_at'] = date('Y-m-d H:i:s');
	}
}
