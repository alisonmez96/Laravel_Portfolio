<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag(['name' => 'IOS']);
        $tag->save();

        $tag = new Tag(['name' => 'Android']);
        $tag->save();

        $tag = new Tag(['name' => 'App']);
        $tag->save();

        $tag = new Tag(['name' => 'Design']);
        $tag->save();
    }
}
