<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Accruals extends Migration
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
			'subscriber_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => false,
				'unique' => true
			],
			'period' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => false
			],
			'lighting_endex' => [
				'type' => 'INT',
				'constraint' => 11,
				'default' => 0
			],
			'engine_endex' => [
				'type' => 'INT',
				'constraint' => 11,
				'default' => 0
			],
			'read_date' => [
				'type' => 'DATE',
				'null' => false
			],
			'excludes' => [
				'type' => 'DECIMAL',
				'constraint' => '10,2',
				'default' => 0
			],
			'lighting' => [
				'type' => 'DECIMAL',
				'constraint' => '10,2',
				'default' => 0
			],
			'maintenance' => [
				'type' => 'DECIMAL',
				'constraint' => '10,2',
				'default' => 0
			],
			'delay' => [
				'type' => 'DECIMAL',
				'constraint' => '10,2',
				'default' => 0
			],
			'tax' => [
				'type' => 'DECIMAL',
				'constraint' => '10,2',
				'default' => 0
			],
			'billing_price' => [
				'type' => 'DECIMAL',
				'constraint' => '10,2',
				'default' => 0
			],
			'due_date' => [
				'type' => 'DATE',
				'null' => false
			],
			'billing_date' => [
				'type' => 'DATE',
				'null' => true
			],
			'receipt_no' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => true
			],
			'paid' => [
				'type' => 'DECIMAL',
				'constraint' => '10,2',
				'null' => true
			],
			'paid_date' => [
				'type' => 'DATE',
				'null' => true
			],
			'tm_kws' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => false
			],
			'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
			'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
			'deleted_at' => [
				'type' => 'DATETIME',
				'null' => true
			]
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('accruals');
    }

    public function down()
    {
		$this->forge->dropTable('accruals');
    }
}
