<?php


/*
    Nhóm Bài Tập 18 - CNPM Nhóm 8 - Thầy Thạc Bình Cường - D15
    	Bùi Văn Tụ
    	Kiều Việt Anh
    	Phạm Ngọc Anh
    	Nguyễn Văn Đạo
    	Đỗ Văn Trọng  
*/


namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_img extends Model
{
   	protected $table ='detail_img';
	protected $guarded =[];

	public function products()
    {
        return $this->belongsTo('App\Products','pro_id');
    }
}
