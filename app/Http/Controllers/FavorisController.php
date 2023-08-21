<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use App\Models\favoris;
use Illuminate\View\View;
use Illuminate\Http\Request;

class FavorisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('watches.index', [
            'watch' => Watch::with('user')->latest()->get(),
            'favoris' => Favoris::with('user')->latest()->get(),
        ]);

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
    public function show(favoris $favoris)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(favoris $favoris)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, favoris $favoris)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(favoris $favoris)
    {
        //
    }
}
