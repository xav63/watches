<?php

namespace App\Http\Controllers;

use App\Models\Complication;
use App\Models\Watch;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class WatchController extends Controller
{
    public function index(): View
    {
        return view('watches.index',[
            'watches' => Watch::with('user')->latest()->get(),
        ]);
    }

    public function create()
    {
        //
        return view('watches.create');
    }

    public function store(Request $request): RedirectResponse
    {
        // $request->validate([
        //     'brand'=> 'required|string|max:255',
        //     'name'=> 'required|string|max:255',
        //     'picture'=> 'required|image',
        //     // 'date',
        //     // 'price',
        //     // 'complication'
            
        // ]);

         $data = [
            'brand' => $request->brand,
            'name' => $request->name,
            'picture' => $request->picture->store('watches'),
            'date' => $request->date,
            'price' => $request->price,
            'user_id' => auth()->user()->id
         ];
         $newWatch = Watch::create($data);

         Complication::create([
            'watch_id' => $newWatch->id,
            'complication' => $request->complication
         ]);

 
        return redirect(route('watches.index'));
    }

    public function show(Watch $watch)
    {
       
        return view('watches.show', compact('watch'));
        
    }

    public function edit(Watch $watch): View
    {
        return view('watches.edit', ['watch' => $watch]);
    }

    public function update(Request $request, Watch $watch): RedirectResponse
    {
        $validated = $request->validate([
            'brand'=> 'required|string|max:255',
            'name'=> 'required|string|max:255',
            'picture'=> 'required|image',
            'date',
            'price',
            'complication'
        ]);

         $validated = [
            'brand' => $request->brand,
            'name' => $request->name,
            'picture' => $request->picture->store('watches'),
            'date' => $request->date,
            'price' => $request->price,
            'complication' => $request->complication,
            'user_id' => auth()->id()
        ];

        $watch->update($validated);

        return redirect(route('watches.index'));
    }

    public function destroy(Watch $watch)
    {
        $watch->delete();
        return redirect(route('watches.index'));
    }

    
}