<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AddProduct;

use App\ManageProduct;

use App\Category;

use App\SubCategory;

class AddProductController extends Controller
{
    public function create()
    {
      $p_data = ManageProduct::all();
      $c_data = Category::all();
      $s_data = SubCategory::select('sub_categories.sub_category_name','sub_categories.id')->get();
     $parent_category_data=ManageProduct::select('manage_products.parent_cat','categories.category_name','categories.id','categories.parent_id')->join('categories','manage_products.id','=','categories.parent_id')->get();
      $data = AddProduct::all();   
      $data = AddProduct::select('*')->join('categories', 'categories.id', '=', 'add_products.category_id')->get();
        return view('admin.add_product',compact('p_data','c_data','s_data','parent_category_data','data'));
    }
    public function save (Request $s )
    {
        $file1=$s->file('img1');
        $filename1 = 'img1'. time().'.'. $s->img1->extension();
        $file2=$s->file('img2');
        $filename2 = 'img2'. time().'.'. $s->img2->extension();
        $file3=$s->file('img3');
        $filename3 = 'img3'. time().'.'. $s->img3->extension();
        $file4=$s->file('img4');
        $filename4 = 'img4'. time().'.'. $s->img4->extension();
        $file5=$s->file('img5');
        $filename5 = 'img5'. time().'.'. $s->img5->extension();
        $file1->move("/upload",$filename1);
        $file2->move("/upload",$filename2);
        $file3->move("/upload",$filename3);
        $file4->move("/upload",$filename4);
        $file5->move("/upload",$filename5);
        $data = new AddProduct;
         $data->product_name=$s->product_name;
        $data->plan_commission=$s->plan_commission;
$parent_categories_id=$s->parent_category;
         $explode= explode(',', $parent_categories_id);
    //print_r ( $explode);
    $data->parent_id=$explode[0];
    $data->category_id=$explode[1];
        $data->sub_category_id=$s->sub_category_name;
        $data->selling_price=$s->selling_price;
        $data->dealer_price=$s->dealer_price;
        $data->product_cost=$s->product_cost;
        $data->avl_qty=$s->avl_qty;
        $data->discount=$s->discount;
        $data->gst=$s->gst;
        $data->product_type=$data->product_type;
        $data->img1=$filename1;
        $data->img2=$filename2;
        $data->img3=$filename3;
        $data->img4=$filename4;
        $data->img5=$filename5;
        $data->display_product=$s->display_product;
        $data->description=$s->description;
        $data->save();
        if($data)
        {
            return redirect('admin/add_product');
        }
    }
    public function display()
    {
        $data = AddProduct::all();
        $data=SubCategory::select('sub_categories.sub_category_name','sub_categories.id','categories.parent_id')->first();
        return view('admin/add_product',compact('data'));
    }
    public function delete($id)
    {
    $delete = AddProduct::find($id);
    $d =$delete->delete();
    if($d)
        {
            return redirect('admin/add_product');
        }
   }
    
}
