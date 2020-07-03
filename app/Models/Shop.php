<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function area(){
        return $this->belongsTo('App\Models\Area');
    }

    public function routes(){
        return $this->belongsToMany('App\Models\Route');
    }

    public function shops($id){
        $shop_route = Shop::find($id)->routes()->get();
        return $shop_route;
    }

    public function returnJson(){
        $a = [
            "developer_message" => "Hello, world!",
            "user_message" => "Hello, world!",
            "error_code" => 0,
            "locations" => [
                    [
                    "id" => 123,
                    "latitude" => 123.4567,
                    "longitude" => 111.1111,
                    "title" => "タイトル" ,
                    "description" => "タイトル",
                    "icon_type" => 1,
                    "custom_icon" => "/icon/xxx.png" 
                    ]
            ]
        ];
        return $a;
    }
}
