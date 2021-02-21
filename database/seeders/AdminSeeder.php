<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Admin::create([
            "name" => "Administrator",
            "email" => "admin@openmartgh.com",
            "password" => Hash::make("openmartgh")
        ]);
    }
}
