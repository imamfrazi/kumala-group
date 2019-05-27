<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Partner;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Partner::latest()->paginate(5);
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

        $name = time().'.' . explode('/', explode(':', substr($request->gambar, 0, strpos($request->gambar, ';')))[1])[1];

        \Image::make($request->gambar)->save('img/partner/'.$name,60);
        $request->merge(['gambar' => $name]);
        return Partner::create([
            'gambar' => $request['gambar']
        ]);
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

        $partner= Partner::findOrFail($id);

        $currentPhoto = $partner->gambar;


        if($request->gambar != $currentPhoto){
            $name = time().'.' . explode('/', explode(':', substr($request->gambar, 0, strpos($request->gambar, ';')))[1])[1];

            \Image::make($request->gambar)->save('img/partner/'.$name,60);
            $request->merge(['gambar' => $name]);

            $gambar = 'img/partner/'.$currentPhoto;
            if(file_exists($gambar)){
                @unlink($gambar);
            }

        }

        $partner->update($request->all());
        return ['message' => 'Berhasil Update Data!']; 
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
        
        $partner= Partner::findOrFail($id);

        //hapus foto yg terkait dengan db
        $currentPhoto = $partner->gambar;
        $gambar = 'img/partner/'.$currentPhoto;
        if(file_exists($gambar)){
            @unlink($gambar);
        }

        $partner->delete();
        return ['message' => 'Berhasil hapus Data!'];
    }
}
