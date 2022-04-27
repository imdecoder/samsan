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
        'month_name',
        'month_no',
        'tax_rate',
        'unit_price',
        'overdue_interest',
        'lighting_price',
        'service_price'
	];

	protected $validationRules = [
        'month_name' => 'required|string',
        'month_no' => 'required|numeric',
        'tax_rate' => 'required|numeric',
        'unit_price' => 'required|numeric',
        'overdue_interest' => 'required|numeric',
        'lighting_price' => 'required|numeric',
        'service_price' => 'required|numeric',
	];

	protected $validationMessages = [
        'month_name' => [
            'required' => 'Ay adı alanı zorunludur.',
            'string' => 'Ay alanı sadece harflerden oluşabilir.'
        ],
        'month_no' => [
            'required' => 'Ay numarası alanı zorunludur.',
            'numeric' => 'Ay numarası alanı sadece rakamlardan oluşabilir.'
        ],
        'tax_rate' => [
            'required' => 'Vergi oranı alanı zorunludur.',
            'numeric' => 'Vergi oranı alanı sadece rakamlardan oluşabilir.'
        ],
        'unit_price' => [
            'required' => 'Birim fiyat alanı zorunludur.',
            'numeric' => 'Birim fiyat alanı sadece rakamlardan oluşabilir.'
        ],
        'overdue_interest' => [
            'required' => 'Gecikme faizi alanı zorunludur.',
            'numeric' => 'Gecikme faizi alanı sadece rakamlardan oluşabilir.'
        ],
        'lighting_price' => [
            'required' => 'Aydınlatma ücreti alanı zorunludur.',
            'numeric' => 'Aydınlatma ücreti alanı sadece rakamlardan oluşabilir.'
        ],
        'service_price' => [
            'required' => 'Hizmet bedeli alanı zorunludur.',
            'numeric' => 'Hizmet bedeli alanı sadece rakamlardan oluşabilir.'
        ]
	];
}