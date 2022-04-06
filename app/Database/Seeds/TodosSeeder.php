<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TodosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'title' => 'tes',
            'description'    => 'ngetes aja',
            'finished_at'    => 0,
            'created_at'    => 0,
		'updated_at'    => 0,
		'deleted_at'    => 0,
        ];

        // Simple Queries
        $this->db->table('todos')->insert($data);
        
        $data = [
            'title' => 'tes2',
            'description'    => 'ngetes lagi',
            'finished_at'    => 0,
            'created_at'    => 0,
		'deleted_at'    => 0,
        ];
        // Using Query Builder
        $this->db->table('todos')->insert($data);

        $data = [
            'title' => 'tes3',
            'description'    => 'ngetes terus',
            'finished_at'    => 0,
            'created_at'    => 0,
		'deleted_at'    => 0,
        ];
        // Using Query Builder
        $this->db->table('todos')->insert($data);
    }
}
