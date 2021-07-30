<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddProduct;
use Auth;
use App\Front;
use App\Footer;
use App\Navbar;
use App\ContactDetail;
use App\Contact;
use App\Advt;
use App\Carousel;
use App\InstaProduct;
use App\Shopcat;
use App\Category;
use App\SubCategory;
use App\About;
use App\AboutUs;
use App\Team;
use App\Cart;
use DB;
use App\Coupan;
use App\SocialLink;
use App\Wishlist;

class CartController extends Controller
{  

    public function addtocart($id)
    {
        $productdata=AddProduct::where('id', $id)->first();
        $user_id =Auth::user()->user_id;
        $gst= ($productdata->selling_price * $productdata->gst)/100 ;
        $discount= ($productdata->selling_price * $productdata->discount)/100 ;
        $t_price= ($productdata->selling_price + $gst) - $discount ;

        $cart= new Cart;
        $cart->p_id=$productdata->id;
        $cart->p_name= $productdata->product_name;
        $cart->p_price= $productdata->selling_price;
        $cart->p_gst=$productdata->gst;
        $cart->p_discount=$productdata->discount;
        $cart->p_total_cost= $t_price;
        $cart->p_Quantity= '1';
        $cart->user_id=$user_id;
        $cart->save();
        return redirect()->back();
    }
    public function show_cart()
    {
        $user =  Auth::user()->user_id;
        $cart = Cart::join('add_products','add_products.id','=','carts.p_id')->select('carts.*','add_products.*','carts.id as c_id')->where('carts.user_id',$user)->get();
        $footer = Footer::all();
        $navbar = Navbar::all();
        $contact = ContactDetail::all();
        $data = Contact::all();
        $advt = Advt::all();
        $carousel = Carousel::all();
        $insta = InstaProduct::all();
        $category = Shopcat::all();
        $bottommen= SubCategory::where('category_id','2')->limit(2)->get();
        $bottomwomen=SubCategory::where('category_id','4')->limit(2)->get();
        $topmen= SubCategory::where('category_id','1')->limit(2)->get();
        $topwomen=SubCategory::where('category_id','3')->limit(2)->get();
        $clothing=SubCategory::where('category_id','5')->limit(4)->get();
        $accessories=SubCategory::where('category_id','6')->limit(4)->get();
        $cat = Category::all();
        $coupan = Coupan::all();
         $link=Wishlist::all();
     return view('front.cart',compact('cart','footer','navbar','contact','data','advt','carousel','insta','category','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','cat','coupan','link'));
    }
    public function quantity_update($id=null,$p_Quantity=null)
    {
         // echo $id;
         // echo $course_quantity;
        DB::table('carts')->where('id',$id)->increment('p_Quantity',$p_Quantity);
        return redirect()->back();
    }
    public function delete_cart($id)
    {
        $delete = Cart::where('id',$id);
        $data = $delete->delete();
        if($data){
            echo "yes";
        return redirect('front/cart');
    }else{
        echo "no";
    }
    }

}
