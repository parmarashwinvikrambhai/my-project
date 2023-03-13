<?php

namespace App\Http\Controllers;

use App\Models\Feedback_table;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
        public function dataInsert(Request $request)
        {
            $name = $request->input('name');    
            $email = $request->input('email');
            $subject = $request->input('subject');
            $message = $request->input('message');


            

                $isInsertSuccess = Feedback_table::insert(['name'=>$name,'email'=>$email,'subject'=>$subject,'message'=> $message]);
                 return view('index');


        }
    
}