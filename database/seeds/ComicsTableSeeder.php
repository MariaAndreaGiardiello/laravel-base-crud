<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dcComics = config('dc-comics');
        foreach($dcComics as $comics) {
            $newComic = new Comic();

            $newComic->title = $comics['series'];
            $newComic->type = $comics['type'];
            $newComic->price = $comics['price'];
            $newComic->description = $comics['description'];
            $newComic->image = $comics['thumb'];

            $newComic->save();
        }
    
    }
}
