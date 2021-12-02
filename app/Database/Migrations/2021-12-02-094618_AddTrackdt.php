<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTrackdt extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'number'       => [
                'type'       => 'INT',
                'constraint' => 11,
            ],
            'name' => [
                'type' => 'VARCHAR',
				'constraint'	=> 50,
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('trackdt');

    }

    public function down()
    {
		$this->forge->dropTable('trackdt');
    }
}
