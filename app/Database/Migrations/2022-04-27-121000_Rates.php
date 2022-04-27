<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Rates extends Migration
{
    public function up()
    {
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true
			],
			'month_name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => false
			],
			'month_no' => [
				'type' => 'INT',
				'constraint' => 2,
				'null' => false,
				'unsigned' => true
			],
			'tax_rate' => [
				'type' => 'INT',
				'constraint' => 3,
				'null' => false,
				'unsigned' => true
			],
			'unit_price' => [
				'type' => 'INT',
				'constraint' => 4,
				'null' => false,
				'unsigned' => true
			],
			'overdue_interest' => [
				'type' => 'INT',
				'constraint' => 2,
				'null' => false,
				'unsigned' => true
			],
			'lighting_price' => [
				'type' => 'INT',
				'constraint' => 4,
				'null' => false,
				'unsigned' => true
			],
			'service_price' => [
				'type' => 'INT',
				'constraint' => 4,
				'null' => false,
				'unsigned' => true
			]
		]);
    }

    public function down()
    {
        //
    }
}
