<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTodosTable extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "title" => [
                "type"=> "VARCHAR",
                "constraint" => "200",
                "null" => false,
            ],
            "description" => [
                "type"=> "TEXT",
                "constraint" => "200",
		    "default" => null,
            ],
            "finished_at" => [
                "type"=> "DATETIME",
                "null" => true,
            ],
            "created_at" => [
                "type"=> "DATETIME",
                "null" => false,
                "current_timestamp"  => true,
            ],
		"updated_at" => [
                "type"=> "DATETIME",
                "null" => false,
                "current_timestamp"  => true,
            ],
		"deleted_at" => [
                "type"=> "DATETIME",
                "null" => true,
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('todos', true); //If NOT EXISTS create table products
    }

    public function down()
    {
     $this->forge->dropTable('todos', true); //If Exists drop table products
    }
}
