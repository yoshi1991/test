<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopListController extends Controller
{//ShopController.phpを開いてindex関数を追加します。
     public function index() {
        //$shops = \App\Models\Shop::get();
        //dd($shops);
        //return view('shops',['shops'=>$shops]);
        $shops = \App\Models\Shop::get();
        return view('shops',['shops'=>$shops]);
    }
}
