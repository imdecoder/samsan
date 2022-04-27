<?php

namespace App\Models;

use CodeIgniter\Model;

class RatesModel extends Model
{
	protected $table = 'rates';
	protected $primaryKey = 'id';

	protected $returnType = \stdClass::class;
	protected $useSoftDeletes = true;

	protected $allowedFields = [
		// fields
	];

	protected $validationRules = [
		// rules
	];

	protected $validationMessages = [
		// messages
	];
}