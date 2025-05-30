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
        $kyawaye=User::factory()->create(['name'=>'kyaw aye','userName'=>'kyawaye','password'=>12345678]);
        $max=User::factory()->create(['name'=>'max','userName'=>'max','password'=>12345678]);
        $frontend=Category::factory()->create(['name'=>'frontend','slug'=>'frontend']);
        $backend=Category::factory()->create(['name'=>'backend','slug'=>'backend']);
        Blog::factory(2)->create(['category_id'=>$frontend->id,'user_id'=>$kyawaye]);
        Blog::factory(2)->create(['category_id'=>$backend->id,'user_id'=>$max]);
    }
}
