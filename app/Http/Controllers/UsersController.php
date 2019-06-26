<?php


/*
    Nhóm Bài Tập 18 - CNPM Nhóm 8 - Thầy Thạc Bình Cường - D15
      Bùi Văn Tụ
      Kiều Việt Anh
      Phạm Ngọc Anh
      Nguyễn Văn Đạo
      Đỗ Văn Trọng  
*/


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
   public function getlist()
   {
   		$data = User::paginate(10);
    	return view('back-end.users.list',['data'=>$data]);
   }
   public function getedit($id)
   {
   		$data = User::where('id',$id)->first();
   		return view('back-end.users.edit',['data'=>$data]);
   }
   public function postedit($id, Request $request)
   {  
      
      $data = User::where('id',$id)->update([
          'sltCate' => $request->get('sltCate'),
          'txtName' => $request->get('txtName'),
      ]);
      $data2 = User::paginate(10);
      return view('back-end.users.list',['data'=>$data2,'flash_level'=>'result_msg','flash_massage'=>' Đã sửa thành công !']);
   }
   public function getdel($id)
    {       
      $oder = User::where('id',$id)->delete();
      
        return redirect()->back()
        ->with(['flash_level'=>'result_msg','flash_massage'=>'Xóa thành công']);
      
    }
}
