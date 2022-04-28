<?php

namespace App\Database\Seeds\Demo;

use \CodeIgniter\Database\Seeder;
use Faker\Factory;

class SubscriberSeeder extends Seeder
{
	public function run()
	{
		$faker = Factory::create('tr_TR');

		for ($i = 0; $i < 100; $i++)
		{
			$date = rand(strtotime('Jan 01 2012'), strtotime('Nov 01 2022'));

			$data = [
				'year' => random_int(2012, 2022),
				'no' => random_int(12000, 50000),
				'firstname' => $faker->firstName,
				'lastname' => $faker->lastName,
				'degree' => $faker->jobTitle,
				'notes' => $faker->realText(200),
				'phone' => $faker->phoneNumber,
				'mobile' => $faker->phoneNumber,
				'deposit' => random_int(0, 2000),
				'counter_type' => COUNTER_TM,
				'counter_lighting_no' => random_int(1000, 4000),
				'counter_lighting_factor' => random_int(1, 15),
				'counter_lighting_brand' => null,
				'counter_engine_no' => random_int(1000, 4000),
				'counter_engine_factor' => random_int(1, 15),
				'counter_engine_brand' => null,
				'ownership' => null,
				'receipt_date' => date('Y-m-d H:i:s', $date),
				'receipt_no' => random_int(1000, 4000),
				'status' => STATUS_ACTIVE
			];

			$this->db->table('subscribers')->insert($data);
		}
	}
}
