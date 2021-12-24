<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdvokatskaKancelarija;

class AdvokatskaKancelarijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdvokatskaKancelarija::factory()->count(35)->create();
    }
}
