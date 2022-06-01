<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Email extends Seeder
{
    public function run()
    {
        $data = 
			[
				'id' => '0001',
				'email' => 'test@gmail.com',
				'created_at' => 'null'
            ];
            $this->db->table('email')->insert($data);
            $data = 
			[
							'id' => '0002',
				'email' => 'test2@gmail.com',
				'created_at' => 'null'
            ];
            $this->db->table('email')->insert($data);
		
    }
}
