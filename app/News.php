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

class News extends Model
{
    protected $table ='news';
	protected $guarded =[];

	public function category()
	{
		return $this->belongsTo('App\Category','cat_id');
	}
}
