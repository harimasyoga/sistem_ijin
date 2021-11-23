<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    use HasFactory;
    // protected $filleble=['judul','ringkasan','isi','penulis'];
    protected $guarded =['id'];

    public static $m_about = 
        [
            [
                "nama" => "Harimas Yoga Prabowo",
                "email" => "harimasyoga@gmail.com",
                "image" => "harimas.jpg"

            ]
        ];

    public static function about()
    {
        
        return collect(self::$m_about);
    }
}
