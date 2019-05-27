<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trade as Auto;

class TradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Auto::latest()->paginate(5);        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'nama' => 'required|min:4',
            'name' => 'required|min:4',
            'deskripsi' => 'required',
            'desc' => 'required',
            'type' => 'required',
            'gambar' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

        $name = time().'.' . explode('/', explode(':', substr($request->gambar, 0, strpos($request->gambar, ';')))[1])[1];
        
        \Image::make($request->gambar)->save('img/trading/'.$name,60);
    
            $name2 = time().'.' . explode('/', explode(':', substr($request->gambar2, 0, strpos($request->gambar2, ';')))[1])[1];
            \Image::make($request->gambar2)->save('img/trading/'.$name2,60);
            $request->merge(['gambar2' => $name2]);
        
    
            $name3 = time().'.' . explode('/', explode(':', substr($request->gambar3, 0, strpos($request->gambar3, ';')))[1])[1];
            \Image::make($request->gambar3)->save('img/trading/'.$name3,60);
            $request->merge(['gambar3' => $name2]);
        
        $request->merge(['gambar' => $name]);

        return Auto::create([
            'nama' => $request->nama,
            'name' => $request->name,
            'gambar' => $request->gambar,
            'gambar2' => $request->gambar2,
            'gambar3' => $request->gambar3,
            'deskripsi' => $request->deskripsi,
            'type' => $request->type,
            'desc' => $request->desc,
            'price' => $request->price,
            'quantity' => $request->quantity,
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
            'nama' => 'required|min:4',
            'name' => 'required|min:4',
            'deskripsi' => 'required',
            'desc' => 'required',
            'type' => 'required',
            'gambar' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
        ]);

        $data = Auto::findOrFail($id);

        $currentPhoto = $data->gambar;
        $currentPhoto2 = $data->gambar2;
        $currentPhoto3 = $data->gambar3;


        if($request->gambar != $currentPhoto){
            $name = time().'.' . explode('/', explode(':', substr($request->gambar, 0, strpos($request->gambar, ';')))[1])[1];

            \Image::make($request->gambar)->save('img/trading/'.$name,60);
            $request->merge(['gambar' => $name]);

            $gambar = 'img/trading/'.$currentPhoto;
            if(file_exists($gambar)){
                @unlink($gambar);
            }
        }
        if($request->gambar2 != $currentPhoto2){
            $name = time().'.' . explode('/', explode(':', substr($request->gambar2, 0, strpos($request->gambar2, ';')))[1])[1];

            \Image::make($request->gambar2)->save('img/trading/'.$name,60);
            $request->merge(['gambar2' => $name]);

            $gambar = 'img/trading/'.$currentPhoto2;
            if(file_exists($gambar)){
                @unlink($gambar);
            }
        }
        if($request->gambar3 != $currentPhoto3){
            $name = time().'.' . explode('/', explode(':', substr($request->gambar3, 0, strpos($request->gambar3, ';')))[1])[1];

            \Image::make($request->gambar3)->save('img/trading/'.$name,60);
            $request->merge(['gambar3' => $name]);

            $gambar = 'img/trading/'.$currentPhoto3;
            if(file_exists($gambar)){
                @unlink($gambar);
            }
        }

        $data->update($request->all());

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
        
        $data = Auto::findOrFail($id);
        $data->delete();

        return ["message" => "Berhasil Menghapus Data!"];
    }

    public function search(){

        if ($search = \Request::get('q')) {
            $data = Auto::where(function($query) use ($search){
                $query->where('type','LIKE',"%$search%");
            })->paginate(20);
        }else{
            $data = Auto::latest()->paginate(5);
        }

        return $data;

    }
}