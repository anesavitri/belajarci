<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Email extends Migration
{
    public function up()
    {
        $fields = [
            "id" => [
                "type"=> "INT",
                "unsigned"=> true,
                "auto_increment"=> true,
            ],
            "name" => [
                "type"=> "VARCHAR",
                "constraint" => "230",
                "null" => false,
            ],
            "email" => [
                "type"=> "VARCHAR",
                "constraint" => "230",
		    "unique" => true,
            ],
            "created_at" => [
                "type"=> "DATETIME",
                "null" => false,
                "current_timestamp"  => true,
            ],
        ];
        $this->forge->addKey('id', true);
        $this->forge->addField($fields);
        $this->forge->createTable('email', true); //If NOT EXISTS create table products
    }

    public function down()
    {
     $this->forge->dropTable('email', true); //If Exists drop table products
    }
}
