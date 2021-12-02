<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TrackdtSeeder extends Seeder
{
    public function run()
    {
       $data = [
			[
				'number' => 1,
				'name'    => 'One'
			],
			[
				'number' => 2,
				'name'    => 'Two'
			],
			[
				'number' => 3,
				'name'    => 'Three'
			],
			[
				'number' => 4,
				'name'    => 'Four'
			],
			[
				'number' => 5,
				'name'    => 'Five'
			],
			[
				'number' => 6,
				'name'    => 'Six'
			],
			[
				'number' => 7,
				'name'    => 'Seven'
			],
			[
				'number' => 8,
				'name'    => 'Eight'
			],
			[
				'number' => 9,
				'name'    => 'Nine'
			],
			[
				'number' => 10,
				'name'    => 'Ten'
			],
			[
				'number' => 11,
				'name'    => 'Eleven'
			],
			[
				'number' => 12,
				'name'    => 'Twelve'
			],
			[
				'number' => 13,
				'name'    => 'Thirteen'
			],
			[
				'number' => 14,
				'name'    => 'Fourteen'
			]
		];

        // Using Query Builder
        $this->db->table('trackdt')->insertBatch($data);
    }
}
