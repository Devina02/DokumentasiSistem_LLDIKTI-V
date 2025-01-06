<?php

namespace App\Models;

class post
{
    private static $doc_posts = [
        [
            "input" => "Juli 2, 2020",
            "slug" => "sengkuni",
            "judul" => "Sengkuni",
            "type" => "website",
            "updated" => "jan, 2025",
            "color" => "#e0f7fa",
            "dropdownItems" => [
                ["label" => "Edit", "link" => "#"],
                ["label" => "Hapus", "link" => "#"]
            ]
        ],
        [
            "input" => "Maret 2, 2020",
            "slug" => "evira",
            "judul" => "Evira",
            "type" => "Mobile",
            "updated" => "Des, 2025",
            "color" => "#fef3c7",
            "dropdownItems" => [
                ["label" => "Edit", "link" => "#"],
                ["label" => "Hapus", "link" => "#"]
            ]
        ],
        [
            "input" => "Maret 2, 2020",
            "slug" => "evira",
            "judul" => "Evira",
            "type" => "Website",
            "updated" => "Des, 2025",
            "color" => "#d1fae5",
            "dropdownItems" => [
                ["label" => "Edit", "link" => "#"],
                ["label" => "Hapus", "link" => "#"]
            ]

        ],
        [
            "input" => "Maret 2, 2020",
            "slug" => "nakula",
            "judul" => "Nakula",
            "type" => "Website",
            "updated" => "Des, 2025",
            "color" => "#fde2e2",
            "dropdownItems" => [
                ["label" => "Edit", "link" => "#"],
                ["label" => "Hapus", "link" => "#"]
            ]

        ],
        [
            "input" => "Maret 2, 2020",
            "slug" => "sadewa",
            "judul" => "Sadewa",
            "type" => "Website",
            "updated" => "Des, 2025",
            "color" => "#e9d5ff",
            "dropdownItems" => [
                ["label" => "Edit", "link" => "#"],
                ["label" => "Hapus", "link" => "#"]
            ]

        ],
        [
            "input" => "Maret 2, 2020",
            "slug" => "janaka",
            "judul" => "Janaka",
            "type" => "Website",
            "updated" => "Des, 2025",
            "color" => "#d1d5db",
            "dropdownItems" => [
                ["label" => "Edit", "link" => "#"],
                ["label" => "Hapus", "link" => "#"]
            ]

        ]
    ];
    public static function all()
    {
        return collect(self::$doc_posts );
    }

    public static function find($slug)
    {
        $posts = static::all();
        //$post = [];
       // foreach($posts as $p){
           // if($post["slug"]==$slug){
           //     $post = $p;
           // }
       // }
        return $posts -> firstWhere('slug',$slug);
    }
}
