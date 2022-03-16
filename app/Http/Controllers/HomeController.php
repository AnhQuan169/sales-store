<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// Thư viện cho phép sử dụng Session
use Illuminate\Support\Facades\Session;
// Thư viện cho phép xử lí thông tin dữ liệu khi thành công hoặc thất bại với lệnh
use Illuminate\Support\Facades\Redirect;
use Yoeunes\Toastr;
Session_start();

class HomeController extends Controller
{
    // Trang chủ
    public function index(Request $request){
        // --Seo meta
        // $meta_desc = "Chuyên bán quần áo";
        // $meta_keywords = "Quần áo, đồ xuất khẩu";
        // $meta_title = "QK Store";
        // $url_cannical = $request->url();
        // --Seo meta

        $cate_pro = DB::table('tbl_category_product')->where('category_status','1')->orderBy('category_id','desc')->get();
        $brand_pro = DB::table('tbl_brand')->where('brand_status','1')->orderBy('brand_id','desc')->get();

        $all_product = DB::table('tbl_product')->where('status','1')->orderBy('id','desc')->limit(3)->get();
        
        return view('pages.home')->with('category',$cate_pro)->with('brand',$brand_pro)->with('all_product',$all_product);
        // return view('pages.home')->with(compact('category','brand','all_product','meta_desc','meta_keywords','meta_title','url_cannical'));
        
    }
}
