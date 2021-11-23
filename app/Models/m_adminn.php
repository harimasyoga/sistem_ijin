<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class m_admin extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public static $m_admin = 
        [
            [
                "nama" => "Harimas Yoga Prabowo",
                "email" => "harimasyoga@gmail.com",
                "image" => "harimas.jpg"

            ]
        ];

    public static function all_()
    {
        
        return collect(self::$m_admin);
    }
}
