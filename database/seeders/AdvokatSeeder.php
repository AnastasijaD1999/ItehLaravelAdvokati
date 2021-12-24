<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Advokat;

class AdvokatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advokat::factory()->count(30)->create();
    }
}
