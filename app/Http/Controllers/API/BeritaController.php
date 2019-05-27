<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Berita::latest()->paginate(5);        
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
            'judul' => 'required|min:7',
            'heading' => 'required|min:7',
            'deskripsi' => 'required',
            'desc' => 'required',
            'type' => 'required',
        ]);

        $name = time().'.' . explode('/', explode(':', substr($request->gambar, 0, strpos($request->gambar, ';')))[1])[1];

        \Image::make($request->gambar)->save('img/berita/'.$name,60);
        $request->merge(['gambar' => $name]);

        return Berita::create([
            'judul' => $request->judul,
            'gambar' => $request->gambar,
            'deskripsi' => $request->deskripsi,
            'heading' => $request->heading,
            'desc' => $request->desc,
            'type' => $request->type,
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
            'judul' => 'required|min:7',
            'heading' => 'required|min:7',
            'deskripsi' => 'required',
            'desc' => 'required',
            'type' => 'required',
        ]);

        $berita = Berita::findOrFail($id);

        $currentPhoto = $berita->gambar;


        if($request->gambar != $currentPhoto){
            $name = time().'.' . explode('/', explode(':', substr($request->gambar, 0, strpos($request->gambar, ';')))[1])[1];

            \Image::make($request->gambar)->save('img/berita/'.$name,60);
            $request->merge(['gambar' => $name]);

            $gambar = 'img/berita/'.$currentPhoto;
            if(file_exists($gambar)){
                @unlink($gambar);
            }
        }

        $berita->update($request->all());

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
        
        $berita = Berita::findOrFail($id);
        $berita->delete();

        return ["message" => "Berhasil Menghapus Data!"];
    }

    public function search(){

        if ($search = \Request::get('q')) {
            $data = Berita::where(function($query) use ($search){
                $query->where('type','LIKE',"%$search%");
            })->paginate(20);
        }else{
            $data = Berita::latest()->paginate(5);
        }

        return $data;

    }
}
