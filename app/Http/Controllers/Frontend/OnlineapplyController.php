<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admissionform;

class OnlineapplyController extends Controller
{
    public function onlineapply(){
        return view('layouts.frontend.onlineapplyy');
    }
    
    public function transection(Request $request){
        return view('layouts.frontend.tnx');
      }

    public function onlineapply_create(Request $request){
        

        return view('layouts.frontend.tnx',compact('request'));
        
    }

    
    public function transectionPost(Request $request){

        // $newName='student_'.time().'.'.$request->file('photo')->getClientOriginalExtension();
        // $request->file('photo')->move('uploads/students',$newName);


         $inputs=[
            'name'=>$request->input('name'),
            'birth_certificate_no'=>$request->input('birth_certificate_no'),
            'email'=>$request->input('email'),
            'birth_date'=>$request->input('birth_date'),
            'nationality'=>$request->input( 'nationality'),
            'religion'=>$request->input('religion'),
            'gender'=>$request->input('gender'),
            'prvSchool'=>$request->input('prvSchool'),
            'fName'=>$request->input('fName'),
            'fNid'=>$request->input('fNid'),
            'fOccupation'=>$request->input('fOccupation'),
            'fIncome'=>$request->input('fIncome'),
            'fMail'=>$request->input('fMail'),
            'fNumber'=>$request->input('fNumber'),
            'mName'=>$request->input('mName'),
            'mNid'=>$request->input( 'mNid'),
            'mOccupation'=>$request->input('mOccupation'),
            'mIncome'=>$request->input('mIncome'),
            'mMail'=>$request->input('mMail'),
            'mNumber'=>$request->input( 'mNumber'),
            'present_address'=>$request->input('present_address'),
            'post_code'=>$request->input('post_code'),
            'district'=>$request->input('district'),
            'thana'=>$request->input('thana'),
            'addmission_class'=>$request->input('addmission_class'),
            'payment_method'=>$request->input( 'payment_method'),
            'addmission_lottery_number'=>$request->input( 'addmission_lottery_number'),
            'pay_date'=>$request->input( 'pay_date'),
            'qouta'=>$request->input( 'qouta'),
            'amount'=>$request->input('amount'),
            'transaction_id'=>$request->input( 'transaction_id'),
            'status'=>$request->input( 'status'),
            'phone'=>$request->input('phone'),
            // 'photo'=>$newName,
        ];
        Admissionform::create($inputs);
     
      }

}
