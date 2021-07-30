<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Withdraw;
use Auth;
use App\KYC;
use App\Wallet;
use Razorpay\Api\Api;
use Illuminate\Support\Str;
class WithdrawController extends Controller
{
      private $razorpayId = "rzp_test_MlUzfA0yQCNbez";
    private $razorpayKey = "ucj8FEUJLd7DGolo2oLG5ipV";

    public function withdraw_payouts()
    {
          $user_id=Auth::user()->user_id;
        $data = Withdraw::where('user_id',$user_id)->first();
        $query = KYC::where('user_id',$user_id)->first();
        $bank = Wallet::where('user_id',$user_id)->first();
        return view('user.withdraw_payouts',compact('data','query','bank'));
    }
    public function save_withdraw(Request $r)
    {
        $user_id=Auth::user()->user_id;
            $user_name=Auth::user()->name;
            $data=KYC::where('user_id',$user_id)->exists();
            if($data != null)
            {
                if( $data=KYC::where('user_id',$user_id)->where('status','approve'))
                {
                    $request = new Withdraw;
                    $request->user_id=$user_id;
                    $request->user_name=$user_name;
                    $request->withdrawal_mode=$r->withdrawal_mode;
                    $request->withdrawal_amount=$r->withdrawal_amount;
                    $request->withdrawal_status='request';
                    $done=$request->save();
                    if($done)
                    {
                        return redirect('user/withdraw_payouts')->with('message','Your request has been submitted to admin for payout');
                    }
                }
            }
    }
    public function withdraw_history()
    {

        return view('user.withdraw_history');
    }
    public function Initiate($id)
    {   
     $data=Withdraw::join('users','withdraws.user_id','=','users.user_id')->where('withdraws.id',$id)->first();
    // echo $data->withdrawal_amount;
    // echo "<pre/>";
    // print_r($data);
        $receiptId=mt_rand(100000,999999);
        $api = new Api($this->razorpayId,$this->razorpayKey);
          
          $order = $api->order->create(array(
            'receipt' => $receiptId,
            'amount' => $data->withdrawal_amount * 100,
            'currency' => 'INR'
            )
        );

        // Return response on payment page
        $response = [
            'orderId' => $order['id'],
            'razorpayId' => $this->razorpayId,
            'amount' =>  $data->withdrawal_amount * 100,
            'name' => $data->user_name,
            'currency' => 'INR',
            'email' => $data->email,
            'contactNumber' => $data->phone_no,
            'address' => $data->street_address,
            'description' => 'Testing description',
            'receipt_id'=>$receiptId,
            'update_id'=> $id,
        ];

    //     // Let's checkout payment page is it working
        return view('admin.payment-page',compact('response'));

    }
    public function Complete(Request $request)
{ 
    // print_r($request->all());
    // Now verify the signature is correct . We create the private function for verify the signature
    $signatureStatus = $this->SignatureVerify(
        $request->all()['rzp_signature'],
        $request->all()['rzp_paymentid'],
        $request->all()['rzp_orderid'],
        $request->all()['name'],
        $request->all()['id'],
        $request->all()['amount'],
        $request->all()['rzp_currency'],
        $request->all()['rzp_receipt_id'],
    );

    // If Signature status is true We will save the payment response in our database
    // In this tutorial we send the response to Success page if payment successfully made
    if($signatureStatus == true)
    {  
        // print_r($request::all());
        // echo "yes";
// echo $request->all()['name'];
        $data=Withdraw::where('id',$request->id)->update(['withdrawal_status'=>'Paid']);
        if($data)
       {
         return view('admin.payment-success-page');
       }
    }
    else{
        // You can create this page
        return view('admin.payment-failed-page');
    }
}

// In this function we return boolean if signature is correct
private function SignatureVerify($_signature,$_paymentId,$_orderId)
{
    try
    {
        // Create an object of razorpay class
        $api = new Api($this->razorpayId, $this->razorpayKey);
        $attributes  = array('razorpay_signature'  => $_signature,  'razorpay_payment_id'  => $_paymentId ,  'razorpay_order_id' => $_orderId);
        $order  = $api->utility->verifyPaymentSignature($attributes);
        return true;
    }
    catch(\Exception $e)
    {
        // If Signature is not correct its give a excetption so we use try catch
        return false;
    }
}
}
