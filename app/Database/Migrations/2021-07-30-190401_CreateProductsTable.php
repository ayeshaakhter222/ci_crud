<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTable extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'price' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'img' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'sku' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => true,
            ],
            'created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP',
            'updated_at TIMESTAMP NULL',
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('products');
	}

	public function down()
	{
		$this->forge->dropTable('products');
	}
}
