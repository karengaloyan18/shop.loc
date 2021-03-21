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
                'image' => 'iphone-12-pro-max.jpg',
                'category_name' => 'Iphone'
            ],
            [
                'name' => 'Air Pods',
                'price' => '16990',
                'description' => 'AirPods deliver an unparalleled wireless headphone experience.',
                'image' => 'MRXJ2.jpg',
                'category_name' => 'Air Pods'
            ],
            [
                'name' => 'Iphone XR',
                'price' => '49990',
                'description' => 'The Apple iPhone XR is a smartphone that was tested with the iOS 12.0.1 OS',
                'image' => 'iphone_x_silver.jpg',
                'category_name' => 'Iphone'
            ],
            [
                'name' => 'Iphone XS',
                'price' => '54990',
                'description' => 'The 5.8-inch iPhone Xs feature stunning Super Retina displays.',
                'image' => 'XS-10.jpg',
                'category_name' => 'Iphone'
            ],
            [
                'name' => 'Iphone 11 Pro',
                'price' => '90990',
                'description' => ' iPhone 11 Pro based on iOS 13 and packs 64GB of inbuilt storage',
                'image' => 'iphone11pro.jpg',
                'category_name' => 'Iphone'
            ],
            [
                'name' => 'Iphone 12 Pro',
                'price' => '109990',
                'description' => ' The Pro camera system takes low-light photography to the next level — with an even bigger jump on iPhone 12 Pro Max.',
                'image' => 'iphone12pro.jpg',
                'category_name' => 'Iphone'
            ],
            [
                'name' => 'Air Pods Pro',
                'price' => '22990',
                'description' => 'Active Noise Cancellation for immersive sound.',
                'image' => 'airpodspro.jpg',
                'category_name' => 'Air Pods'
            ],
            [
                'name' => 'Iphone 12 mini',
                'price' => '22990',
                'description' => '5G speed. A14 Bionic, the fastest chip in a smartphone.An edge-to-edge OLED display.',
                'image' => 'iphone12mini.jpg',
                'category_name' => 'Iphone'
            ],
            [
                'name' => 'Apple Watch SE',
                'price' => '27990',
                'description' => 'Apple Watch SE packs a large Retina display, advanced sensors for fitness, and powerful features for both health and safety.',
                'image' => 'applewatchse.jpg',
                'category_name' => 'Apple Watch'
            ],
            [
                'name' => 'Apple Watch Series 6',
                'price' => '40990',
                'description' => 'With Apple Watch Series 6 on your wrist, a healthier, more active, more connected life is within reach.',
                'image' => 'applewatch6.jpg',
                'category_name' => 'Apple Watch'
            ],
            [
                'name' => 'Apple Watch Series 3',
                'price' => '22990',
                'description' => 'The core fitness, heart-monitoring, and connectivity features that make Apple Watch the ultimate device for a healthy life.',
                'image' => 'applewatch3.jpg',
                'category_name' => 'Apple Watch'
            ],
            [
                'name' => '	iPad Pro',
                'price' => '114990',
                'description' => 'Your next computer is not a computer.',
                'image' => 'ipadpro.png',
                'category_name' => 'Ipad'
            ],
            [
                'name' => '	iPad Air',
                'price' => '67990',
                'description' => 'An all-screen design with a stunning 10.9‑inch Liquid Retina display',
                'image' => 'ipadair.jpg',
                'category_name' => 'Ipad'
            ],
            [
                'name' => '	iPad mini',
                'price' => '35990',
                'description' => 'iPad mini features a thin, light, and portable design that makes it the perfect on-the-go companion.',
                'image' => 'orig.jpg',
                'category_name' => 'Ipad'
            ],
        ]);
    }
}

