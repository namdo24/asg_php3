<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    
    public function index(){
        $tk=DB::table('users')->orderByDesc('id')->get();
        return view('admin.taikhoan',compact('tk'));
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
        DB::table('users')->delete($id);
      
        return back();
    }
   

    /**
     * Show the form for editing the specified resource.
     */
   

}
