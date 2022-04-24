<?php

namespace App\Models;

use \CodeIgniter\Model;

class CounterModel extends Model
{
	protected $table = 'counters';
	protected $primaryKey = 'id';

	protected $returnType = SubscriberEntity::class;
	protected $useSoftDeletes = true;

	protected $allowedFields = [
		'name',
		'deleted_at'
	];

	protected $useTimestamps = true;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $validationRules = [
		'name' => 'required|string|is_unique[counters.name]'
	];

	protected $validationMessages = [
		'name' => [
			'required' => 'Sayaç tipi alanı zorunludur.',
			'string' => 'Sayaç tipi alanı sadece alfabetik karakterlerden oluşabilir.',
			'is_unique' => 'Sayaç tipi adı başka bir sayaç tipi tarafından kullanılıyor.'
		]
	];
}
