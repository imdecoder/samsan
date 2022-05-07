<?php

namespace App\Models;

use \CodeIgniter\Model;
use App\Entities\SubscriberEntity;

class SubscriberModel extends Model
{
	protected $table = 'subscribers';
	protected $primaryKey = 'id';

	protected $returnType = SubscriberEntity::class;
	protected $useSoftDeletes = true;

	protected $allowedFields = [
		'year',
		'no',
		'firstname',
		'lastname',
		'degree',
		'notes',
		'phone',
		'mobile',
		'deposit',
		'counter_type',
		'counter_lighting_no',
		'counter_lighting_factor',
		'counter_lighting_brand',
		'counter_engine_no',
		'counter_engine_factor',
		'counter_engine_brand',
		'ownership',
		'receipt_date',
		'receipt_no',
		'status',
		'deleted_at'
	];

	protected $useTimestamps = true;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $validationRules = [
		'year' => 'required|numeric',
		'no' => 'required|numeric|is_unique[subscribers.no]',
		'firstname' => 'required|string|min_length[3]',
		'lastname' => 'required|string|min_length[3]',
		'degree' => 'string',
		'counter_type' => 'required',
		'status' => 'required'
	];

	protected $validationMessages = [
		'year' => [
			'required' => 'Yıl alanı zorunludur.',
			'numeric' => 'Yıl alanı sadece rakamlardan oluşabilir.'
		],
		'no' => [
			'required' => 'Abone numarası alanı zorunludur.',
			'numeric' => 'Abone numarası alanı sadece rakamlardan oluşabilir.',
			'is_unique' => 'Abone numarası başka bir abone tarafından kullanılıyor.'
		],
		'firstname' => [
			'required' => 'Ad alanı zorunludur.',
			'string' => 'Ad alanı sadece alfabetik karakterlerden oluşabilir.',
			'min_length' => 'Ad alanı en az 3 karakterden oluşabilir.'
		],
		'lastname' => [
			'required' => 'Soyad alanı zorunludur.',
			'string' => 'Soyad alanı sadece alfabetik karakterlerden oluşabilir.',
			'min_length' => 'Soyad alanı en az 3 karakterden oluşabilir.'
		],
		'degree' => [
			'string' => 'Ünvan alanı sadece alfabetik karakterlerden oluşabilir.'
		],
		'counter_type' => [
			'required' => 'Sayaç tipi alanı zorunludur.'
		],
		'status' => [
			'required' => 'Abone durumu alanı zorunludur.',
		]
	];
}