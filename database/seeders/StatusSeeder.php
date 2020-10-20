<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Art\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::create([
            'name'          => 'Pending',
            'description'   => '-'
        ]);

        Status::create([
            'name'          => 'Approve',
            'description'   => '-'
        ]);

        Status::create([
            'name'          => 'Reject',
            'description'   => '-'
        ]);
    }
}
