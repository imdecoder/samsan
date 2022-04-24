<?php

namespace App\Database\Seeds\Demo;

use \CodeIgniter\Database\Seeder;

class CounterSeeder extends Seeder
{
	public function run()
	{
		$data = [
			['name' => 'Tenvirat'],
			['name' => 'Motor']
		];

		$this->db->table('counters')->insertBatch($data);
	}
}