<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\SiteInfo;

class SiteInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SiteInfo::create([
            'address'         => 'Market Circle, Takoradi, WS0034423, Ghana',
            'box_office'      => 'P. O. Box MC 2185, Takoradi',
            'phone_developer' => '+233 557 821 030',
            'phone_info'      => '+233 557 821 030',
            'phone_admin'     => '+233 249 577 827',
            'phone_support'   => '+233 557 821 030',
            'email_developer' => 'theonlyamos@gmail.com',
            'email_info'      => 'info@openmartgh.com',
            'email_support'   => 'support@openmartgh.com',
            'email_admin'     => 'admin@openmartgh.com',
            'description'     => 'Revolutionizing trade with passion'
        ]);
    }
}
