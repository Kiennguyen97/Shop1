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

class Oders extends Model
{
    protected $table ='oders';
	protected $guarded =[];

	public function user()
    {
        return $this->belongsTo('App\User','c_id');
    }
    public function oders_detail()
	{
		return $this->hasMany('App\Oders_detail','o_id');
	}
}
