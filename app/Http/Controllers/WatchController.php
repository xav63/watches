<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class WatchController extends Controller
{
    public function index(): View
    {
        return view('watches.index', [
            'watch' => Watch::with('user')->latest()->get(),
        ]);
    }

    public function create()
    {
        //
        return view('watches.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'brand',
            'name',
            'picture',
            'date',
            'price'
        ]);

         $validated = [
            'brand' => $request->brand,
            'name' => $request->name,
            'picture' => $request->picture->store('watch'),
            'date' => $request->date,
            'price' => $request->price,
            'user_id' => auth()->id()
         ];
         Watch::create($validated);

 
        return redirect(route('watches.index'));
    }

    public function show(Watch $watch)
    {
        $watch = Watch::with(['comments.user', 'user'])->find($watch->id);
        return view('watches.show', compact('watch'));
    }
}
