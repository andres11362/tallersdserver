<?php

use Illuminate\Database\Seeder;
use App\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Image::create([
           'name' => 'image1',
           'path' => 'app/public/image1.jpg'
       ]);

        Image::create([
            'name' => 'image2',
            'path' => 'app/public/image2.jpg'
        ]);

        Image::create([
            'name' => 'image3',
            'path' => 'app/public/image3.jpg'
        ]);


    }
}
