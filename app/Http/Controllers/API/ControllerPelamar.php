<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pelamar as TD;

class ControllerPelamar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TD::where('verify', 0)->latest()->paginate(7);
    }

    public function index2()
    {
        return TD::where('verify', 1)->latest()->paginate(7);
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
        $this->validate($request, [
            'email' => 'required|email',
            'nama' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
            'foto' => 'required',
            'cv' => 'required',
            'pelamar' => 'required'
        ]);

        return TD::create([
            'email' => $request['email'],
            'nama' => $request['nama'],
            'alamat' => $request['alamat'],
            'hp' => $request['hp'],
            'foto' => $request['foto'],
            'cv' => $request['cv'],
            'pelamar' => $request['pelamar'],
            'verify' => 0,
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

        $data = TD::findOrFail($id);
        $data['verify'] = 1;
        $data->save();
        return [
            'message' => 'sukses'
        ];
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

        $data = TD::findOrFail($id);
        $data->delete();
        return [
            'message' => 'sukses'
        ];
    }
}
