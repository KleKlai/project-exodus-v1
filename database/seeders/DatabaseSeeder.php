<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(AboutSeeder::class);

        //TODO: Art Component
        $this->call(SubjectSeeder::class);
        $this->call(StyleSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(MediumSeeder::class);
        $this->call(MaterialSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(StatusSeeder::class);
        $this->call(ProfileCatSeeder::class);

    }
}
