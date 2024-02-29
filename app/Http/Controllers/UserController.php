<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Booking;
use App\Mail\booking as bookingmail;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Mail;



class UserController extends Controller
{
    //Show free booking form
    public function create(){
        return view('ClassBooking.freeClassForm');
    }


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
        //create booking
        // $booking = new Booking;
        // $booking->parent_name = $request->parent_name;
        // $booking->child_name = $request->child_name;
        // $booking->age = $request->age;
        // $booking->email = $request->email;
        // $booking->phone = $request->phone;
        // $booking->classlevel = $request->classlevel;
        // $booking->subject = $request->subject;
        // $booking->time_schedule = $request->time_schedule;
        // $booking->lesson_needs = $request->lesson_needs;
        // $booking->save();



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
        ];
         
       // Mail::to('bookings@kerithfountain.com')->send(new bookingmail($mailData));
       // Mail::to($mailData['email'])->send(new bookingmail($mailData));
//dd($mailData);
        
      
        return redirect('/')->with('message','Booked a free class; Check email for further details');
    }
}
