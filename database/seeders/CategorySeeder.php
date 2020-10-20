<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Art\Category;

class CategorySeeder extends Seeder
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
            'name'  => 'Drawing',
            ],
            [
            'name'  => 'Furniture',
            ],
            [
            'name'  => 'Painting',
            ],
            [
            'name'  => 'Photography',
            ],
            [
            'name'  => 'Sculpture',
            ],
        ];

        Category::insert($data);
    }
}
