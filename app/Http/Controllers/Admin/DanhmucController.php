<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DanhmucController extends Controller
{
    public function index(){
        $danhmucs=DB::table('danhmucs')->select('id','name')->orderByDesc('id')->get();
        return view('admin.danhmuc',compact('danhmucs'));
    }
    public function create(){
        return view('admin.themdanhmuc');
    }
    public function store( Request $request){
        $data = $request->validate([
            'name' => 'required|unique:danhmucs,name|max:255',         
        ], [
            'name.required' => 'Tên danh mục là bắt buộc.',         
            'name.max' => 'Tên danh mục không được vượt quá 255 ký tự.',     
            'name.unique' => 'Tên danh mục đã tồn tại.',
        ]);
        DB::table('danhmucs')->insert($data);

        return redirect()->route('categories.index');
    }
    public function destroy(string $id)
    {
        DB::table('danhmucs')->delete($id);
      
        return redirect()->route('categories.index');
    }
    public function show(string $id)
     {      
        $category = DB::table('danhmucs')->select('id','name')->where('id',$id)->get();
        return view('admin.updatedanhmuc',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request,string $id )
    {
         $data = $request->validate([
            'name' => 'required|unique:danhmucs,name|max:255',         
        ], [
            'name.required' => 'Tên danh mục là bắt buộc.',         
            'name.max' => 'Tên danh mục không được vượt quá 255 ký tự.',     
            'name.unique' => 'Tên danh mục đã tồn tại.',
        ]);    
        DB::table('danhmucs')->where('id', $id)->update($data);
        return back();
    }


}
