<?php

namespace App\Http\Controllers;

use App\AddProduct;
use Illuminate\Http\Request;
use App\User;
use App\Category;
use App\ManageProduct;
use App\AdvanceCoupan;
class ApiController extends Controller
{
    public function downline(Request $request){
    $total['down']=User::where('user_sponser_id',$request->sponser)->count();
    return json_encode($total);
    }

    public function BrandData(Request $request){
        if($request->brand != null){
            $id=ManageProduct::where('brand_name','like','%'.$request->brand.'%')->first();
            $data['product']=AddProduct::where('sub_category_id',$id->id)->get();
        return response()->json($data);
        }
    }
    public function category(){
        $category['category']=Category::all();
        return response()->json($category);

    }
    public function advance(Request $request){
        $advance['advance']=AdvanceCoupan::where('advance_coupan_code',$request->coupan)->first();
        return response()->json($advance);
    }
}

