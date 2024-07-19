<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TintucController extends Controller
{
    public function trangchu()
    {
        $tintuc = DB::table('tintucs')->where('tinhot', 0)->where('tinmoi', 0)->orderBy('luotxem')->limit(3)->get();
        $tinmoi = DB::table('tintucs')->where('tinmoi', 1)->limit(2)->get();
        $tinhot = DB::table('tintucs')->where('tinhot', 1)->limit(4)->get();
        $tinphobien = DB::table('tintucs')->orderByDesc('luotxem')->limit(4)->get();
        $danhmuc = DB::table('danhmucs')->get();

        return view('client.index', compact(['tintuc', 'tinmoi', 'tinhot', 'tinphobien', 'danhmuc']));
    }
    public function chitiet($id)
    {
        $tinphobien = DB::table('tintucs')->orderByDesc('luotxem')->limit(4)->get();
        $tinhot = DB::table('tintucs')->where('tinhot', 1)->limit(4)->get();
        $chitiet = DB::table('tintucs')->where('id', $id)->get();
        $danhmuc = DB::table('danhmucs')->get();
        return view('client.chitietbai', compact(['tinhot', 'tinphobien', 'chitiet', 'danhmuc']));
    }
    public function tinTheoLoai($id)
    {
        $tintheoloai = DB::table('tintucs')->where('id_dm', $id)->get();
        $danhmuc = DB::table('danhmucs')->get();
        $danhmucten = DB::table('danhmucs')->where('id', $id)->select('name')->get();
        return view('client.tintrongloai', compact(['tintheoloai', 'danhmuc', 'danhmucten']));

    }
    public function timkiem(Request $request)
    {
        if ($request->input('keyword') != "") {
            $keyword = $request->input('keyword');
            $danhmuc = DB::table('danhmucs')->get();
            $tintuc = DB::table('tintucs')->where('name', 'like', '%' . $keyword . '%')->get();         
            if ($tintuc->isEmpty()) {
                $a = 0;
                $thongbao = 'Không tìm thấy bài viết phù hợp';
                return view('client.timkiem', compact(['thongbao', 'danhmuc', 'a']));
               
            } else
            $a = 1;
            return view('client.timkiem', compact(['tintuc', 'danhmuc', 'a']));
        }
        if ($request->input('keyword') == "") {
            return back();
        }
        return view('client.timkiem');
    }
}
