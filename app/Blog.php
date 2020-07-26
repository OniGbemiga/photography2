<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Http\Helpers\Pagination;
use DB;

class Blog extends Model
{
    protected $guarded = [];

    // public static function count_all()
    // {
    //     $page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
    //     $per_page = 3;
    //     //$sql = Blog::count();
    //     $pagination = new Pagination();
    //     $sql = DB::select("SELECT * FROM blogs LIMIT {$per_page} OFFSET {$pagination->offset()}");
    //     //dd($sql);   
    // }
}
