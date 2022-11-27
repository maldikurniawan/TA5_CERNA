<?php

namespace App\Http\Controllers;

use App\Models\Cerpen;
use App\Http\Requests\StoreCerpenRequest;
use App\Http\Requests\UpdateCerpenRequest;
use Illuminate\Http\Request;

class CerpenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Cerpen::all();
        return view('cerpen.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cerpen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCerpenRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate(([
            'judul' => 'required',
            'tanggal' => 'required',
            'email' => 'required',
            'isi' => 'required'
        ]));

        Cerpen::create($data);
        return back()->with('message', 'data telah diisi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cerpen  $cerpen
     * @return \Illuminate\Http\Response
     */
    public function show(Cerpen $cerpen)
    {
        return view('cerpen.show', compact('cerpen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cerpen  $cerpen
     * @return \Illuminate\Http\Response
     */
    public function edit(Cerpen $cerpen)
    {
        return view('cerpen.edit', compact('cerpen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCerpenRequest  $request
     * @param  \App\Models\Cerpen  $cerpen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cerpen $cerpen)
    {
        $attr = $request->validate(([
            'judul' => 'required',
            'tanggal' => 'required',
            'email' => 'required',
            'isi' => 'required'
        ]));

        $cerpen->update($attr);
        return redirect()->route('cerpen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cerpen  $cerpen
     * @return \Illuminate\Http\Response
     */
    public function delete(Cerpen $cerpen)
    {
        $cerpen->delete();
        return back();
    }
}
