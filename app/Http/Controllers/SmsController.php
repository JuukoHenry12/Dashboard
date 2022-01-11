<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use buibr\Budget\BudgetSMS;
use App\Models\Sms;

class SmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sms.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function generateOTP(){
        $otp = mt_rand(1000,9999);
        return $otp;
    }

    public function store(Request $request)
    {

        $budget = new BudgetSMS( [
            'username'=>'buytech',
            'userid'=> '20200',
            'handle'=>'3b10ba8de6dc3f5303787dd8e0961c11',
            'from'=>'MFI TEST SMS',
            'price'=> 1,
            'mccmnc'=> 1,
            'credit'=> 1,
        ]);

        $sendsms = new Sms;
        $sendsms->phone = $request->phone;
        $sendsms->description = $request->description;
        // generate random no
        $randomVerificationCode   =   rand(10000,99999);
        $sendsms->verification_code = $randomVerificationCode;
        //generate message
        $text_msg = "Your OTP is : ";
        $customer_messge = $text_msg . $randomVerificationCode;
        // send message to contact +256-
        $send = $budget->send( $sendsms->phone , $customer_messge );

        // request after sending sms

        $sendsms->save();
        return redirect()->back();




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
