<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.superadmin.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function monthlyReport(Request $request)
    {
        return view('pages.superadmin.monthlyreport.index');
    }

    public function userAccounts(Request $request)
    {
        return view('pages.superadmin.useracc.index');
    }

    public function deactivateAccounts(Request $request)
    {
        return view('pages.superadmin.useracc.deleted.index');
    }

    public function updateAccounts(Request $request)
    {
        return view('pages.superadmin.useracc.update.index');
    }

    public function createAccounts(Request $request)
    {
        return view('pages.superadmin.useracc.create.index');
    }
}
