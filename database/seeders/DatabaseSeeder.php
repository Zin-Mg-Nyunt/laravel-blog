<?php

namespace Database\Seeders;

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
        User::truncate();
        Category::truncate();
        Blog::truncate();

        User::factory()->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $frontend=Category::create([
            'name'=>'frontend',
            'slug'=>'frontend',
        ]);
        $backend=Category::create([
            'name'=>'backend',
            'slug'=>'backend',
        ]);

        Blog::create([
            'title'=>'Learning VueJs',
            'slug'=>'learning-vue-js',
            'intro'=>'this is blog intro',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quibusdam debitis aliquam molestias id modi quos suscipit ex minus blanditiis, facere similique possimus. Molestiae voluptates quidem saepe voluptatem totam alias natus dolore libero incidunt neque! Harum placeat rerum aspernatur. Eveniet ipsam voluptate ipsum, officiis perferendis cum, maxime, saepe possimus natus iusto sapiente ad ut fugit debitis delectus eum nemo id laboriosam? Officiis, illo impedit molestias nam aut debitis esse nemo repellat inventore ipsum repudiandae explicabo quis suscipit hic ad fuga recusandae sint, vero deleniti quasi porro similique ducimus praesentium magnam? Placeat similique quaerat, delectus rem ducimus nisi totam eligendi modi esse illum. Veritatis officia, nisi sit, odit consequuntur similique placeat minus incidunt, amet fugit delectus explicabo. Illum neque a sunt distinctio quis aliquam laudantium, illo architecto placeat libero qui tempore aspernatur optio exercitationem quod voluptatem obcaecati aliquid dolor sit nemo ducimus! Reprehenderit nostrum beatae, quaerat delectus voluptatem aspernatur facere? Adipisci praesentium nihil ipsa aperiam accusantium dolore dolores doloremque aspernatur similique. Mollitia laborum, minus possimus, molestiae animi recusandae totam quisquam, praesentium ipsa dignissimos nisi? Soluta neque atque consectetur dolorem voluptatibus sit commodi, ut hic enim? Numquam, nesciunt. Corrupti illo optio eveniet ducimus laborum expedita, architecto natus ratione ipsa, accusantium delectus. Sunt?',
            'category_id'=>$frontend->id,
        ]);
        Blog::create([
            'title'=>'Learning Laravel',
            'slug'=>'leraning-laravel',
            'intro'=>'this is blog intro',
            'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quibusdam debitis aliquam molestias id modi quos suscipit ex minus blanditiis, facere similique possimus. Molestiae voluptates quidem saepe voluptatem totam alias natus dolore libero incidunt neque! Harum placeat rerum aspernatur. Eveniet ipsam voluptate ipsum, officiis perferendis cum, maxime, saepe possimus natus iusto sapiente ad ut fugit debitis delectus eum nemo id laboriosam? Officiis, illo impedit molestias nam aut debitis esse nemo repellat inventore ipsum repudiandae explicabo quis suscipit hic ad fuga recusandae sint, vero deleniti quasi porro similique ducimus praesentium magnam? Placeat similique quaerat, delectus rem ducimus nisi totam eligendi modi esse illum. Veritatis officia, nisi sit, odit consequuntur similique placeat minus incidunt, amet fugit delectus explicabo. Illum neque a sunt distinctio quis aliquam laudantium, illo architecto placeat libero qui tempore aspernatur optio exercitationem quod voluptatem obcaecati aliquid dolor sit nemo ducimus! Reprehenderit nostrum beatae, quaerat delectus voluptatem aspernatur facere? Adipisci praesentium nihil ipsa aperiam accusantium dolore dolores doloremque aspernatur similique. Mollitia laborum, minus possimus, molestiae animi recusandae totam quisquam, praesentium ipsa dignissimos nisi? Soluta neque atque consectetur dolorem voluptatibus sit commodi, ut hic enim? Numquam, nesciunt. Corrupti illo optio eveniet ducimus laborum expedita, architecto natus ratione ipsa, accusantium delectus. Sunt?',
            'category_id'=>$backend->id,
        ]);
    }
}
