<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Karir;

class KarirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Karir::latest()->paginate(7);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->middleware('auth:api');

        $this->validate($request, [
            'position' => 'required|min:3',
            'jumlah' => 'required',
            'deskripsi' => 'required',
            'desc' => 'required',
        ]);

        return Karir::create([
            'jumlah' => $request->jumlah,
            'position' => $request->position,
            'deskripsi' => $request->deskripsi,
            'desc' => $request->desc,
        ]);
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
        $this->middleware('auth:api');

        $this->validate($request, [
            'position' => 'required|min:3',
            'jumlah' => 'required',
            'deskripsi' => 'required',
            'desc' => 'required',
        ]);

        $karir = Karir::findOrFail($id);
        $karir->update($request->all());

        return ["message" => "Berhasil Update Data!"];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->middleware('auth:api');
        
        $karir = Karir::findOrFail($id);
        $karir->delete();

        return ["message" => "Berhasil Menghapus Data!"];
    }
}
