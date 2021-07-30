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
use Auth;
use DB;
use App\ManageProduct;
use App\Blog;
use App\User;
use App\FeaturedProduct;
use Session;
use App\AdvanceCoupan;
use App\BestSeller;
use App\Wishlist;

class WishlistController extends Controller
{
    public function create()
    {
        $wishlist=Wishlist::all();
        $blog = DB::table('blogs')->limit(3)->get();
        $advancecoupan = AdvanceCoupan::all();
        $footer = Footer::all();
        $navbar = Navbar::all();
        $contact = ContactDetail::all();
        $data = Contact::all();
        $advt = Advt::all();
        $carousel = Carousel::all();
        $insta = InstaProduct::all();
        $bottommen= SubCategory::where('category_id','2')->limit(2)->get();
        $bottomwomen=SubCategory::where('category_id','4')->limit(2)->get();
        $topmen= SubCategory::where('category_id','1')->limit(2)->get();
        $topwomen=SubCategory::where('category_id','3')->limit(2)->get();
        $clothing=SubCategory::where('category_id','5')->limit(4)->get();
        $accessories=SubCategory::where('category_id','6')->limit(4)->get();
        $cat = Category::all();
        $category = AddProduct::distinct()->limit(6)->get();
        $feature=FeaturedProduct::join('add_products','featured_products.p_id','=','add_products.id')->select('add_products.*','featured_products.*','add_products.id as a_id')->limit(4)->get();
        $best_seller = BestSeller::join('add_products','best_sellers.p_id','=','add_products.id')->join('categories', 'categories.id', '=', 'add_products.category_id')->select('add_products.*','categories.*','best_sellers.*','best_sellers.id as f_id')->get();
        $link=Wishlist::all();
        return view('front.wishlist',compact('wishlist','blog','advancecoupan','footer','navbar','contact','data','advt','carousel','insta','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','cat','category','feature','best_seller','link'));
    }
    public function addtowishlist($id)
    {
       $productdata=AddProduct::where('id', $id)->first();
        $user_id =Auth::user()->user_id;
        $wishlist= new Wishlist;
        $wishlist->p_id=$productdata->id;
        $wishlist->p_name= $productdata->product_name;
        $wishlist->unit_price= $productdata->selling_price;
        $wishlist->p_image=$productdata->img1;
        $wishlist->stock=$productdata->avl_qty;
        $wishlist->user_id=$user_id;
        $wishlist->save();
        return redirect()->back();
       // echo $productdata;
    } 
    public function show_wishlist()
    {
        $user =  Auth::user()->user_id;
        $wishlist = Wishlist::join('add_products','add_products.id','=','wishlists.p_id')->select('wishlists.*','add_products.*','wishlists.id as w_id')->where('wishlists.user_id',$user)->get();
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
     return view('front.cart',compact('wishlist','footer','navbar','contact','data','advt','carousel','insta','category','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','cat','coupan'));
    }
    public function delete_wishlist($id)
    {
        $delete = Wishlist::where('id',$id);
        $data = $delete->delete();
        if($data){
        return redirect('front/wishlist');
    }
    }
   
}
