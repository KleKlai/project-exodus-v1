<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Art\Material;

class MaterialSeeder extends Seeder
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
            'name'  => 'Canvas',
            ],
            [
            'name'  => 'Cardboard',
            ],
            [
            'name'  => 'Paper',
            ],
            [
            'name'  => 'Soft (Yarn, Cotton, Fabric)',
            ],
            [
            'name'  => 'Wood',
            ],
            [
            'name'  => 'Other',
            ],
        ];

        Material::insert($data);
    }
}
