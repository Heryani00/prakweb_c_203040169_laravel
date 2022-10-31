<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Heryani',
        //     'email' => 'heryanishyt1105@gmail.com',
        //     'password' => bcrypt('yani11')
        // ]);

        // User::create([
        //     'name' => 'Byun Baekhyun',
        //     'email' => 'byun1105@gmail.com',
        //     'password' => bcrypt('byun11')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi repellat, incidunt officia nobis magni ratione,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi repellat, incidunt officia nobis magni ratione, maxime neque odit alias nulla repellendus sint iusto quo iste quae autem obcaecati suscipit enim vel aut pariatur. Veritatis pariatur vel, architecto non hic minus sunt totam nesciunt nobis consequuntur, earum facere id inventore saepe est molestiae, fugiat excepturi alias delectus ratione recusandae quis sapiente ipsum neque. Ullam saepe ad qui placeat, dolorum a quidem ratione aliquid, veritatis nobis, perspiciatis tenetur. Natus dicta reprehenderit consequuntur doloremque exercitationem architecto maiores non consequatur necessitatibus. Neque a illum ea aliquid explicabo natus amet corrupti, eaque, tenetur sapiente vel.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi repellat, incidunt officia nobis magni ratione,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi repellat, incidunt officia nobis magni ratione, maxime neque odit alias nulla repellendus sint iusto quo iste quae autem obcaecati suscipit enim vel aut pariatur. Veritatis pariatur vel, architecto non hic minus sunt totam nesciunt nobis consequuntur, earum facere id inventore saepe est molestiae, fugiat excepturi alias delectus ratione recusandae quis sapiente ipsum neque. Ullam saepe ad qui placeat, dolorum a quidem ratione aliquid, veritatis nobis, perspiciatis tenetur. Natus dicta reprehenderit consequuntur doloremque exercitationem architecto maiores non consequatur necessitatibus. Neque a illum ea aliquid explicabo natus amet corrupti, eaque, tenetur sapiente vel.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi repellat, incidunt officia nobis magni ratione,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi repellat, incidunt officia nobis magni ratione, maxime neque odit alias nulla repellendus sint iusto quo iste quae autem obcaecati suscipit enim vel aut pariatur. Veritatis pariatur vel, architecto non hic minus sunt totam nesciunt nobis consequuntur, earum facere id inventore saepe est molestiae, fugiat excepturi alias delectus ratione recusandae quis sapiente ipsum neque. Ullam saepe ad qui placeat, dolorum a quidem ratione aliquid, veritatis nobis, perspiciatis tenetur. Natus dicta reprehenderit consequuntur doloremque exercitationem architecto maiores non consequatur necessitatibus. Neque a illum ea aliquid explicabo natus amet corrupti, eaque, tenetur sapiente vel.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi repellat, incidunt officia nobis magni ratione,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi repellat, incidunt officia nobis magni ratione, maxime neque odit alias nulla repellendus sint iusto quo iste quae autem obcaecati suscipit enim vel aut pariatur. Veritatis pariatur vel, architecto non hic minus sunt totam nesciunt nobis consequuntur, earum facere id inventore saepe est molestiae, fugiat excepturi alias delectus ratione recusandae quis sapiente ipsum neque. Ullam saepe ad qui placeat, dolorum a quidem ratione aliquid, veritatis nobis, perspiciatis tenetur. Natus dicta reprehenderit consequuntur doloremque exercitationem architecto maiores non consequatur necessitatibus. Neque a illum ea aliquid explicabo natus amet corrupti, eaque, tenetur sapiente vel.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
