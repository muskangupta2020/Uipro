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
use App\User;
use Session;
use App\Checkout;
use App\Order;
use Razorpay\Api\Api;
use Illuminate\Support\Str;
use PaytmWallet;
use App\Coupan;
use App\AdvanceCoupan;
use DB;
use Carbon\Carbon;
use App\SocialLink;
class CheckoutController extends Controller
{
    private $razorpayId = "rzp_test_bqoI9kGlikFyDA";
    private $razorpayKey = "HZfTECCOk7J2VSYbGonheWvB";
    public function checkout()
    {
        $p_total_cost =Cart::sum('p_total_cost');
        
        $user =  Auth::user()->user_id;
        $cart = Cart::join('add_products','add_products.id','=','carts.p_id')->select('carts.*','add_products.*','carts.id as c_id')->where('carts.user_id',$user)->get();
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
        $coupan = DB::table('coupans')->whereDate('expiry_date', '>', Carbon::now()->format('Y-m-d'))->get();
        $advancecoupan = DB::table('advance_coupans')->whereDate('advance_expiry_date', '>', Carbon::now()->format('Y-m-d'))->get();
         $link = SocialLink::all();
        return view('front.checkout',compact('p_total_cost','cart','team','footer','navbar','contact','data','advt','carousel','insta','category','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','cat','coupan','advancecoupan','link'));
    }
 
//      public function Initiates(Request $r)
//     { 
//          $user =  Auth::user()->user_id;
//          $count=Cart::where('user_id',$user)->count();
//          $order_id=mt_rand(100000,999999);
//         $checkout = new Checkout;
//         $checkout->order_id=$order_id;
//         $checkout->user_id=$user;
//         $checkout->user_name=$r->name;
//         $checkout->email=$r->email;
//         $checkout->city=$r->city;
//         $checkout->states=$r->states;
//         $checkout->address=$r->street_address;
//         $checkout->zipcode=$r->zipcode;
//         $checkout->payment_mode=$r->payment_mode;
//         $checkout->total=$r->total;
//         $checkout->no_of_product=$count;
//         $checkout->subtotal=$r->sub_total;
//         $checkout->payment_status='pending';
//         $checkout->order_status='pending';
//         $done=$checkout->save();
// // echo $r->total*100;

//         // if($done)
//              $cartproduct=Cart::where('user_id',$user)->get();
//          foreach ($cartproduct as $key) {
//              $order= new Order;
//              $order->order_id=$order_id;
//              $order->p_id=$key->p_id;
//              $order->p_name=$key->p_name;
//              $order->p_price=$key->p_price;
//              $order->p_Quantity=$key->p_Quantity;
//              $order->p_total_cost=$key->p_total_cost;
//              $order->user_id=$user;
//              $order->save();
//          }
//           $receiptId=mt_rand(100000,999999);
//         $api = new Api($this->razorpayId,$this->razorpayKey);
//           echo $total = $r->total*100;
//           $order = $api->order->create(array(
//             'receipt' => $receiptId,
//             'amount' => $total,
          
//             )
//         );

//         // Return response on payment page
//         $response = [
//             'orderId' => $order_id,
//             'razorpayId' => $this->razorpayId,
//             'amount' => $total, 
//             'name' => $r->all()['name'],
//             'email' => $r->all()['email'],
//             'contactNumber' =>Auth::user()->phone_no,
//             'address' => $r->all()['street_address'],
//             'description' => 'Testing description',
//             'receipt_id'=>$receiptId,
//         ];

//         // Let's checkout payment page is it working
//         return view('front.payment-page',compact('response'));
//     }
                
        
  
       
        
       
    
  

    
//     public function Completes()
//     {   
//        // Get transaction id
//         print_r($request->all());
//     // Now verify the signature is correct . We create the private function for verify the signature
//     $signatureStatus = $this->SignatureVerify(
//         $request->all()['rzp_signature'],
//         $request->all()['rzp_paymentid'],
//         $request->all()['rzp_orderid'],
//         $request->all()['name'],
//         $request->all()['amount'],
     
//         $request->all()['receipt_id'],
//     );

//     // If Signature status is true We will save the payment response in our database
//     // In this tutorial we send the response to Success page if payment successfully made
//     if($signatureStatus == true)
//     { $user_id=Auth::user()->user_id;
       
//                 // You can create this page
//         return view('user.payment-success-page');
//     }
//     else{
//         // You can create this page
//         return view('user.payment-failed-page');
//     }
//     }

// // In this function we return boolean if signature is correct

//     public function Complete(Request $request)
// {  
//     print_r($request->all());
//     // Now verify the signature is correct . We create the private function for verify the signature
//     $signatureStatus = $this->SignatureVerify(
//         $request->all()['rzp_signature'],
//         $request->all()['rzp_paymentid'],
//         $request->all()['rzp_orderid'],
//         $request->all()['name'],
//         $request->all()['amount'],
//         $request->all()['currency'],
//         $request->all()['receipt_id'],
//     );

//     // If Signature status is true We will save the payment response in our database
//     // In this tutorial we send the response to Success page if payment successfully made
//     if($signatureStatus == true)
//     { $user_id=Auth::user()->user_id;
//         $data = new Deposit;
//         $data->user_id=$request->user_id;
//         $data->receipient_id=$request->receipt_id;
//         $data->receipient_name=$request->name;
//         $data->ad_money=$request->amount;
//         $data->payment_mode="Rarzorpay";
//         $data->payment_gateway="Rarzorpay";
//         $data->transaction_id=$request->rzp_paymentid;
//         $data->user_id=$user_id;
//         $data->status="successful";
//         $data->save();
//                 // You can create this page
//         return view('user.payment-success-page');
//     }
//     else{
//         // You can create this page
//         return view('user.payment-failed-page');
//     }
// }

// In this function we return boolean if signature is correct
// private function SignatureVerify($_signature,$_paymentId,$_orderId)
// {
//     try
//     {
//         // Create an object of razorpay class
//         $api = new Api($this->razorpayId, $this->razorpayKey);
//         $attributes  = array('razorpay_signature'  => $_signature,  'razorpay_payment_id'  => $_paymentId ,  'razorpay_order_id' => $_orderId);
//         $order  = $api->utility->verifyPaymentSignature($attributes);
//         return true;
//     }
//     catch(\Exception $e)
//     {
//         // If Signature is not correct its give a excetption so we use try catch
//         return false;
//     }
// }
 public function pay(Request $r) {
 //    echo "<pre/>";
 // print_r($r->all());

         $user =  Auth::user()->user_id;
         $count=Cart::where('user_id',$user)->count();
         $order_id=mt_rand(100000,999999);
        $checkout = new Checkout;
        $checkout->order_id=$order_id;
        $checkout->user_id=$user;
        $checkout->user_name=$r->name;
        $checkout->email=$r->email;
        $checkout->city=$r->city;
        $checkout->states=$r->states;
        $checkout->address=$r->street_address;
        $checkout->zipcode=$r->zipcode;
        $checkout->payment_mode=$r->payment_mode;
        $checkout->total=$r->total;
        $checkout->no_of_product=$count;
        $checkout->subtotal=$r->sub_total;
        $checkout->payment_status='pending';
        $checkout->order_status='pending';
        $done=$checkout->save();
        $total= $r->total;

        if($done){
             $cartproduct=Cart::where('user_id',$user)->get();
         foreach ($cartproduct as $key)
          {
             $order= new Order;
             $order->order_id=$order_id;
             $order->p_id=$key->p_id;
             $order->p_name=$key->p_name;
             $order->p_price=$key->p_price;
             $order->p_Quantity=$key->p_Quantity;
             $order->p_total_cost=$key->p_total_cost;
             $order->user_id=$user;
             $order->save();
         } }
        $payment = PaytmWallet::with('receive');

        $payment->prepare([
          'order' =>$order_id, // your order id taken from cart
          'user' => Auth::user()->user_id, // your user id
          'mobile_number' => Auth::user()->phone_no, // your customer mobile no
          'email' => Auth::user()->email, // your user email address
          'amount' =>  $total, // amount will be paid in INR.
          'callback_url' => route('paytm.callback') // callback URL
        ]);
        
        return $payment->receive();
    }

