<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag();
        $tag->name = 'Industry News';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'Education';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'Economy';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'Sports';
        $tag->save();

    }
}
