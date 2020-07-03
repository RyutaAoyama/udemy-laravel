<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Area;
use App\Models\Shop;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function locations(){
        // header('Content-Type: application/json');
        //主 -> 従
        // $area_tokyo = DB::table('areas')->find($request->id);
        // ->shops();
        // return var_dump(json_encode($area_tokyo));
        //従 -> 主
        // $shop = Shop::find(3)->area->name;
        // dd($area_tokyo, $shop);
        // json_encode($area_tokyo);
        // $route_shop = Shop::find(3)->routes()->get();
        // dd($route_shop);
       $returnJson = new Shop;
       return $returnJson->returnJson();

    }
    // public function getRoutes(Request $request){
    //     $routes = new Shop;
    //     dd($routes->shops($request->shop_id));
    // }
}
