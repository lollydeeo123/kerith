@component('mail::message')
Title : Free Class.

<strong> Dear {{$mailData['parent_name']}} </strong>


 The details of your free class for <b>{{$mailData['child_name']}}</b> are as follows:

Subject: {{$mailData['subject']}} <br>
Child's class/level: {{$mailData['classlevel']}}<br>
Learning Needs: {{$mailData['lesson_needs']}} <br><br>

Your contact details are:
Email: {{ $mailData['email'] }} <br>
Phone: {{ $mailData['phone'] }} <br>

Click on the Free Class link below on  <b>{{$mailData['lesson_day']}} at {{$mailData['time_schedule']}}</b>. <br>

 <a  href="{{$mailData['videolink']}}">Free Class</a><br>

 Or paste {{$mailData['videolink']}} into your browser<br>

Please ensure   <b>{{ $mailData['child_name'] }} </b>   is ready 5 minutes to the time.


Thanks,<br>
{{config('app.name')}}
@endcomponent