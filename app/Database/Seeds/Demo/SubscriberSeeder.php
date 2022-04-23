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
			$data = [
				'no' => random_int(12000, 50000),
				'firstname' => $faker->firstName,
				'lastname' => $faker->lastName,
				'degree' => $faker->jobTitle,
				'phone' => $faker->phoneNumber,
				'mobile' => $faker->phoneNumber,
				'deposit' => random_int(0, 2000),
				'factor' => random_int(1, 30),
				'ownership' => null,
				'receipt_no' => random_int(1000, 4000),
				'status' => SUBS_ACTIVE
			];

			$this->db->table('subscribers')->insert($data);
		}
	}
}
