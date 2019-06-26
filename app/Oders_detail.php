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

class Oders_detail extends Model
{
    protected $table ='oders_detail';
	protected $guarded =[];

	 public function oders()
    {
        return $this->belongsTo('App\Oders','o_id');
    }

    public function products()
    {
        return $this->hasOne('App\Products','pro_id');
    }
}
