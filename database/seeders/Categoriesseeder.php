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
            ['name'=>'mobile','description'=>'Mobile phones','image'=>'mobile.jpg'],
            ['name'=>'portable','description'=>'Section with portable equipment','image'=>'portable.jpg'],
            ['name'=>'household','description'=>'Section with household appliances','image'=>'appliance.jpg']
        ]);
    }
}
