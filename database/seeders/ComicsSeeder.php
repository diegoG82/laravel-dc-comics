<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics_array = config('comics');

        foreach ($comics_array as $comic_item) {
            foreach ($comics_array as $comic_item) {
                $comic = new Comic();
                $comic->title = $comic_item['title'];
                $comic->description = $comic_item['description'];
                $comic->thumb = $comic_item['thumb'];
                $comic->price = $comic_item['price'];
                $comic->series = $comic_item['series'];
                $comic->sale_date = $comic_item['sale_date'];
                $comic->type = $comic_item['type'];
                $comic->save();
    
        }
    }
}
}