    /**
     * Obtain the payment information.
     *
     *
     */
    public function paymentCallback( Request $request)
    {   
        $transaction = PaytmWallet::with('receive');
        
        $response = $transaction->response(); // To get raw response as array
        //Check out response parameters sent by paytm here -> http://paywithpaytm.com/developer/paytm_api_doc?target=interpreting-response-sent-by-paytm
        
          // dd($response);
// echo $request['ORDERID'];

// die();
        if($transaction->isSuccessful())
        {  $checkoutupdate=Checkout::where('order_id',$request['ORDERID'])->update(['payment_status'=>'Successfull']);
    $order=Order::where('order_id',$request['ORDERID'])->get();
    foreach($order as $o){
        $cart=Cart::where('user_id',$o->user_id);
        $deletecart=$cart->delete();
    }

    $qs = Order::where('order_id',$request['ORDERID'])->get();
    foreach($qs as $p)
    {
        $product = AddProduct::where('id',$p->p_id)->select('avl_qty')->first();
        $qtysold = Order::where('p_id',$p->p_id)->select('p_Quantity')->first();
        $qty_sold = $product->avl_qty - $qtysold->p_Quantity;
        // echo $product->avl_qty;
        $sold=AddProduct::where('id',$p->p_id)->select('qty_sold')->first();
$soldqty=$sold->qty_sold+$qtysold->p_Quantity;
// echo $sold->qty_sold;
$updateproduct=AddProduct::where('id',$p->p_id)->update(['qty_sold'=>$soldqty,'avl_qty'=>$qty_sold]);
        // echo $qty_sold;
            
    }
    return redirect('front/thanks');
        }
        else if($transaction->isFailed()){
          //Transaction Failed
            return redirect('front/failed');
        }
        else if($transaction->isOpen()){
          //Transaction Open/Processing
        }
        $transaction->getResponseMessage(); //Get Response Message If Available
        //get important parameters via public methods
        $transaction->getOrderId(); // Get order id

        $transaction->getTransactionId(); // Get transaction id
    }    
    public function payment_success()
    {
        $advancecoupan = AdvanceCoupan::all();
        $footer = Footer::all();
        $navbar = Navbar::all();
        $contact = ContactDetail::all();
        $data = Contact::all();
        $bottommen= SubCategory::where('category_id','2')->limit(2)->get();
        $bottomwomen=SubCategory::where('category_id','4')->limit(2)->get();
        $topmen= SubCategory::where('category_id','1')->limit(2)->get();
        $topwomen=SubCategory::where('category_id','3')->limit(2)->get();
        $clothing=SubCategory::where('category_id','5')->limit(4)->get();
        $accessories=SubCategory::where('category_id','6')->limit(4)->get();
        $cat = Category::all();
        $category = AddProduct::distinct()->limit(6)->get();
         $link = SocialLink::all();
        return view('front.thanks',compact('advancecoupan','footer','navbar','contact','data','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','cat','category','link'));
    }
    public function payment_failed()
    {
        $advancecoupan = AdvanceCoupan::all();
        $footer = Footer::all();
        $navbar = Navbar::all();
        $contact = ContactDetail::all();
        $data = Contact::all();
        $bottommen= SubCategory::where('category_id','2')->limit(2)->get();
        $bottomwomen=SubCategory::where('category_id','4')->limit(2)->get();
        $topmen= SubCategory::where('category_id','1')->limit(2)->get();
        $topwomen=SubCategory::where('category_id','3')->limit(2)->get();
        $clothing=SubCategory::where('category_id','5')->limit(4)->get();
        $accessories=SubCategory::where('category_id','6')->limit(4)->get();
        $cat = Category::all();
        $category = AddProduct::distinct()->limit(6)->get();
         $link = SocialLink::all();
        return view('front.failed',compact('advancecoupan','footer','navbar','contact','data','bottommen','bottomwomen','topmen','topwomen','clothing','accessories','cat','category','link'));
    }
   

}
