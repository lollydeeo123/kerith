@component('mail::message')
Title : Free Class.

<strong> Dear {{$mailData['parent_name']}} </strong>


 The details of your free class for <b>{{$mailData['child_name']}}</b> are as follows:

Time: <b>{{$mailData['time_schedule']}}</b><br>
Subject: {{$mailData['subject']}} <br>
Child's class/level: {{$mailData['classlevel']}}<br>
Learning Needs: {{$mailData['lesson_needs']}} <br><br>

Your contact details are:
Email: {{ $mailData['email'] }} <br>
Phone: {{ $mailData['phone'] }} <br>

The link for the class will be sent to you 24hrs before the lesson. 
Please ensure   <b>{{ $mailData['child_name'] }} </b>   is ready 5 minutes to the time.


Thanks,<br>
{{config('app.name')}}
@endcomponent