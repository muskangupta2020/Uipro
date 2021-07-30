<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Navbar;
use App\Footer;
use App\ ContactDetail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
        public function create()
        {
            $data = Contact::all();
            return view('admin.contact_info',compact('data'));
        }   
        public function insert(Request $r)
        {
            $data = new Contact;
            $data->contact_info=$r->contact_info;
            $data->get_in_touch=$r->get_in_touch;
            $done=$data->save();
            if($done)
            {
                return redirect('admin/contact_info')->with('message','Data Inserted Successfully');
            }
            else
            {
                return redirect('admin/contact_info')->with('notmessage','Something went wrong');
            }

        } 
        public function delete($id)
        {
        $data = Contact::find($id);
        $delete = $data->delete();
        return redirect('admin/contact_info')->with('message', 'data is deleted from Database');
    }
   
    public function contact_detail()
    {
        $contact =  ContactDetail::all();
        return view('admin.contact_us',compact('contact'));
    }
    public function insert_contact_detail(Request $r)
    {
        $contact = new  ContactDetail;
        $contact->contact_name=$r->contact_name;
        $contact->contact_message=$r->contact_message;
        $contact->contact_subject=$r->contact_subject;
        $contact->contact_email=$r->contact_email;
        $done=$contact->save();
        if($done)
        {
            return redirect('front/contact_us')->with('message','Your Contact Message Sent Successfully');
        }
        else
        {
            return redirect('front/contact_us')->with('notmessage','Your Contact Message Not Sent');

        }
    }
    public function display()
    {
        $contact =  ContactDetail::all();
        return view('admin/contact_us',compact('contact'));
    }
   public function delete_contact_detail($id)
        {
        $data =  ContactDetail::find($id);
        $delete = $data->delete();
        return redirect('admin/contact_us')->with('message', 'Contact Details is deleted from Database');
    }
}
