<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Art\Size;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            'name'  => '2x3 ft.',
            ],
            [
            'name'  => 'Small',
            ],
            [
            'name'  => 'Medium',
            ],
            [
            'name'  => 'Large',
            ],
            [
            'name'  => 'Oversized',
            ],
        ];

        Size::insert($data);
    }
}
