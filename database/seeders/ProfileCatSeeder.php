<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\Profile\Type;

class ProfileCatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name'          => "Agusan Artists' Assocciation AAA",
        ]);

        Type::create([
            'name'          => 'Bukidnon Local Artists Club (BLAC)',
        ]);

        Type::create([
            'name'          => 'Datu Bago Gallery',
        ]);

        Type::create([
            'name'          => 'Davao Oriental Artists',
        ]);

        Type::create([
            'name'          => 'Deanna Sipaco (DS) Foundation for the Differently-Abled, Inc.',
        ]);

        Type::create([
            'name'          => 'Gallery Down South',
        ]);

        Type::create([
            'name'          => 'Good Times Café and Art Gallery (Zambo Norte)',
        ]);

        Type::create([
            'name'          => 'Guhit Pinas (Agusan)',
        ]);

        Type::create([
            'name'          => 'Hini-GALAay',
        ]);

        Type::create([
            'name'          => 'Irinugyun Artist Group',
        ]);

        Type::create([
            'name'          => 'Likha-KARAGA',
        ]);

        Type::create([
            'name'          => 'Lumbayao Artist Collective',
        ]);

        Type::create([
            'name'          => 'Sining Mata Visual Art & Music School',
        ]);

        Type::create([
            'name'          => 'Studio One Art Iligan',
        ]);

        Type::create([
            'name'          => 'Talaandig Soil Painters',
        ]);

        Type::create([
            'name'          => 'TheBauHaus Gallery',
        ]);

        Type::create([
            'name'          => 'The Gallery of the Peninsula and the Archipelago',
        ]);

        Type::create([
            'name'          => 'TINTA Artists Iligan',
        ]);
    }
}
