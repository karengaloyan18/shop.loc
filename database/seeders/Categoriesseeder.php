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
            ['name'=>'smartphones','description'=>'Mobile phones','image'=>'mobile.jpg'],
            ['name'=>'wireless headphones','description'=>'Say it in a way only you can.','image'=>'portable.jpg'],
            ['name'=>'smart watch','description'=>'Section with household appliances','image'=>'smartwatch.jpg']
        ]);
    }
}
