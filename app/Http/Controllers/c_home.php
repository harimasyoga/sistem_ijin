<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\data;
use App\Models\m_admin;

class c_home extends Controller
{
    // public function store()
    // {
    //     return request()->all();
        
    // }
    
    public function store(Request $request)
    {
        $cek = $request['user'];
        
        if ($cek=='admin') {
            return view('/admin',[
                "title"=>"Admin",
                "user"=>"admin",
                "isi_cs"=> m_admin::all()
            ]);
        } elseif ($cek=='cs') {
            return view('/cs',[
                "title"=>"Customer",
                "user"=>$cek
            ]);
        } else {
            return view('/login',[
                "title"=>"Login",
                "cek"=>'1'
            ]);
        }
        
        
    }
}
