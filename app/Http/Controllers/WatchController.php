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
        return view('watches.index',[
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
            'brand'=> 'required|string|max:255',
            'name'=> 'required|string|max:255',
            'picture'=> 'required|image',
            'date',
            'price',
            
        ]);

         $validated = [
            'brand' => $request->brand,
            'name' => $request->name,
            'picture' => $request->picture->store('watches'),
            'date' => $request->date,
            'price' => $request->price,
            'user_id' => auth()->id()
         ];
         Watch::create($validated);

 
        return redirect(route('watches.index'));
    }

    public function show(Watch $watch)
    {
        
        return view('watches.show', compact('watch'));
    }

    public function update(Request $request, Watch $watch): RedirectResponse
    {
        $this->authorize('update', $watch);

        $validated = $request->validate([
            'brand'=> 'required|string|max:255',
            'name'=> 'required|string|max:255',
            'picture'=> 'required|image',
            'date',
            'price',
        ]);

         $validated = [
            'brand' => $request->brand,
            'name' => $request->name,
            'picture' => $request->picture->store('watches'),
            'date' => $request->date,
            'price' => $request->price,
            'user_id' => auth()->id()
         ];

        

        $watch->update($validated);

        return redirect(route('watches.index'));
    }

    public function destroy(Watch $watch): RedirectResponse
    {
        $this->authorize('delete', $watch);
        $watch->delete();
        return redirect(route('watches.index'));
    }
}
