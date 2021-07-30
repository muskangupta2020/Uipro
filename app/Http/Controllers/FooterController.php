<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Footer;
use App\SocialLink;
use validate;
class FooterController extends Controller
{
    public function create()
    {
        $footer = Footer::all();
        return view('admin.footer',compact('footer'));
    }
    public function insert(Request $r)
    {
        $footer = new Footer;
        $footer->about=$r->about;
        $footer->information=$r->information;
        $footer->phone=$r->phone;
        $footer->address=$r->address;
        $footer->email=$r->email;
        $done = $footer->save();
        if($done)
        {
            return redirect('admin/footer')->with('message','Data Inserted Successfully');
        }
        else
        {
            return redirect('admin/footer')->with('notmessage','Something went wrong');
        }
    }
    public function edit($id)
    {
        $edit = Footer::find($id);
        return view('admin.edit_footer',compact('edit'));
    }
     public function update(Request $r)
    {
                $update =  Footer::find($r->id);
               $update->about=$r->about;
                $update->information=$r->information;
                $update->phone=$r->phone;
                $update->address=$r->address;
                    $update->email=$r->email;

                $done = $update->save();
                if ($done) {
                    return redirect('admin/footer')->with('message', 'data is updated from Database');
                }
        }
    public function delete($id)
    {
        $data = Footer::find($id);
        $delete = $data->delete();
        return redirect('admin/footer')->with('message', 'data is deleted from Database');
    }//
    public function link_create()
    {
        $link = SocialLink::all();
        return view('admin.social_links',compact('link'));
    }
    public function save(Request $request)
    {
        
        $file = $request->file('image');
        $filename = 'image' . time() . '.' . 'jpg';
        $upload = $file->move("/upload/", $filename);

        if ($upload) {

            $link = new SocialLink;
            $link->link = $request->link;
            $link->image = $filename;
            $done = $link->save();
            if ($done) {
                return redirect('admin/social_links')->with('message', 'data Inserted in Database');
            }
            return redirect('admin/social_links')->with('notmessage', 'something went wrong');
        }
    }
   
    public function Editsocial($id)
    {
        $data = SocialLink::find($id);

        return view('admin.editsocial', compact('data'));
    }
    public function Deletesocial($id)
    {
        $data = SocialLink::find($id);
        $delete = $data->delete();
        return redirect('admin/social_links')->with('message', 'data is deleted from Database');
    }
    public function updatesocial(Request $request)
    {
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = 'image' . time() . '.' . 'jpg';
            $upload = $file->move("upload/", $filename);

            if ($upload) {
                $cat =  SocialLink::find($request->id);
                $cat->link = $request->link;
                $cat->image = $filename;
                $done = $cat->save();
                if ($done) {
                    return redirect('admin/social_links')->with('message', 'data is updated from Database');
                }
            }
        } else {
            $cat = SocialLink::find($request->id);
            $cat->link = $request->link;
            $done = $cat->save();
            if ($done) {
                return redirect('admin/social_links')->with('message', 'data Inserted in Database');
            }
        }
    }
}
