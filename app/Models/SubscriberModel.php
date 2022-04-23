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
		'no',
		'firstname',
		'lastname',
		'degree',
		'phone',
		'mobile',
		'deposit',
		'factor',
		'ownership',
		'receipt_no',
		'status',
		'deleted_at'
	];

	protected $useTimestamps = true;
	protected $createdField = 'created_at';
	protected $updatedField = 'updated_at';
	protected $deletedField = 'deleted_at';

	protected $validationRules = [
		'no' => 'required|numeric|is_unique[subscribers.no]',
		'firstname' => 'required|string|min_length[3]',
		'lastname' => 'required|string|min_length[3]',
		'degree' => 'string',
		'phone' => 'numeric',
		'mobile' => 'numeric',
		'deposit' => 'numeric',
		'factor' => 'numeric',
		'receipt_no' => 'numeric',
		'status' => 'required'
	];

	protected $validationMessages = [
		'no' => [
			'required' => 'Abone numarası alanı zorunludur.',
			'numeric' => 'Abone numarası alanı sadece rakamlardan oluşabilir.',
			'is_unique' => 'Abone numarası başka bir abone tarafından kullanılıyor.'
		],
		'firstname' => [
			'required' => 'Ad alanı zorunludur.',
			'string' => 'Ad alanı sadece alfabetik karakterlerden oluşabilir.',
			'min_length' => 'Ad alanı en az 3 karakterden oluşmak zorundadır.'
		],
		'lastname' => [
			'required' => 'Soyad alanı zorunludur.',
			'string' => 'Soyad alanı sadece alfabetik karakterlerden oluşabilir.',
			'min_length' => 'Soyad alanı en az 3 karakterden oluşmak zorundadır.'
		],
		'degree' => [
			'string' => 'Ünvan alanı sadece alfabetik karakterlerden oluşabilir.'
		],
		'phone' => [
			'numeric' => 'Telefon numarası alanı sadece rakamlardan oluşabilir.'
		],
		'mobile' => [
			'numeric' => 'Mobil numara alanı sadece rakamlardan oluşabilir.'
		],
		'deposit' => [
			'numeric' => 'Depozito alanı sadece rakamlardan oluşabilir.'
		],
		'factor' => [
			'numeric' => 'Çarpan alanı sadece rakamlardan oluşabilir.'
		],
		'receipt_no' => [
			'numeric' => 'Kayıt makbuz numarası alanı sadece rakamlardan oluşabilir.'
		],
		'status' => [
			'required' => 'Abone durumu alanı zorunludur.',
		]
	];
}