<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Area;
use App\Models\Shop;

class AreaController extends Controller
{
    public function index(){
        //主 -> 従
        $area_tokyo = Area::find(1)->shops;
        // print(json_encode($area_tokyo));
        //従 -> 主
        $shop = Shop::find(3)->area->name;
        dd($area_tokyo, $shop);
        
        // header('Content-Type: application/json');
        // return Area::get();
    }
}
