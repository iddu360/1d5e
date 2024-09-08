<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBlogTables extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => ['type' => 'integer', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'slug' => ['type' => 'varchar', 'constraint' => 255],
            'lang' => ['type' => 'varchar', 'constraint' => 5, 'null' => true],
            'title' => ['type' => 'varchar', 'constraint' => 150],
            'text' => ['type' => 'text', 'null' => true],
            'created_at' => ['type' => 'datetime'],
            'updated_at' => ['type' => 'datetime'],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('article');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('article');
    }
}