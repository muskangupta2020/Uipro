<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use App\Shopcat;
use App\InstaProduct;
use App\FeaturedProduct;
use App\Blog;
use App\AddProduct;
use App\BestSeller;
class IndexController extends Controller
{
   public function create_carousel()
    {
        $carousel = Carousel::all();
        return view('admin.carousel',compact('carousel'));
    }
    public function insert_carousel(Request $r)
    {
        $file = $r->file('image');
        $filename = 'image'.time() .'.'. $r->image->extension();
        $file->move("upload/",$filename);
        $carousel = new Carousel;
        $carousel->image=$filename;
        $carousel->title=$r->title;
        $carousel->description=$r->description;
        $done = $carousel->save();
        if($done)
        {
            return redirect('admin/carousel')->with('message','Data Inserted Successfully');
        }
        else
        {
            return redirect('admin/carousel')->with('notmessage','Something went wrong');
        }
    }
    public function edit_carousel($id)
    {
        $edit = Carousel::find($id);
        return view('admin.edit_carousel',compact('edit'));
    }
     public function update_carousel(Request $r)
    {
        if ($r->hasFile('image')) {
            $file = $r->file('image');
            $filename = 'image'.time() .'.'. $r->image->extension();
            $upload = $file->move("upload/", $filename);

            if ($upload) {
                $update =  Carousel::find($r->id);
                $update->image=$filename;
                $update->title=$r->title;
                $update->description=$r->description;
                $done = $update->save();
                if ($done) {
                    return redirect('admin/carousel')->with('message', 'data is updated from Database');
                }
            }
        } else {
             $update =  Carousel::find($r->id);
                $update->title=$r->title;
                $update->description=$r->description;
            $done = $update->save();
            if ($done) {
                return redirect('admin/carousel')->with('message', 'data Inserted in Database');
            }
        }
    }
    public function delete_carousel($id)
    {
        $data = Carousel::find($id);
        $delete = $data->delete();
        return redirect('admin/carousel')->with('message', 'data is deleted from Database');
    }
    public function create_category()
    {
        $category = Shopcat::all();
        return view('admin.shop_cat',compact('category'));
    }
    public function insert_category(Request $r)
    {
        $file = $r->file('image');
        $filename = 'image'.time() .'.'. $r->image->extension();
        $file->move("upload/",$filename);
        $category = new Shopcat;
        $category->image=$filename;
        $category->category=$r->category;
        $done = $category->save();
        if($done)
        {
            return redirect('admin/shop_cat')->with('message','Data Inserted Successfully');
        }
        else
        {
            return redirect('admin/shop_cat')->with('notmessage','Something went wrong');
        }
    }
    public function edit_category($id)
    {
        $edit = Shopcat::find($id);
        return view('admin.edit_shop_cat',compact('edit'));
    }
     public function update_category(Request $r)
    {
        if ($r->hasFile('image')) {
            $file = $r->file('image');
            $filename = 'image'.time() .'.'. $r->image->extension();
            $upload = $file->move("upload/", $filename);

            if ($upload) {
                $update =  Shopcat::find($r->id);
                $update->image=$filename;
                $update->category=$r->category;
                $done = $update->save();
                if ($done) {
                    return redirect('admin/shop_cat')->with('message', 'data is updated from Database');
                }
            }
        } else {
             $update =  Shopcat::find($r->id);
                $update->category=$r->category;
            $done = $update->save();
            if ($done) {
                return redirect('admin/shop_cat')->with('message', 'data Inserted in Database');
            }
        }
    }
    public function delete_category($id)
    {
        $data = Shopcat::find($id);
        $delete = $data->delete();
        return redirect('admin/shop_cat')->with('message', 'data is deleted from Database');
    }
    public function create_featured_product()
    {
        $featured_product = FeaturedProduct::join('add_products','featured_products.p_id','=','add_products.id')->join('categories', 'categories.id', '=', 'add_products.category_id')->select('add_products.*','categories.*','featured_products.*','featured_products.id as f_id')->get();
         $data = AddProduct::select('*')->join('categories', 'categories.id', '=', 'add_products.category_id')->select('categories.*','add_products.*','add_products.id as p_id')->get();
        return view('admin.featured_product',compact('featured_product','data'));
    }
    public function  create_best_seller()
    {
        $best_seller = BestSeller::join('add_products','best_sellers.p_id','=','add_products.id')->join('categories', 'categories.id', '=', 'add_products.category_id')->select('add_products.*','categories.*','best_sellers.*','best_sellers.id as f_id')->get();
         $data = AddProduct::select('*')->join('categories', 'categories.id', '=', 'add_products.category_id')->select('categories.*','add_products.*','add_products.id as p_id')->get();
        return view('admin.best_seller',compact('best_seller','data'));
    }
  public function delete_featured_product($id)
    {
        $data = FeaturedProduct::find($id);
        $delete = $data->delete();
        return redirect('admin/featured_product')->with('message', 'data is deleted from Database');
    }
     public function delete_best_seller($id)
    {
        $data = BestSeller::find($id);
        $delete = $data->delete();
        return redirect('admin/best_seller')->with('message', 'data is deleted from Database');
    }
    public function create_insta_product()
    {
        $insta = InstaProduct::all();
        return view('admin.insta_product',compact('insta'));
    }
    public function insert_insta_product(Request $r)
    {
        $file = $r->file('image');
        $filename = 'image'.time() .'.'. $r->image->extension();
        $file->move("upload/",$filename);
        $insta = new InstaProduct;
        $insta->image=$filename;
        $done = $insta->save();
        if($done)
        {
            return redirect('admin/insta_product')->with('message','Data Inserted Successfully');
        }
        else
        {
            return redirect('admin/insta_product')->with('notmessage','Something went wrong');
        }
    }
    public function edit_insta_product($id)
    {
        $edit = InstaProduct::find($id);
        return view('admin.edit_insta_product',compact('edit'));
    }
     public function update_insta_product(Request $r)
    {
            $file = $r->file('image');
            $filename = 'image'.time() .'.'. $r->image->extension();
             $file->move("upload/", $filename);
                $update =  InstaProduct::find($r->id);
                $done=$update->image=$filename;
               if($done)
               {
                 return redirect('admin/insta_product')->with('message', 'data Updated in Database');
               }
               else{
                return redirect('admin/insta_product')->with('notmessage', 'data not Inserted in Database');
               }
                
    }
    public function delete_insta_product($id)
    {
        $data = InstaProduct::find($id);
        $delete = $data->delete();
        return redirect('admin/insta_product')->with('message', 'data is deleted from Database');
    }
   
   
   public function blog()
   {
    $blog = Blog::all();
    return view('admin.blog',compact('blog'));
   }
   public function insert_blog(Request $r)
   {
    $file = $r->file('image');
        $filename = 'image'.time() .'.'. $r->image->extension();
        $file->move("upload/",$filename);
        $blog = new Blog;
        $blog->image=$filename;
        $blog->title=$r->title;
        $blog->description=$r->description;
        $done = $blog->save();
        if($done)
        {
            return redirect('admin/blog')->with('message','Data Inserted Successfully');
        }
        else
        {
            return redirect('admin/blog')->with('notmessage','Something went wrong');
        }
   }
   public function edit_blog($id)
    {
        $edit = Blog::find($id);
        return view('admin.edit_blog',compact('edit'));
    }
     public function update_blog(Request $r)
    {
        if ($r->hasFile('image')) {
            $file = $r->file('image');
            $filename = 'image'.time() .'.'. $r->image->extension();
            $upload = $file->move("upload/", $filename);

            if ($upload) {
                $update =  Blog::find($r->id);
                $update->image=$filename;
                $update->title=$r->title;
                $update->description=$r->description;
                $done = $update->save();
                if ($done) {
                    return redirect('admin/blog')->with('message', 'data is updated from Database');
                }
            }
        } else {
             $update =  Blog::find($r->id);
               $update->title=$r->title;
                $update->description=$r->description;
               
            if ($done) {
                return redirect('admin/blog')->with('message', 'data Inserted in Database');
            }
        }
    }
    public function delete_blog($id){

        $data = Blog::find($id);
        $delete = $data->delete();
        return redirect('admin/blog')->with('message', 'data is deleted from Database');
    
}
}
