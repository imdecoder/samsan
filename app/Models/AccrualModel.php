<?php

namespace App\Models;

use App\Entities\AccrualEntity;
use \CodeIgniter\Model;

class AccrualModel extends Model
{
	protected $table = 'accruals';
	protected $primaryKey = 'id';

	protected $returnType = AccrualEntity::class;
	//protected $useSoftDeletes = true;

	protected $allowedFields = [
		'subscriber_id',
		'period',
		'lighting_endex',
		'engine_endex',
		'read_date',
		'excludes',
		'lighting',
		'maintenance',
		'delay',
		'tax',
		'billing_price',
		'due_date',
		'billing_date',
		'receipt_no',
		'paid',
		'paid_date',
		'tm_kws'
	];

	protected $useTimestamps = true;
	//protected $createdField = 'created_at';
	//protected $updatedField = 'updated_at';
	//protected $deletedField = 'deleted_at';

	protected $validationRules = [

	];

	protected $validationMessages = [

	];
}
