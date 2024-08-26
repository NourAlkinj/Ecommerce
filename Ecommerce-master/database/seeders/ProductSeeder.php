<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => "Baby Soft Shoes",
                'price' => "10000",
                'description' => "Boots Material: Nubuck Leather Age: 6-18 month Features: baby shoes, baby boots, first walkers, pre walkers, soft shoes Package includes: 2 x Pcs Size (cm) 6M 12M 18M Length 10 11 12 Feet 10-10.5 11-11.5 12-12.5 Month 0-6 6-12 12-18",
                'category' => " Shoes",
                'color' => "Light Gray",
                'gallery' => "https://i.pinimg.com/564x/91/4a/1a/914a1a3beacbf6a69796c6574c6b6ace.jpg"
            ],
            [
                'name' => "Newborn Baby Shoes",
                'price' => "9000",
                'description' => "Leather Baby Shoes by Babydoddle ,Retro Style ,Newborn Baby Shoes ,7-12 Months  ",
                'category' => " Shoes",
                'color' => "brown & blue ",
                'gallery' => "https://i.pinimg.com/564x/51/da/9a/51da9a9cd477fc9ee8224c92e815359c.jpg"
            ],
            [
                'name' => "The Teddy Bear Moccasins",
                'price' => "6000",
                'description' => "The Teddy Bear Moccasins baby infant first walkers soft soled crib shoes  ",
                'category' => " Shoes",
                'color' => "brown  ",
                'gallery' => "https://i.pinimg.com/736x/40/f4/8a/40f48af60c7fa7d55599b74c8ba7e1cc.jpg"
            ],
            [
                'name' => "Baby Girls Shoes  ",
                'price' => "8000",
                'description' => " Baby Shoes,Baby Girls Shoes ,Knotted Bow Shoes,0-3 m,Etsy Uk ",
                'category' => " Shoes",
                'color' => "yellow  ",
                'gallery' => "https://i.pinimg.com/564x/a0/b3/c2/a0b3c2cc7af4a03961cd263edeabf383.jpg"
            ],
            [
                'name' => "Lovely Comfortable Soft Baby First Walkers   ",
                'price' => "7000",
                'description' => " Item Type: Baby Shoes Material: Cotton, Rubber Features: Baby Shoes, Cotton Baby Shoes, Warm Baby Shoes, Baby First Walkers, Baby Girl’s Shoes, Baby Boy’s Shoes Age: 0 – 18 Months Package includes: 1 x Pair Size (cm) 1 2 3 Insole Length 11 12 13",
                'category' => " Shoes",
                'color' => "Red  ",
                'gallery' => "https://i.pinimg.com/564x/50/18/24/501824f5d4c563c08012fcb2dce3c33d.jpg"
            ],
            [
                'name' => "Kozart Winter Newborn Baby",
                'price' => "10000",
                'description' => "Specifications: Outsole Material:PVC Fashion Element:Fretwork Gender:baby unisex Upper Material:Stretch Fabric Pattern Type:Solid Season:Winter Closure Type:Lace-up Brand Name:None Fit:Fits true to size, take your normal size Age Range:0-6m,7-18m",
                'category' => " Shoes",
                'color' => "White  ",
                'gallery' => "https://i.pinimg.com/564x/42/48/9d/42489d79eba4a55574f4d294efba4c2d.jpg"
            ],
            [
            'name' => " Wedding Formal Dresses ",
            'price' => "12000",
            'description' => "RuffleButts® Baby/Toddler Girls Printed Pinafore Cross-Back Sun DressLoloda Kids Girls A Line Pageant Wedding Formal Dresses Cold Shoulder Adjustable Straps Swing Dress",
            'category' => " Girls",
            'color' => "Gray  ",
            'gallery' => "https://i.pinimg.com/564x/dd/d8/39/ddd8390a408deafac6333bd584394ef6.jpg"
        ],
        [
            'name' => " cute body suit  ",
            'price' => "15000",
            'description' => "Baby Clothes 2 Piece Romper Set ",
            'category' => " Girls  ",
            'color' => "striped White  ",
            'gallery' => "https://i.pinimg.com/564x/b4/4c/b4/b44cb4f72336fdecb039210031e1bb61.jpg"
        ],
        [
            'name' => " cute body suit  ",
            'price' => "12000",
            'description' => "Baby suits for boys is made of Cotton Blend. Soft, breathable and skin friendly. DESIGN FEATURES: Practical and convenient baby boy dress clothes, detachable bow design, suspenders also can removed for another casual look.  ",
            'category' => " Boys  ",
            'color' => " Navy blue ",
            'gallery' => "https://i.pinimg.com/564x/f8/27/5b/f8275b9348c79638f9087e5fd4590bef.jpg"
        ],
        [
            'name' => " cute body suit  ",
            'price' => "15000",
            'description' => "Wedding Tuxedo Waistcoat Outfit Suit ",
            'category' => " Boys  ",
            'color' => " Gray ",
            'gallery' => "https://i.pinimg.com/564x/2e/56/10/2e5610ac806d7bc43944363f2f071f18.jpg"
        ],
        [
            'name' => " winter Clothes  ",
            'price' => "25000",
            'description' => "Suit Cartoon Bear Clothes,  Set Kids Tracksuit 3pc ",
            'category' => " Boys  ",
            'color' => " Dark grey ",
            'gallery' => "https://i.pinimg.com/564x/41/7a/d5/417ad5b1fac9046d3f114af3ad0cd136.jpg"
        ],
        [
            'name' => " Autumn Clothes   ",
            'price' => "20000",
            'description' => "New Autumn Style  Newborn Baby Girl Clothing with  Set Rabbit Ears ",
            'category' => " Girls  ",
            'color' => " mix yallow & white ",
            'gallery' => "https://i.pinimg.com/564x/87/48/35/874835e5e5118cc66e1281e3f595e4a4.jpg"
        ],
        [
            'name' => " Cute Clothes   ",
            'price' => "30000",
            'description' => "Baby Casual Panda Long Sleeve Romper & Pants & Hat Baby Clothing In Bulk - 74 (6-9Months)",
            'category' => "Baby   ",
            'color' => " Gray ",
            'gallery' => "https://i.pinimg.com/564x/6a/b4/00/6ab400a230464fbfe7eb0edef748d2f8.jpg"
        ],
        [
            'name' => " Cute Dress  ",
            'price' => "35000",
            'description' => "Summer Baby Girl Backless Stripe Outfit Dress - 13-18M / ",
            'category' => " Girls   ",
            'color' => " mix black and white ",
            'gallery' => "https://i.pinimg.com/564x/44/49/9b/44499b1464d33b245cbb5df06a21f0b8.jpg"
        ],
        [
            'name' => " Cute body suit  ",
            'price' => "30000",
            'description' => "Qteee - Female baby casual pretty suit new children's white shirt long-sleeved small children jeans two-piece set - Shirt-strappy-pants-set-pink / 80cm",
            'category' => "Baby    ",
            'color' => " mix Green and white ",
            'gallery' => "https://i.pinimg.com/564x/db/04/9a/db049ae45621b0fcb3a0866ba6cced79.jpg"
        ],

        ]);
    }
}
