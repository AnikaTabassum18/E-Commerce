<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table_products')->insert([
            [
            "name" =>"LG K22 Mobile",
            "price"=>"15,000",
            "description"=>"Cleaning your smartphone – while always recommended – is now more important than ever. It’s estimated that we touch our phone every 12 minutes, so our hygiene needs to extend to the device we use most.",
            "category"=>"smart-phone",
            "gallery"=>"https://www.lg.com/us/cell-phones/lg-lmk200qm0aucltn-us-cellular-k22#",
            ],
            [
                "name" =>"LG UP7750 55'' UHD 4K TV",
                "price"=>"45,000",
                "description"=>"LG UHD TVs surpass your expectations every time. Experience lifelike picture quality and vivid colours with four times more pixel accuracy than Full HD.",
                "category"=>"smart-TV",
                "gallery"=>"https://www.lg.com/bd/tvs/lg-55up7750ptb",
            ],
            [
                "name" =>"LG WQXGA",
                "price"=>"55,000",
                "description"=>"WQXGA (2560x1600) display provides clear and vivid color, featuring twice the resolution of Full HD. So it enables you to perform tasks efficiently – such as typing, retouching or even coding.",
                "category"=>"Laptop",
                "gallery"=>"https://www.lg.com/bd/laptops",
            ],
            [
                "name" =>"LG UHD 4K 27'' IPS Display Monitor",
                "price"=>"75,000",
                "description"=>"Enjoy flawless visuals and the true vibrancy of color with LG UHD 4K HDR Monitor. Content creators working on HDR content will appreciate its capability to reproduce brightness and contrast for previews and editing.",
                "category"=>"IPS Display Monitor",
                "gallery"=>"https://www.lg.com/bd/consumer-monitors/lg-27up850-w",
            ]
        ]);
    }
}
