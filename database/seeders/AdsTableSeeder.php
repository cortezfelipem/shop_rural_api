<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ad;

class AdsTableSeeder extends Seeder
{
    public function run()
    {
        Ad::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Anúncio 1',
            'description' => 'Descrição do Anúncio 1',
            'price' => 1000.00,
            'cattle_name' => 'Gado A',
            'cattle_breed' => 'Raça X',
            'cattle_age' => 3,
        ]);

        Ad::create([
            'user_id' => 2,
            'category_id' => 2,
            'title' => 'Anúncio 2',
            'description' => 'Descrição do Anúncio 2',
            'price' => 1500.00,
            'cattle_name' => 'Gado B',
            'cattle_breed' => 'Raça Y',
            'cattle_age' => 2,
        ]);

        Ad::create([
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'Anúncio 3',
            'description' => 'Descrição do Anúncio 3',
            'price' => 800.00,
            'cattle_name' => 'Gado C',
            'cattle_breed' => 'Raça Z',
            'cattle_age' => 4,
        ]);
    }
}
