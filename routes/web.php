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
    return view('welcome', [
        "title" => "Welcome"
    ]);
});
Route::get('home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Putra Muhammad Ferdiansyah",
        "email" => "putramei05@gmail.com",
        "alamat" => "Jalan Kampung Rawa Tengah rt 03 / rw 07 no 9 kelurahan galur",
        "image" => "img/foto.jpg"
    ]);
});



Route::get('post', function () {
    $blog_post = [
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
    return view('post', [
        "title" => "Post",
        "post" => $blog_post
    ]);
});

Route::get('post/{slug}', function($slug){
    $blog_post = [
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

    $new_post = [];
    foreach ($blog_post as $post) {
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('posts', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
