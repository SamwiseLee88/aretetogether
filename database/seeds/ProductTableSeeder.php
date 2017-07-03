<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'imagePath' => 'https://i.ebayimg.com/thumbs/images/g/YvgAAOSwblZZJX78/s-l225.jpg',
            'title' => 'Light Antique Drawer',
            'description' => 'From Belgium. Classic Victorian style oak drawer.',
            'price' => 399,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://asimg.artsolution.net/tsmedia/ButchoffButphoto/AnAntiqueRegencyChaise-11102014T163438.jpg?qlt=50&cell=2000,2000&cvt=jpg',
            'title' => 'Regency Chaise Longue',
            'description' => 'An elegant regency period chaise longue. Cover has been restored with fine cotton.',
            'price' => 599,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://guideimg.alibaba.com/images/shop/75/08/29/5/set-of-3-small-antique-wooden-treasure-chest-trinket-jewellery-boxes_3548845.jpg',
            'title' => 'Small Antique Wooden Treasure Chest',
            'description' => 'Trinket and Jewellery Box. Handcrafted from wood and leather. Locking hinge for convenience. ',
            'price' => 29,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://i.ebayimg.com/00/s/NDY5WDUwMA==/z/DVoAAMXQ74JTVh2S/$_3.JPG?set_id=2',
            'title' => 'Wine Bottle Opener',
            'description' => 'Add class to your wine experience. Classic Antique wine bottle opener. From Italy. Wood handle',
            'price' => 49,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.richardgardnerantiques.co.uk/wp-content/uploads/2016/06/ivory-gilt-bronze-letter-opener-boxed-antique-French-5342_2_5342.jpg',
            'title' => 'Ivory Gilt Bronze Letter Opener',
            'description' => 'Antique from France. Blade is made of genuine ivory. Handle is Bronze. Hand crafted. Functional and beautiful.',
            'price' => 79,
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://img1.etsystatic.com/168/0/13753112/il_fullxfull.1244392855_jaz3.jpg',
            'title' => 'Vintage Turkish Rug',
            'description' => 'A unique handwoven turkish rug. Vintage faded colors. All natural dye. ',
            'price' => 299,
        ]);
        $product->save();
    }
}
