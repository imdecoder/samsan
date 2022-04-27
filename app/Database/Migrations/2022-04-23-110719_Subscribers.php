<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Subscribers extends Migration
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
			'year' => [
				'type' => 'INT',
				'constraint' => 4,
				'null' => false,
				'unsigned' => true
			],
	        'no' => [
				'type' => 'INT',
		        'constraint' => 11,
		        'null' => false,
		        'unique' => true,
		        'unsigned' => true
	        ],
	        'firstname' => [
				'type' => 'VARCHAR',
		        'constraint' => 255,
		        'null' => false
	        ],
	        'lastname' => [
		        'type' => 'VARCHAR',
		        'constraint' => 255,
		        'null' => false
	        ],
	        'degree' => [
		        'type' => 'VARCHAR',
		        'constraint' => 255,
		        'null' => true
	        ],
			'notes' => [
				'type' => 'TEXT',
				'null' => true
			],
	        'phone' => [
		        'type' => 'VARCHAR',
		        'constraint' => 255,
		        'null' => true
	        ],
	        'mobile' => [
		        'type' => 'VARCHAR',
		        'constraint' => 255,
		        'null' => true
	        ],
	        'deposit' => [
		        'type' => 'DECIMAL',
		        'constraint' => '10,2',
		        'default' => 0,
		        'unsigned' => true
	        ],
			'counter_id' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => true
			],
	        'factor' => [
		        'type' => 'INT',
		        'constraint' => 11,
		        'null' => true,
		        'unsigned' => true
	        ],
	        'ownership' => [
				'type' => 'ENUM',
		        'constraint' => [
					'YES',
			        'NO'
		        ],
		        'null' => true
	        ],
			'receipt_date' => [
				'type' => 'DATETIME',
				'null' => true
			],
	        'receipt_no' => [
				'type' => 'INT',
		        'constraint' => 11,
		        'null' => true,
		        'unsigned' => true
	        ],
			'status' => [
				'type' => 'ENUM',
				'constraint' => [
					'ACTIVE',
					'PASSIVE'
				],
				'default' => 'ACTIVE'
			],
	        'created_at DATETIME DEFAULT CURRENT_TIMESTAMP',
	        'updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
	        'deleted_at' => [
				'type' => 'DATETIME',
		        'null' => true
	        ]
        ]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('subscribers');
    }

    public function down()
    {
        $this->forge->dropTable('subscribers');
    }
}
