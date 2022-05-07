<?php

namespace App\Database\Seeds\Demo;

class RateSeeder extends \CodeIgniter\Database\Seeder
{
	public function run()
	{
		$data = [
			[
				'month_name' => 'Ocak',
				'month_no' => 1,
				'tax_rate' => 18,
				'unit_price' => 244,
				'overdue_interest' => 4,
				'lighting_price' => 400,
				'service_price' => 200
			],
			[
				'month_name' => 'Şubat',
				'month_no' => 2,
				'tax_rate' => 18,
				'unit_price' => 244,
				'overdue_interest' => 4,
				'lighting_price' => 400,
				'service_price' => 200
			],
			[
				'month_name' => 'Mart',
				'month_no' => 3,
				'tax_rate' => 18,
				'unit_price' => 244,
				'overdue_interest' => 4,
				'lighting_price' => 400,
				'service_price' => 200
			],
			[
				'month_name' => 'Nisan',
				'month_no' => 4,
				'tax_rate' => 18,
				'unit_price' => 244,
				'overdue_interest' => 4,
				'lighting_price' => 400,
				'service_price' => 200
			],
			[
				'month_name' => 'Mayıs',
				'month_no' => 5,
				'tax_rate' => 18,
				'unit_price' => 244,
				'overdue_interest' => 4,
				'lighting_price' => 400,
				'service_price' => 200
			],
			[
				'month_name' => 'Haziran',
				'month_no' => 6,
				'tax_rate' => 18,
				'unit_price' => 244,
				'overdue_interest' => 4,
				'lighting_price' => 400,
				'service_price' => 200
			],
			[
				'month_name' => 'Temmuz',
				'month_no' => 7,
				'tax_rate' => 18,
				'unit_price' => 244,
				'overdue_interest' => 4,
				'lighting_price' => 400,
				'service_price' => 200
			],
			[
				'month_name' => 'Ağustos',
				'month_no' => 8,
				'tax_rate' => 18,
				'unit_price' => 244,
				'overdue_interest' => 4,
				'lighting_price' => 400,
				'service_price' => 200
			],
			[
				'month_name' => 'Eylül',
				'month_no' => 9,
				'tax_rate' => 18,
				'unit_price' => 244,
				'overdue_interest' => 4,
				'lighting_price' => 400,
				'service_price' => 200
			],
			[
				'month_name' => 'Ekim',
				'month_no' => 10,
				'tax_rate' => 18,
				'unit_price' => 244,
				'overdue_interest' => 4,
				'lighting_price' => 400,
				'service_price' => 200
			],
			[
				'month_name' => 'Kasım',
				'month_no' => 11,
				'tax_rate' => 18,
				'unit_price' => 244,
				'overdue_interest' => 4,
				'lighting_price' => 400,
				'service_price' => 200
			],
			[
				'month_name' => 'Aralık',
				'month_no' => 12,
				'tax_rate' => 18,
				'unit_price' => 244,
				'overdue_interest' => 4,
				'lighting_price' => 400,
				'service_price' => 200
			]
		];

		$this->db->table('rates')->insertBatch($data);
	}
}
