<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function shops(){
        $shops = Shop::all();
        return $shops;
    }
    public function searchShop(Request $request){
        $query = Shop::query();
        $data = $request ->input('search_shop');
        if($data){
            $query->whereRaw("title LIKE '%".$data."%'");
        }
        return $query->get();
    }
}
