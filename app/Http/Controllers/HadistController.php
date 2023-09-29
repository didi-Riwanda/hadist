<?php

namespace App\Http\Controllers;

use App\Models\Hadist;
use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class HadistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Hadist::all());
        return view('hadist.index', [
            'all_hadist' => Hadist::paginate(7)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hadist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate_data = $request->validate([
            'title' => 'required',
            'source' => 'required',
            'text' => 'required',
            'translation' => 'required',
            'category' => 'required',
            'noted' => 'required'
        ]);

        Hadist::create($validate_data);

        return redirect()->route('hadist.index')->with('success', 'Berhasil');
    }

    /**
     * Display the specified resource.
     */
    public function show(Hadist $hadist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Hadist $hadist)
    {
        return view('hadist.edit', [
            'old_data' => $hadist
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Hadist $hadist)
    {
        $validate_data = $request->validate([
            'title' => 'required',
            'source' => 'required',
            'text' => 'required',
            'translation' => 'required',
            'category' => 'required',
            'noted' => 'required'
        ]);

        $hadist->update($validate_data);

        return redirect()->route('hadist.index')->with('success', 'Berhasil');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Hadist $hadist)
    {
        $hadist->delete();
        return redirect()->route('hadist.index')->with('success', 'Deleted Successfully');
    }
}
