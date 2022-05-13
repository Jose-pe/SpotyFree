<?php

namespace App\Http\Controllers\discos;

use App\Http\Controllers\Controller;

use App\Models\discos;
use Illuminate\Http\Request;
use  \Storage;

class discosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $discos = discos::simplePaginate(9);
        return view('discos.index', compact('discos'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('discos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input = $request->all();
        $path = Storage::disk('public')->putFile('imagenes', $request->file('portada'));
        $input['portada'] = str_ireplace('imagenes/',"",$path);
        discos::create($input);
        return redirect()->route('discos.index')->with('status','Disco registrado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $disco = discos::find($id);
        return view('discos.edit', compact('disco'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input = $request->all();
        $discos = discos::find($id);
        $discos->update($input);
        return redirect()->route('discos.index')->with('status', 'Disco modificado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $discos = discos::find($id);
        $discos->delete();
        return redirect()->route('discos.index')->with('status', 'Disco eliminado correctamente.');
    }
}
