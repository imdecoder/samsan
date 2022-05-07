<?php

namespace App\Database\Seeds\Demo;

use \CodeIgniter\Database\Seeder;
use Faker\Factory;

class AccrualSeeder extends Seeder
{
	public function run()
	{
		$faker = Factory::create('tr_TR');

		for ($i = 0; $i < 1; $i++)
		{
			$data = [
				'subscriber_id' => random_int(1, 100),
				'period' => random_int(1, 12) . '-2022',
				'lighting_endex' => random_int(500, 1000),
				'engine_endex' => random_int(500, 1000),
				'read_date' => $faker->date,
				'excludes' => random_int(100, 6000),
				'lighting' => 4,
				'maintenance' => random_int(0, 2),
				'delay' => random_int(0, 3),
				'tax' => random_int(500, 1000),
				'billing_price' => 0,
				'due_date' => $faker->date,
				'billing_date' => $faker->date,
				'receipt_no' => random_int(100000, 200000),
				'paid' => random_int(200, 2000),
				'paid_date' => $faker->date,
				'tm_kws' => random_int(0, 100) . '-' . random_int(0, 100)
			];

			$this->db->table('accruals')->insert($data);
		}
	}
}
