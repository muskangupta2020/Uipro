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
use App\SocialLink;
use App\Coupan;
class FrontController extends Controller
{
    public function index()
    {
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
       $link = SocialLink::all();
        return view('front.index',compact('blog','advancecoupan','footer','navbar','contact','data','advt','carousel','insta','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','cat','category','feature','best_seller','link'));

    }
   public function shop($id)
   {
        $brand = ManageProduct::all();
        $advancecoupan = AdvanceCoupan::all();
        $footer = Footer::all();
        $navbar = Navbar::all();
        $contact = ContactDetail::all();
        $data = Contact::all();
        $advt = Advt::all();
        $carousel = Carousel::all();
        $insta = InstaProduct::all();
        $category = Shopcat::all();
        $shop = AddProduct::where('sub_category_id',$id)->get();
        $bottommen= SubCategory::where('category_id','2')->limit(2)->get();
        $bottomwomen=SubCategory::where('category_id','4')->limit(2)->get();
        $topmen= SubCategory::where('category_id','1')->limit(2)->get();
        $topwomen=SubCategory::where('category_id','3')->limit(2)->get();
        $clothing=SubCategory::where('category_id','5')->limit(4)->get();
        $accessories=SubCategory::where('category_id','6')->limit(4)->get();
        $cat=Category::all();
         $link = SocialLink::all();
        return view('front.shop',compact('brand','advancecoupan','footer','navbar','contact','data','advt','carousel','insta','category','shop','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','cat','link'));
   }
   public function about()
   {
        $advancecoupan = AdvanceCoupan::all();
        $about = About::all();
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
         $link = SocialLink::all();
    return view('front.about',compact('advancecoupan','about','team','footer','navbar','contact','data','advt','carousel','insta','category','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','cat','link'));
   }
    public function contact_us()
    {
        $advancecoupan = AdvanceCoupan::all();
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
         $link = SocialLink::all();
        return view('front.contact_us',compact('advancecoupan','footer','navbar','contact','data','advt','carousel','insta','category','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','cat','link'));
    }
    public function service()
    {
        $advancecoupan = AdvanceCoupan::all();
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
         $link = SocialLink::all();
        return view('front.service',compact('advancecoupan','team','footer','navbar','contact','data','advt','carousel','insta','category','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','cat','link'));
    }
    public function cart()
    {
        $advancecoupan = AdvanceCoupan::all();
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
         $link = SocialLink::all();
        return view('front.cart',compact('advancecoupan','coupan','team','footer','navbar','contact','data','advt','carousel','insta','category','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','cat','link'));
    }
     public function front_login()
    {
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
         $link = SocialLink::all();
        return view('front.login',compact('advancecoupan','footer','navbar','contact','data','advt','carousel','insta','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','cat','category','feature','link'));
    }
    public function front_login_save(Request $request)
    {
        $credentials = $request->only('email', 'password');
           print_r($credentials);
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                $sponser=User::where('email',$request->email)->select('sponser_id')->first();

                echo $sponser;
                if($sponser->sponser_id == null){
                      $data = User::where('email', $request->email)->first();
                     Session::put(['frontuser'=>$data->name]);
                // echo "yes";
                return redirect('/');
                }
                else{
            $blocked = "blocked";
            $activate = "activated";
            $data = User::where('email', $request->email)->first();
            $r = $data->login_status;
            $re = strcmp($r, $activate);
            // echo $re;
            if ($re == 0) {
                Session::put(['frontuser'=>$data->name]);
                // echo "yes";
                return redirect('/');
            } elseif ($re == 1) {
                // echo "no1";
                return redirect('front/login');
            } else {
                // echo "no";
                return redirect('front/logout');
            
            }
        }
            // return redirect('user/index');
        } 
        else {
            // echo "no";
            return redirect('front/login');
        }

    

}
    public function front_logout()
    {
        Auth::logout();

        return redirect('/');
    } 
    public function shop_detail($id)
    {
        $feature=FeaturedProduct::join('add_products','featured_products.p_id','=','add_products.id')->select('add_products.*','featured_products.*','add_products.id as a_id')->limit(4)->get();
        $best_seller = BestSeller::join('add_products','best_sellers.p_id','=','add_products.id')->join('categories', 'categories.id', '=', 'add_products.category_id')->select('add_products.*','categories.*','best_sellers.*','best_sellers.id as f_id')->get();
        $advancecoupan = AdvanceCoupan::all();
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
        $cat=Category::all();
        $s = AddProduct::where('id',$id)->first();
         $link = SocialLink::all();
        return view('front.shop_detail',compact('feature','best_seller','advancecoupan','footer','navbar','contact','data','advt','carousel','insta','category','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','cat','s','link'));
    }     
}
