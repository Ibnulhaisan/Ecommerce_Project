<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'LG mobile', 'price' => '20000', 'description' => 'A smartphone with 4gb ram and much more feature','category' => 'Mobile','gallery' => 'https://www.theguardian.com/technology/2019/dec/17/best-smartphone-2019-iphone-oneplus-samsung-and-huawei-compared-and-ranked'],
            ['name' => 'LG tv', 'price' => '40000', 'description' => 'A smart tv with much more feature','category' => 'Tv','gallery' => 'https://www.amazon.in/LG-inches-Ready-32LQ576BPSA-Ceramic/dp/B09YL9SN9B'],
            ['name' => 'LG freeze', 'price' => '25000', 'description' => 'A smart freeze with 4gb ram and much more feature','category' => 'Mobile','gallery' => 'https://www.lg.com/in/refrigerators/lg-GL-D221ABCY'],
            ['name' => 'LG Monitor', 'price' => '10000', 'description' => 'A smart Monitor with LED display and much more feature','category' => 'Monitor','gallery' => 'https://www.pexels.com/photo/silver-imac-apple-magic-keyboard-and-magic-mouse-on-wooden-table-38568/'],
            ['name' => 'LG AC', 'price' => '30000', 'description' => 'A smart AC with 4gb ram and much more feature','category' => 'AC','gallery' => 'https://www.seekpng.com/ima/u2q8r5a9e6y3o0o0/'],
   // add more user data as needed
];
        foreach ($users as $userData) {
            $user = new Product();
            $user->name = $userData['name'];
            $user->price = $userData['price'];
            $user->description = $userData['description'];
            $user->category = $userData['category'];
            $user->gallery = $userData['gallery'];
            $user->save();
        }
    }
}

