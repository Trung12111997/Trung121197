<?php

use Illuminate\Database\Seeder;

class Booksseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=20; $i++ ){

            DB::table('books')->insert([
                'id' => rand(1,100),
                'book_name' => Str::random(10),
                'book_slug' => Str::random(10),
                'book_intro' => Str::random(10),
                'book_desc' => Str::random(10),
                'book_main_image' => Str::random(10),
                'book_images' => Str::random(10),
                'book_author' => Str::random(10),
                'book_price_core' => rand(1,100),
                'book_price_sell' => rand(1,100),
                'book_status' => Str::random(10),

            ]);
        }
    }
}
