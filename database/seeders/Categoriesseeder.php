<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categoriesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            ['name'=>'Iphone','description'=>'Mobile phones','image'=>'mobile.jpg'],
            ['name'=>'Apple Watch','description'=>'The future of health is on your wrist.','image'=>'smartwatch.jpg'],
            ['name'=>'Air Pods','description'=>'Say it in a way only you can.','image'=>'portable.jpg'],
            ['name'=>'Ipad','description'=>'Powerful. Colorful. Wonderful.','image'=>'ipad.jpg']
        ]);
    }
}
