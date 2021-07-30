<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Navbar;
use App\Footer;
use App\AboutUs;
use App\Team;
use App\Category;
use App\SubCategory;
class AboutController extends Controller
{
   
    public function create()
    {
        $about = About::all();
        return view('admin.about',compact('about'));
    }
   public function insert(Request $r)
    {
         $file = $r->file('image');
        $filename = 'image'.time() .'.'. $r->image->extension();
        $file->move("upload/",$filename);
        $about = new About;
        $about->image=$filename;
        $about->title=$r->title;
        $about->description=$r->description;
        $done = $about->save();
        if($done)
        {
            return redirect('admin/about')->with('message','Data Inserted Successfully');
        }
        else
        {
            return redirect('admin/about')->with('notmessage','Something went wrong');
        }
    }
    public function edit($id)
    {
        $edit = About::find($id);
        return view('admin.edit_about',compact('edit'));
    }
     public function update(Request $r)
    {
        if ($r->hasFile('image')) {
            $file = $r->file('image');
            $filename = 'image'.time() .'.'. $r->image->extension();
            $upload = $file->move("upload/", $filename);

            if ($upload) {
                $update =  About::find($r->id);
                $update->image=$filename;
                $update->title=$r->title;
                $update->description=$r->description;
                $done = $update->save();
                if ($done) {
                    return redirect('admin/about')->with('message', 'data is updated from Database');
                }
            }
        } else {
             $update =  About::find($r->id);
               $update->title=$r->title;
                $update->description=$r->description;
                $done = $update->save();
            if ($done) {
                return redirect('admin/about')->with('message', 'data Inserted in Database');
            }
        }
    }
    public function delete($id){

        $data = About::find($id);
        $delete = $data->delete();
        return redirect('admin/about')->with('message', 'data is deleted from Database');
    
}
public function create_about_us()
    {
        $about_us = AboutUs::all();
        return view('admin.about_us',compact('about_us'));
    }
    public function insert_about_us(Request $r)
    {
        $about_us = new AboutUs;
        $about_us->our_mission=$r->our_mission;
        $about_us->our_vision=$r->our_vision;
        $about_us->our_philosophy=$r->our_philosophy;
        $about_us->we_are_trusted=$r->we_are_trusted;
        $about_us->we_are_professional=$r->we_are_professional;
        $about_us->our_story=$r->our_story;
        $done = $about_us->save();
        if($done)
        {
            return redirect('admin/about_us')->with('message','Data Inserted Successfully');
        }
        else
        {
            return redirect('admin/about_us')->with('notmessage','Something went wrong');
        }
    }
    public function edit_about_us($id)
    {
        $edit = AboutUs::find($id);
        return view('admin.edit_about_us',compact('edit'));
    }
     public function update_about_us(Request $r)
    {
                $update =  AboutUs::find($r->id);
                $update->our_mission=$r->our_mission;
                $update->our_vision=$r->our_vision;
                $update->our_philosophy=$r->our_philosophy;
                $update->we_are_trusted=$r->we_are_trusted;
                $update->we_are_professional=$r->we_are_professional;
                $update->our_story=$r->our_story;
                $done = $update->save();
                if ($done) {
                    return redirect('admin/about_us')->with('message', 'data is updated from Database');
                }
        }
    public function delete_about_us($id)
    {
        $data = AboutUs::find($id);
        $delete = $data->delete();
        return redirect('admin/about_us')->with('message', 'data is deleted from Database');
    }
     public function create_team()
    {
        $team = Team::all();
        return view('admin.team',compact('team'));
    }
   public function insert_team(Request $r)
    {
         $file = $r->file('image');
        $filename = 'image'.time() .'.'. $r->image->extension();
        $file->move("upload/",$filename);
        $team = new Team;
        $team->image=$filename;
        $team->title=$r->title;
        $team->description=$r->description;
        $team->subtitle=$r->subtitle;
        $done = $team->save();
        if($done)
        {
            return redirect('admin/team')->with('message','Data Inserted Successfully');
        }
        else
        {
            return redirect('admin/team')->with('notmessage','Something went wrong');
        }
    }
    public function edit_team($id)
    {
        $edit = Team::find($id);
        return view('admin.edit_team',compact('edit'));
    }
     public function update_team(Request $r)
    {
        if ($r->hasFile('image')) {
            $file = $r->file('image');
            $filename = 'image'.time() .'.'. $r->image->extension();
            $upload = $file->move("upload/", $filename);

            if ($upload) {
                $update =  Team::find($r->id);
                $update->image=$filename;
                $update->title=$r->title;
                $update->description=$r->description;
                $update->subtitle=$r->subtitle;
                $done = $update->save();
                if ($done) {
                    return redirect('admin/team')->with('message', 'data is updated from Database');
                }
            }
        } else {
             $update =  About::find($r->id);
               $update->title=$r->title;
                $update->description=$r->description;
               $update->subtitle=$r->subtitle;
               $done = $update->save();
            if ($done) {
                return redirect('admin/team')->with('message', 'data Inserted in Database');
            }
        }
    }
    public function delete_team($id){

        $data = Team::find($id);
        $delete = $data->delete();
        return redirect('admin/team')->with('message', 'data is deleted from Database');
    
}
}
