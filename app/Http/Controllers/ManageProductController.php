<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ManageProduct;

use App\SubCategory;

use App\Category;

class ManageProductController extends Controller
{
    public function create()
    {
      $data = ManageProduct::all();
    
     $parent_category_data=Category::select('manage_products.parent_cat','categories.category_name','categories.id','categories.parent_id')->join('manage_products','manage_products.id','=','categories.parent_id')->get();
      // echo "<pre/>";
      // print_r($parent_category_data);
         $display_manage_product=SubCategory::select('manage_products.parent_cat','categories.category_name','sub_categories.sub_category_name','categories.id','categories.parent_id')->join('manage_products','manage_products.id','=','sub_categories.parent_id')
    ->join('categories','categories.id','=','sub_categories.category_id')->get();
     return view('admin.manage_categories',compact('data','parent_category_data','display_manage_product'));
    }
    public function save_parent_category(Request $c)

    {
        $data = new ManageProduct;
      $data->parent_cat=$c->parent_cat;
        $data->brand_name=$c->brand_name;
        $data->save();
       if($data)
    {

        return redirect('admin/manage_categories')->with('message','Parent Category Created Successfully');;
    }
} 
    public function save_category(Request $s)

  {

    $cat = new Category;
    $cat->parent_id=$s->parent_cat;
    $cat->category_name=$s->category_name;
    $data=$cat->save();
    if($data)
    {
      return redirect('admin/manage_categories')->with('message',' Category Created Successfully');
    }
  }
  public function display_parent_category()

{
    $display_manage_product=SubCategory::select('manage_products.parent_cat','categories.category_name','categories.id','categories.parent_id')->join('manage_products','manage_products.id','=','sub_categories.parent_id')
    ->join('categories','categories.id','=','sub_categories.categories_id')->get();

   return view('admin/manage_categories',compact('display_manage_product'));

}
    public function create_category()
  { 
     $c_data= DB::table('manage_products')
            ->join('parent_cat', 'parent_cat.id', '=', 'parent_cat.parent_id')
            ->join('category_name', 'categories.id', '=', 'category_name.categories_id')
            ->select('manage_products.*', 'parent_cat', 'category_name')
            ->get();
  
       return redirect('admin/manage_categories',compact('c_data'));
  }
     public function create_sub_category()
  {
    $data = Category::all();
    $parent_category_data=Category::select('manage_products.parent_cat','categories.category_name')->join('manage_products','manage_products.id','=','categories.parent_id')->get();
      return view('admin.manage_categories',compact('data','parent_category_data'));
   }
   public function save_sub_category(Request $sc)
   {
    
    $sub= new SubCategory;
    $parent_categories_id=$sc->parent_category;
    $explode= explode(',', $parent_categories_id);
    //print_r ( $explode);
    $sub->parent_id=$explode[0];
    $sub->category_id=$explode[1];
     $sub->sub_category_name=$sc->sub_category_name;
     $sub->save();
     if($sub)
     {
       return redirect('admin/manage_categories')->with('message','Sub Category Created Successfully');;
    }
   }
   
public function display_manage_category()
{
      $display_category = Category::all();
  return view('admin/display_manage_category',compact('display_category'));
}
  function display_manage_subcategory()
 {
    $display_manage_subcategory=SubCategory::all();
    return view('admin.display_manage_subcategory',compact('display_manage_subcategory'));
 }
 public function delete_category($id)
 {
    $delete = Category::find($id);
    $d =$delete->delete();
    if($d)
        {
            return redirect('admin/display_manage_category')->with('message',' Category Deleted Successfully');;
        }
 }
 public function delete_subcategory($id)
 {
    $delete = SubCategory::find($id);
    $d = $delete->delete();
    if($d)
        {
            return redirect('admin/display_manage_subcategory')->with('message',' SubCategory Deleted Successfully');;
        }
 }
}
