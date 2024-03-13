<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Mail\booking as bookingmail;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Mail;
use Twilio\Rest\Client;



class UserController extends Controller
{
    //Show free booking form
    public function create(){
        return view('ClassBooking.freeClassForm');
    }

   public function sms(){}



    //create new free class booking
    public function store(Request $request){
       // dd($request);

       
        $formFields = $request->validate([
            'parent_name' => ['required', 'string', 'max:255'],
            'child_name' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string'],
            'email' => ['required', 'email', 'max:255', Rule::unique('bookings','email')],
            'phone' => ['required','min:10'],
            'subject'=>'required',
            'classlevel'=>'required',
            'time_schedule'=>'required',
            'lesson_needs'=>['required','string','max:255']
            
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        //hash password
       // $formFields['password'] = bcrypt($formFields['password']);
      // dd( $formFields);
        //select google - meet link based on days //or should it be random??
        $mydate = $request->time_schedule;
        date('w', strtotime($mydate));
     //dd(date("l"));
        $videolink="";
       if(date("l")=="Monday"){
         $videolink="https://meet.google.com/wix-fdkv-pbt";
       }elseif(date("l")=="Tuesday"){
        $videolink="https://meet.google.com/mvz-qsag-iaj";
       }elseif(date("l")=="Wednesday"){
        $videolink="https://meet.google.com/aeq-zjpx-jaq";
      }elseif(date("l")=="Thursday"){
       $videolink="https://meet.google.com/woz-xfuz-rwz";
      }elseif(date("l")=="Friday"){
        $videolink="https://meet.google.com/nfz-ttbh-ezf";
      }



        $booking = Booking::create($formFields);

        //login if you want user to login after filling form
        //auth()->login($user);
        //send mail

        $mailData = [
            'title' => 'Your free class at kerithfountain.com',
            'parent_name' => $request->get('parent_name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'subject' => $request->get('subject'),
            'child_name' => $request->get('child_name'),
            'classlevel' => $request->get('classlevel'),
            'lesson_needs' => $request->get('lesson_needs'),
            'time_schedule' => $request->get('time_schedule'),
            'videolink'=>$videolink,
        ];
         
        Mail::to('bookings@kerithfountain.com')->send(new bookingmail($mailData));
        Mail::to($mailData['email'])->send(new bookingmail($mailData));
//dd($mailData);

      //Send SMS
        $sid = getenv("TWILIO_SID");
        $token = getenv("TWILIO_TOKEN");
        $twilio_phone = getenv("TWILIO_PHONE");
        $twilio = new Client($sid, $token);

        $message = $twilio->messages
                  ->create("+2348023658915", // to
                           [
                               "body" => 'Class on '.$request->get('time_schedule').'Link: '. $videolink,
                               "from" => $twilio_phone
                           ]
                  );

//print($message->sid);
      
        return redirect('/')->with('message','Booked a free class; Check email for further details');
    }
}
