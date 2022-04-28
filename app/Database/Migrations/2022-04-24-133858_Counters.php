<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Counters extends Migration
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
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => false,
				'unique' => true
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
			'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
			'deleted_at' => [
				'type' => 'DATETIME',
				'null' => true
			]
		]);

		$this->forge->addKey('id', true);
		//$this->forge->createTable('counters');
    }

    public function down()
    {
		$this->forge->dropTable('counters');
    }
}
