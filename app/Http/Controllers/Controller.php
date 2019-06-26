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

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;
}
