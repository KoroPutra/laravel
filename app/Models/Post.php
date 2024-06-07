<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Putra Muhammad Ferdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam praesentium illum quasi hic. Quam, provident. Beatae totam deleniti iste a dolorem nam iure sunt et temporibus similique, tempora amet quos ullam eius repudiandae ipsa porro adipisci eligendi dignissimos architecto repellat laboriosam possimus alias labore? Qui laborum ab deserunt nobis voluptas, excepturi facere similique. Consectetur rem exercitationem consequatur, voluptatibus quae odio. Rem deserunt inventore voluptas voluptatibus alias, fugit voluptatem tempore nostrum, ex explicabo numquam, provident possimus totam magni at consectetur facilis!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Regan Giri Karuna",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam praesentium illum quasi hic. Quam, provident. Beatae totam deleniti iste a dolorem nam iure sunt et temporibus similique, tempora amet quos ullam eius repudiandae ipsa porro adipisci eligendi dignissimos architecto repellat laboriosam possimus alias labore? Qui laborum ab deserunt nobis voluptas, excepturi facere similique. Consectetur rem exercitationem consequatur, voluptatibus quae odio. Rem deserunt inventore voluptas voluptatibus alias, fugit voluptatem tempore nostrum, ex explicabo numquam, provident possimus totam magni at consectetur facilis!"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
