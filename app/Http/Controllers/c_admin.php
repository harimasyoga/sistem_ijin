<?php

namespace App\Http\Controllers;

use App\Models\m_admin;
use Illuminate\Http\Request;

class c_admin extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin',[
            "title"=>"Admin",
            "user"=>"admin",
            "isi_cs"=> m_admin::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\m_admin  $m_admin
     * @return \Illuminate\Http\Response
     */
    public function show(m_admin $m_admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\m_admin  $m_admin
     * @return \Illuminate\Http\Response
     */
    public function edit(m_admin $m_admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\m_admin  $m_admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, m_admin $m_admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\m_admin  $m_admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(m_admin $m_admin)
    {
        //
    }
}
