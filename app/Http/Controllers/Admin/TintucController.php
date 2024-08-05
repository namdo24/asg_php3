<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Pagination\Paginator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TintucController extends Controller
{
    public function index()
    {
        $tintucs = DB::table('tintucs')->join('danhmucs', 'tintucs.id_dm', '=', 'danhmucs.id')
            ->select('tintucs.id as idtintuc', 'tintucs.name as nametintuc', 'anh', 'motangan', 'danhmucs.name as namedm', 'luotxem')->orderByDesc('idtintuc')->paginate(5);
        return view('admin.tintuc', compact('tintucs'));
    }
    public function create()
    {
        $danhmucs = DB::table('danhmucs')->select('id', 'name')->orderByDesc('id')->get();
        return view('admin.themtintuc', compact('danhmucs'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|unique:danhmucs,name|max:255',
            'noidung' => 'required',
            'anh' => 'required',
            'id_dm' => 'required',
            'motangan' => 'nullable'
        ], [
            'name.required' => 'Tiêu đề là bắt buộc.',
            'name.max' => 'Tên danh mục không được vượt quá 255 ký tự.',
            'name.unique' => 'Tiêu đề đã tồn tại.',
            'noidung.required' => 'Nội dung cần phải nhập',
            'anh.required' => 'Arnh chưa chọn',
            'id_dm.required' => 'Chưa chọn danh mục',
        ]);
        if ($request->hasFile('anh')) {
            $path = Storage::put('posts', $request->file('anh'));
            $data['anh'] = $path;
        }


        DB::table('tintucs')->insert($data);

        return redirect()->route('posts.index');
    }
    public function update(Request $request,string $id )
   {
    $data = $request->validate([
        'name' => 'required|unique:danhmucs,name|max:255',
        'noidung' => 'required',
      
        'id_dm' => 'required',
        'motangan' => 'nullable'
    ], [
        'name.required' => 'Tiêu đề là bắt buộc.',
        'name.max' => 'Tên danh mục không được vượt quá 255 ký tự.',
        'name.unique' => 'Tiêu đề đã tồn tại.',
        'noidung.required' => 'Nội dung cần phải nhập',
       
        'id_dm.required' => 'Chưa chọn danh mục',
    ]);
    if ($request->hasFile('anh')) {
        $path = Storage::put('posts', $request->file('anh'));
        $data['anh'] = $path;
    }
       DB::table('tintucs')->where('id', $id)->update($data);
       return back();
   }
    public function destroy(string $id)
    {
        DB::table('tintucs')->delete($id);
      
        return redirect()->route('posts.index');
    }
    public function show(string $id)
    {
        $danhmucs = DB::table('danhmucs')->select('id', 'name')->orderByDesc('id')->get();
       
       $ps= DB::table('tintucs')->join('danhmucs','tintucs.id_dm','=','danhmucs.id')->select('danhmucs.id as iddm','tintucs.id as id','tintucs.name as namett','danhmucs.name as namedm','anh','motangan','noidung')->where('tintucs.id',$id)->get();
       return view('admin.updatetintuc',compact('ps','danhmucs'));
   }
   
}
