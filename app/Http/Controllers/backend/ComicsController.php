<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('pages.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $form_data = $request->all();
        $new_comic = new Comic();
        $new_comic->fill($form_data);
        $new_comic->save();

        return redirect()->route('comics.show', ['comic' => $new_comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comics = Comic::findOrFail($id);

        return view('pages.comics.show', compact('comics'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comics = Comic::findOrFail($id);
        return view('pages.comics.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $form_data = $request->all();

        $comics = Comic::findOrFail($id);

        $comics->update($form_data);

        return redirect()->route('comics.show', ['comic' => $comics->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comics = Comic::findOrFail($id);

        $comics->delete();

        return redirect()->route('comics.index');
    }

    public function validate(Request $request, array $rules, array $messages = [], array $attributes = [])
    {
        $request->validate([

            'title' => 'required',
            'description' => 'required',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required'
            
        ]);
    }
}
