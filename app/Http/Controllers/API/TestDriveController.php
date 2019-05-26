<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TestDrive as TD;

class TestDriveController extends Controller
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

    public function count()
    {
        return TD::where('verify', 0)->count();
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
            'jk' => 'required',
            'hp' => 'required',
            'kota' => 'required',
            'alamat' => 'required',
            'daerah' => 'required',
            'dealer' => 'required'
        ]);

        return TD::create([
            'email' => $request['email'],
            'nama' => $request['nama'],
            'jk' => $request['jk'],
            'hp' => $request['hp'],
            'kota' => $request['kota'],
            'alamat' => $request['alamat'],
            'daerah' => $request['daerah'],
            'dealer' => $request['dealer'],
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
