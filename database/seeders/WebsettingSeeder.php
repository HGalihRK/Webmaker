<?php

namespace Database\Seeders;

use App\Models\Websetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Websetting::create([
            'page_title' => 'My Website',
            'tag' => 'My Website Description',
            'email' => 'admin@webmaker.com',
            'logo_url' => 'logo.webp',
            'banner_img_url' => 'sample.jpg',
            'google_map_url' => 'https://www.google.com/maps/place/Indonesia/data=!4m2!3m1!1s0x2c4c07d7496404b7:0xe37b4de71badf485?sa=X&ved=2ahUKEwjT8ODm9fr7AhWE7zgGHfiACecQ8gF6BAgPEAE',
            'footer_text' => 'My Website Footer Text',
            'theme' => 'default',
        ]);
    }
}
