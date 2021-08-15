<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;

class ShopController extends Controller
{
    public function index(){
        //主→従
        $area_tokyo = Area::find(1)->shops;//お店の情報が取れる
        
        //従→主
        $shop = Shop::find(2)->area->name;

        //多対多
        $shop_route = Shop::find(1)->routes()->get();

        dd($area_tokyo, $shop, $shop_route);
    }
}
