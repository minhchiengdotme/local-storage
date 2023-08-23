<?php

namespace App\Http\Controllers;

use App\Models\StorageHouse;
use Illuminate\Http\Request;

class StorageHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return StorageHouse::all();
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
    public function show(StorageHouse $storageHouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StorageHouse $storageHouse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, StorageHouse $storageHouse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StorageHouse $storageHouse)
    {
        //
    }
}
