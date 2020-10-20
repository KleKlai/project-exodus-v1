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
            'name'          => 'Agusan Artist Association (AAA)',
        ]);

        Type::create([
            'name'          => 'Bukidnon Local Artists Club (BLAC)',
        ]);

        Type::create([
            'name'          => 'Datu Bago',
        ]);

        Type::create([
            'name'          => 'Davao Oriental Artists',
        ]);

        Type::create([
            'name'          => 'Deanna Sipaco (DS) Foundation for the Differently-Abled, Inc.',
        ]);

        Type::create([
            'name'          => 'Gall Down South',
        ]);

        Type::create([
            'name'          => 'Good Times Café and Art Gallery (Zambo Norte)',
        ]);

        Type::create([
            'name'          => 'Guhit Pinas (Agusan)',
        ]);

        Type::create([
            'name'          => 'Iligan Visual Artists (IVA)',
        ]);

        Type::create([
            'name'          => 'Irinugyun',
        ]);

        Type::create([
            'name'          => 'Likha KARAGA',
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
            'name'          => 'Talaandig Soil Paintings',
        ]);

        Type::create([
            'name'          => 'TheBauHaus',
        ]);

        Type::create([
            'name'          => 'The Gallery of the Peninsula and the Archipelago',
        ]);

        Type::create([
            'name'          => 'TINTA Artists Iligan',
        ]);
    }
}
