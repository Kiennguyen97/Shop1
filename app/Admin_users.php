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

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin_users extends Authenticatable
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ='admin_users';

    protected $fillable = [
        'name', 'email', 'password','level',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
