<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deposit;
use App\Epin;
use App\Wallet;
use App\Order;
use App\KYC;
use App\BankMoneyRequest;
use Illuminate\Support\Facades\Auth ;
use Razorpay\Api\Api;
use Illuminate\Support\Str;


class DepositController extends Controller
{
    private $razorpayId = "rzp_test_MlUzfA0yQCNbez";
    private $razorpayKey = "ucj8FEUJLd7DGolo2oLG5ipV";

    public function bank_money_request()
    {
        // $data = Wallet::all();
        $data = BankMoneyRequest::all();
        return view('admin.bank_money_request',compact('data'));
    }
    public function epin_deposit()
    {
        $user_id=Auth::user()->user_id;
        $data = Wallet::where('user_id',$user_id)->first();
        $query = BankMoneyRequest::where('user_id',$user_id)->get();
        // $data = Wallet::where('wallet_id');
        return view('user.epin_deposit',compact('data','query'));
    }
    public function bank_deposit()
    {
         $user_id=Auth::user()->user_id;
        $data = BankMoneyRequest::where('user_id',$user_id)->first();
       return view('user.bank_deposit',compact('data'));

    }
    public function check_kyc_details(Request $r)
    {
            $user_id=Auth::user()->user_id;
            $user_name=Auth::user()->name;
            $data=KYC::where('user_id',$user_id)->exists();
            if($data != null)
            {
                if( $data=KYC::where('user_id',$user_id)->where('status','approve'))
                {
                    $request = new BankMoneyRequest;
                    $request->user_id=$user_id;
                    $request->user_name=$user_name;
                    $request->ad_money=$r->ad_money;
                    $request->request_status=$r->request_status;
                    $done=$request->save();
                    if($done)
                    {
                        return redirect('user/bank_deposit')->with('message','KYC Details Approved');
                    }
                }
            }
        }
                   
    public function reject_status(Request $request)
    {
         $status = 'rejected';
        echo $request->user_id;
        $rejected = BankMoneyRequest::where('id', $request->user_id)->update(['request_status' => $status]);
        if ($rejected) {
            return redirect('admin/bank_money_request')->with('message','Rejected');
        }
    }
    public function approve_status(Request $request)
    {
        $status = 'approve';
        echo $request->user_id;
        $approve = BankMoneyRequest::where('id',$request->user_id)->update(['request_status' => $status]);
        if($approve)
        {
            return redirect('admin/bank_money_request')->with('message','Aprroved');
        }
    }
    public function deposit_history()
    {
          $user_id=Auth::user()->user_id;
        $data = Deposit::where('user_id',$user_id)->get();
        return view('user.deposit_history',compact('data'));
    }
    public function fund_wallet(Request $request){
         $user_id=Auth::user()->user_id;
        $epin = Epin::where('user_id',$user_id)->first();
        if($request->ad_money <= $epin->epin_no){
            $epininotmoney= $request->ad_money * 1;
            $epinno= $epin->epin_no - $request->ad_money ;
            $wallet_ballance= Wallet::where('user_id',$user_id)->first();
            $money= $wallet_ballance->wallet_balance + $epininotmoney   ;
            $wallet=Wallet::where('user_id',$user_id)->update(['wallet_balance'=> $money]);
            $epinupdate=Epin::where('user_id',$user_id)->update(['epin_no'=> $epinno]);
            if($wallet && $epinupdate){
                return redirect('user/epin_deposit')->with('message','Wallet Money Added');
            }
            return redirect('user/epin_deposit')->with('notmessage','Wallet Money Not Added');
        }
        else{
            return redirect('user/epin_deposit')->with('notmessage','Wallet Money Not Added');
        }

    }
    public function Initiate(Request $request)
    { 
        $receiptId=mt_rand(100000,999999);
        $api = new Api($this->razorpayId,$this->razorpayKey);
          
          $order = $api->order->create(array(
            'receipt' => $receiptId,
            'amount' => $request->all()['amount'] * 100,
            'currency' => 'INR'
            )
        );

        // Return response on payment page
        $response = [
            'orderId' => $order['id'],
            'razorpayId' => $this->razorpayId,
            'amount' => $request->all()['amount'] * 100,
            'name' => $request->all()['name'],
            'currency' => 'INR',
            'email' => $request->all()['email'],
            'contactNumber' => $request->all()['contactNumber'],
            'address' => $request->all()['address'],
            'description' => 'Testing description',
            'receipt_id'=>$receiptId,
        ];

        // Let's checkout payment page is it working
        return view('user.payment-page',compact('response'));
    }
    public function Complete(Request $request)
{  
    print_r($request->all());
    // Now verify the signature is correct . We create the private function for verify the signature
    $signatureStatus = $this->SignatureVerify(
        $request->all()['rzp_signature'],
        $request->all()['rzp_paymentid'],
        $request->all()['rzp_orderid'],
        $request->all()['name'],
        $request->all()['amount'],
        $request->all()['currency'],
        $request->all()['receipt_id'],
    );

    // If Signature status is true We will save the payment response in our database
    // In this tutorial we send the response to Success page if payment successfully made
    if($signatureStatus == true)
    { $user_id=Auth::user()->user_id;
        $data = new Deposit;
        $data->user_id=$request->user_id;
        $data->receipient_id=$request->receipt_id;
        $data->receipient_name=$request->name;
        $data->ad_money=$request->amount;
        $data->payment_mode="Rarzorpay";
        $data->payment_gateway="Rarzorpay";
        $data->transaction_id=$request->rzp_paymentid;
        $data->user_id=$user_id;
        $data->status="successful";
        $data->save();
                // You can create this page
        return view('user.payment-success-page');
    }
    else{
        // You can create this page
        return view('user.payment-failed-page');
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