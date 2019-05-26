<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider as S;
use App\Berita as B;
use App\Partner as P;
use App\Karir as K;
use App\Automotif as A;

class KumalaController extends Controller
{
    public function index() {
        $slide = S::latest()->get();
        $berita = B::latest()->paginate(4);
        $partner = P::latest()->get();

        return view('inde')->withSlides($slide)->withBerita($berita)->withPartner($partner);
    }

    public function berita() {
        $berita = B::latest()->paginate(6);

        return view('listberita')->withBerita($berita);
    }

    public function karir() {
        $karir = K::latest()->paginate(6);

        return view('karir')->withKarir($karir);
    }

    public function otomotif() {

        return view('otomotif');
    }

    public function oto($oto) {

        if($oto =='masda' || $oto =='wuling' || $oto =='honda' || $oto =='hyno' || $oto =='mercedes')
        {
            $data = A::where('merek', $oto)->latest()->paginate(9);
            $nama = A::where('merek', $oto)->latest()->first();

            return view('list_otomotif')->withData($data)->withNama($nama);
        }

        return abort(404);
    }

    public function otom($id) {
        $data = A::findOrFail($id);
        
        return view('detail_otomotif')->withData($data);
    }
}
