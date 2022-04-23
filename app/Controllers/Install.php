<?php

namespace App\Controllers;

use Config\Database;
use Config\Services;

class Install extends BaseController
{
	public function createTable()
	{
		$migrate = Services::migrations();
		$migrate->latest();
	}

	public function createDemo()
	{
		$seeder = Database::seeder();

		$seeder->call('App\Database\Seeds\Demo\SubscriberSeeder');
	}
}
