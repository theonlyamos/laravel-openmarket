<?php

use Database\Seeders\AdminSeeder;
use Database\Seeders\SiteInfoSeeder;
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
        $this->call(AdminSeeder::class);
        $this->call(SiteInfoSeeder::class);
    }
}
