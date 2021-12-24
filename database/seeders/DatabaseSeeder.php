<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AdvokatskaKancelarijaSeeder;
use Database\Seeders\AdvokatSeeder;
use Database\Seeders\KlijentSeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $ak = new AdvokatskaKancelarijaSeeder();
        $ak->run();
        $as = new AdvokatSeeder();
        $as->run();
        $us = new KlijentSeeder();
        $us->run();
    }
}
