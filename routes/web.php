<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Heryani",
        "email" => "heryanishyt1105@gmail.com",
        "image" => "Heryani.jpg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Heryani",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ipsum reiciendis autem maiores dolorum dolores consequuntur beatae tenetur ex repellat exercitationem provident iure, placeat deleniti accusamus aliquam tempore laborum voluptatum vero quibusdam! Quos illum fuga perspiciatis, omnis ad iusto eius sequi eum saepe repudiandae modi, est fugiat dolorem veniam id delectus reprehenderit! Facilis doloremque maxime porro consequatur in recusandae vero sunt cum reiciendis, ullam tenetur soluta accusamus placeat ipsa eum asperiores earum. Excepturi voluptas consequuntur illo nemo, impedit necessitatibus animi?."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dian",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus sunt porro vel voluptatem ex beatae, illo in a et dolorem ut corrupti officiis nostrum laborum! Ad quas necessitatibus excepturi vero eos dolore sequi. Tempore dolorem sunt nemo libero, consectetur ratione aliquid. Tenetur quo provident, saepe dolorem aperiam enim perspiciatis debitis. Aliquam quaerat architecto eum ad cumque sapiente commodi facere! Iure mollitia fugit maxime fuga nulla, distinctio veritatis ducimus debitis, consectetur rem sed at inventore atque nemo voluptatem enim ipsam, aspernatur possimus! Voluptatibus distinctio facere, nihil, doloribus id omnis provident optio pariatur qui illo quaerat officiis consectetur fuga repellat asperiores eveniet."
        ],
    ];


    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Heryani",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe ipsum reiciendis autem maiores dolorum dolores consequuntur beatae tenetur ex repellat exercitationem provident iure, placeat deleniti accusamus aliquam tempore laborum voluptatum vero quibusdam! Quos illum fuga perspiciatis, omnis ad iusto eius sequi eum saepe repudiandae modi, est fugiat dolorem veniam id delectus reprehenderit! Facilis doloremque maxime porro consequatur in recusandae vero sunt cum reiciendis, ullam tenetur soluta accusamus placeat ipsa eum asperiores earum. Excepturi voluptas consequuntur illo nemo, impedit necessitatibus animi?."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dian",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus sunt porro vel voluptatem ex beatae, illo in a et dolorem ut corrupti officiis nostrum laborum! Ad quas necessitatibus excepturi vero eos dolore sequi. Tempore dolorem sunt nemo libero, consectetur ratione aliquid. Tenetur quo provident, saepe dolorem aperiam enim perspiciatis debitis. Aliquam quaerat architecto eum ad cumque sapiente commodi facere! Iure mollitia fugit maxime fuga nulla, distinctio veritatis ducimus debitis, consectetur rem sed at inventore atque nemo voluptatem enim ipsam, aspernatur possimus! Voluptatibus distinctio facere, nihil, doloribus id omnis provident optio pariatur qui illo quaerat officiis consectetur fuga repellat asperiores eveniet."
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
