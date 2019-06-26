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

class Category extends Model
{
    protected $table ='category';
	protected $guarded =[];
	
	public function products()
	{
		return $this->hasMany('App\Products','cat_id');
	}
	public function news()
	{
		return $this->hasMany('App\News','cat_id');
	}
}
