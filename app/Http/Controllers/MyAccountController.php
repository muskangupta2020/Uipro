<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use App\AddProduct;
use App\About;
use App\AboutUs;
use App\Team;
use App\Cart;
use App\User;
use App\Coupan;
use App\Checkout;
use App\Order;
use DB;
use Auth;
use App\Invoice;
class MyAccountController extends Controller
{
    public function create()
    {
        $coupan = Coupan::all();
         $team = Team::all();
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
        $user_id=Auth::user()->user_id;
        $checkout =Checkout::where('user_id',$user_id)->get();
        return view('front.my_account',compact('coupan','team','footer','navbar','contact','data','advt','carousel','insta','category','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','cat','checkout'));
    }
    public function my_order($id)
    {
        $footer = Footer::all();
        $navbar = Navbar::all();
        $insta = InstaProduct::all();
         $bottommen= SubCategory::where('category_id','2')->limit(2)->get();
        $bottomwomen=SubCategory::where('category_id','4')->limit(2)->get();
        $topmen= SubCategory::where('category_id','1')->limit(2)->get();
        $topwomen=SubCategory::where('category_id','3')->limit(2)->get();
        $clothing=SubCategory::where('category_id','5')->limit(4)->get();
        $accessories=SubCategory::where('category_id','6')->limit(4)->get();
        $order = Order::where('order_id',$id)->get();
        $checkout = Checkout::where('order_id',$id)->first();
        return view('front.my_order',compact('footer','navbar','insta','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','checkout','order'));
    }
    public function invoice($id)
    {
        $checkout = Checkout::where('order_id',$id)->first();
        $product = Order::join('add_products','add_products.id','=','orders.p_id')->where('orders.order_id',$id)->get();
        $invoice = Invoice::where('order_id',$id)->first();
        return view('front.invoice',compact('checkout','product','invoice'));
    }
}
