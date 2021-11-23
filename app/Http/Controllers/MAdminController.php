<?php

namespace App\Http\Controllers;

use App\Models\m_admin;
use App\Http\Requests\Storem_adminRequest;
use App\Http\Requests\Updatem_adminRequest;

class MAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\Storem_adminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storem_adminRequest $request)
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
     * @param  \App\Http\Requests\Updatem_adminRequest  $request
     * @param  \App\Models\m_admin  $m_admin
     * @return \Illuminate\Http\Response
     */
    public function update(Updatem_adminRequest $request, m_admin $m_admin)
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
