<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
