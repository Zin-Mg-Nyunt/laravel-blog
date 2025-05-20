<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $mgmg=Author::factory()->create(['name'=>'mg mg','userName'=>'mgmg']);
        $aungaung=Author::factory()->create(['name'=>'aung aung','userName'=>'aungaung']);
        $frontend=Category::factory()->create(['name'=>'frontend','slug'=>'frontend']);
        $backend=Category::factory()->create(['name'=>'backend','slug'=>'backend']);
        Blog::factory(2)->create(['category_id'=>$frontend->id,'author_id'=>$mgmg]);
        Blog::factory(2)->create(['category_id'=>$backend->id,'author_id'=>$aungaung]);
    }
}
