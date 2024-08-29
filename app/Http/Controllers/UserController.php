<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Mail\booking as bookingmail;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Mail;
use Twilio\Rest\Client;
use Carbon\CarbonPeriod;
use Carbon\Carbon;



class UserController extends Controller
{
    //Show free booking form
  public function create(){
      //set booking dates

    $period = CarbonPeriod::between(now()->addDays(1), now()->addDays(9))
      ->filter(fn ($date) => $date->isWeekday())
      ->excludeStartDate();
      $dates = [];
 
      foreach ($period as $date) {
       $dates[] = $date->format('l, j M Y');
      }
      //check that the dates in $dates are not in the database
      //select dates from database that are equal or greater than dates[0]
    $used_dates = Booking::all()->where ('time_schedule','>=',$dates[0]);  
    //if dates is not in used dates, display all hours
    //if dates is in used dates, display only hours NOT IN the database
    $startTime = Carbon::parse('10:00');
    $endTime   = Carbon::parse('16:00');
 
    $time_period= CarbonPeriod::create($startTime, '1 hour', $endTime);
    $hours  = [];
      foreach ($time_period as $date) {
        $hours[] = $date->format('H:i');
     }
     //check that the hours in $hours are not in the database
     
//dd($dates);

//javascript = display hours based on day picked. check dbase based on day pick and filter out hours from list

//if ($dt->addDays(2)->isWeekend()) $dt->next(Carbon::MONDAY);

//2. check database if date is free or build your own calendar

        return view('ClassBooking.freeClassForm', compact('hours','dates'));
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
            'lesson_day'=>['required'],
            'lesson_needs'=>['required','string','max:255']
            
            //'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        //hash password
       // $formFields['password'] = bcrypt($formFields['password']);
      // dd( $formFields);
        //select google - meet link based on days //or should it be random??
        $mydate = $request->lesson_day;
        $day = Carbon::createFromFormat('l, j M Y', $mydate)
                                ->format('l');
     // date('w', strtotime($mydate));
        
     //dd($day);
        $videolink="";
       if($day=="Monday"){
         $videolink="https://meet.google.com/wix-fdkv-pbt";
       }elseif($day=="Tuesday"){
        $videolink="https://meet.google.com/mvz-qsag-iaj";
       }elseif($day=="Wednesday"){
        $videolink="https://meet.google.com/aeq-zjpx-jaq";
      }elseif($day=="Thursday"){
       $videolink="https://meet.google.com/woz-xfuz-rwz";
      }elseif($day=="Friday"){
        $videolink="https://meet.google.com/nfz-ttbh-ezf";
      }else{
        //
        $videolink="https://meet.google.com/vcd-bieh-ivu";
      }



        $booking = Booking::create($formFields);

        //login if you want user to login after filling form
        //auth()->login($user);
        //send mail
//TODO Modify mail template to include lesson_day
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
            'lesson_day' => $request->get('lesson_day'),
            'videolink'=>$videolink,
        ];
         
        Mail::to('bookings@kerithfountain.com')->send(new bookingmail($mailData));
        Mail::to($mailData['email'])->send(new bookingmail($mailData));
//dd($mailData);

      //Send SMS
      //setup twilio on md's phone
        $sid = getenv("TWILIO_SID");
        $token = getenv("TWILIO_TOKEN");
        $twilio_phone = getenv("TWILIO_PHONE");
       //uncomment for sms
       // $twilio = new Client($sid, $token);

        //uncomment for sms
        // $message = $twilio->messages
        //           ->create("+2348023238979", // to
        //                    [
        //                        "body" => 'Class on '.$request->get('lesson_day').' '.$request->get('time_schedule').'Link: '. $videolink,
        //                        "from" => $twilio_phone
        //                    ]
        //           );

//print($message->sid);
      //work on redirect message to show on home page
        return redirect('/')->with('message','Your Free class has been booked successfully.\n Check your email for further details');
    }
}
