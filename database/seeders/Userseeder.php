<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        DB::table('users')->insert([
//            'name' => Str::random(10),
//            'email' => Str::random(10).'@gmail.com',
//            'password' => Hash::make('password'),
//        ]);
        DB::table('products')->insert([
            [
                'name' => 'Iphone 12 Pro Max',
                'price' => '129990',
                'description' => 'Its new Iphone 12',
                'image' => 'iphone-12-pro-max.png',
                'category_name' => 'mobile'
            ],
            [
                'name' => 'Air Pods',
                'price' => '16990',
                'description' => 'AirPods deliver an unparalleled wireless headphone experience.',
                'image' => 'MRXJ2.jpg',
                'category_name' => 'portable'
            ],
            [
                'name' => 'Iphone XR',
                'price' => '49990',
                'description' => 'The Apple iPhone XR is a smartphone that was tested with the iOS 12.0.1 OS',
                'image' => 'iphone_x_silver.jpg',
                'category_name' => 'mobile'
            ],
            [
                'name' => 'Iphone XS',
                'price' => '54990',
                'description' => 'The 5.8-inch iPhone Xs feature stunning Super Retina displays.',
                'image' => 'XS-10.jpg',
                'category_name' => 'mobile'
            ],
            [
                'name' => 'Panasonic LUMIX',
                'price' => '40990',
                'description' => 'For every kind of photographer, theres a Panasonic LUMIX camera to match.',
                'image' => 'video_panasonic.jpg',
                'category_name' => 'portable'
            ],
            [
                'name' => 'Braun MQ535',
                'price' => '10990',
                'description' => 'Braun hand blender MQ535 White Sauce',
                'image' => 'moulinex.jpg',
                'category_name' => 'household'
            ],
            [
                'name' => 'Iphone 11 Pro',
                'price' => '90990',
                'description' => ' iPhone 11 Pro based on iOS 13 and packs 64GB of inbuilt storage',
                'image' => 'iphone11pro.jpg',
                'category_name' => 'mobile'
            ],
            [
                'name' => 'Nespresso Coffee',
                'price' => '20990',
                'description' => 'Espresso Machine Bundle with Aeroccino Milk Frother by DeLonghi, Black',
                'image' => 'delongi.jpg',
                'category_name' => 'household'
            ]
        ]);
    }
}
