<?php

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    public function run()
    {
        $comics = include('comics.php');

        foreach ($comics as $comic) {
            Comic::create($comic);
        }
    }
}