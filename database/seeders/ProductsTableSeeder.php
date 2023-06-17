<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'PlayStation 5 Console (PS5)',
                'description' => 'Stunning Games - Marvel at incredible graphics and experience new PS5 features.',
                'url_img' => 'https://m.media-amazon.com/images/I/612YEtRWckL._SL1500_.jpg',
                'price' => 400,
                'status' => 'active',
            ],
            [
                'name' => 'Apple Watch Series 8',
                'description' => 'Apple Watch Series 8 [GPS 41mm] Smart Watch w/Midnight Aluminum Case with Midnight Sport Band - M/L. Fitness Tracker, Blood Oxygen & ECG Apps, Always-On Retina Display, Water Resistant',
                'url_img' => 'https://m.media-amazon.com/images/I/71ulah9iIwL._AC_SL1500_.jpg',
                'price' => 100,
                'status' => 'active',
            ],
            [
                'name' => 'All Stainless Steel Heavy Pots & Pans Set',
                'description' => 'Legend 5 Ply 14 pc All Stainless Steel Heavy Pots & Pans Set | Professional Quality Cookware 5ply Clad Home Cooking & Commercial Kitchen Surface Induction Oven Safe | Non-Teflon PFOA, PTFE & PFOS Fre',
                'url_img' => 'https://m.media-amazon.com/images/I/81shjmqQuuL._AC_SL1500_.jpg',
                'price' => 89.99,
                'status' => 'active',
            ],
            [
                'name' => 'Kitchen Knife Set',
                'description' => 'Home Hero Kitchen Knife Set, Steak Knife Set & Kitchen Utility Knives - Ultra-Sharp High Carbon Stainless Steel Knives with Ergonomic Handles (20 Pc Set, Black)',
                'url_img' => 'https://m.media-amazon.com/images/I/81tLlE1NhtL._AC_SL1500_.jpg',
                'price' => 49.99,
                'status' => 'active',
            ],
            [
                'name' => 'Power Tool Combo Kits',
                'description' => '108 Piece Power Tool Combo Kits with 16.8V Cordless Drill, Household Tools Set with DIY Hand Tool Kits for Professional Garden Office Home Repair Maintain-Black/Red',
                'url_img' => 'https://m.media-amazon.com/images/I/81RHedrX3ML._AC_SL1500_.jpg',
                'price' => 69.99,
                'status' => 'active',
            ],
        ];

        Product::insert($products);
    }
}
