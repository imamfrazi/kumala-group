<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Slider::latest()->paginate(7);
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
            'deskripsi' => 'required',
            'gambar' => 'required'
        ]);

        $name = time().'.' . explode('/', explode(':', substr($request->gambar, 0, strpos($request->gambar, ';')))[1])[1];

        \Image::make($request->gambar)->save('/img/slider/'.$name,60);
         $request->merge(['gambar' => $name]);

        return Slider::create([
            'judul' => $request['judul'],
            'deskripsi' => $request['deskripsi'],
            'gambar' => $request['gambar']
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
        return Slider::findOrFail($id);
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
            'deskripsi' => 'required',
        ]);
        
        $slider = Slider::findOrfail($id);

        $currentPhoto = $slider->gambar;


        if($request->gambar != $currentPhoto){
            $name = time().'.' . explode('/', explode(':', substr($request->gambar, 0, strpos($request->gambar, ';')))[1])[1];

            \Image::make($request->gambar)->save('img/slider/'.$name,60);
            $request->merge(['gambar' => $name]);

            $gambar = 'img/slider/'.$currentPhoto;
            if(file_exists($gambar)){
                @unlink($gambar);
            }

        }

        $slider->update($request->all());
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
        
        $slider = Slider::findOrFail($id);

        //hapus foto yg terkait dengan db
        $currentPhoto = $slider->gambar;
        $gambar = 'img/slider/'.$currentPhoto;
        if(file_exists($gambar)){
            @unlink($gambar);
        }
        
        $slider->delete();

        return ['message' => 'Berhasil Hapus Data!'];
    }
}
