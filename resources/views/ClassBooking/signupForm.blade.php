@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Sign Up for the class') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('home') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="parent_name" class="col-md-4 col-form-label text-md-end">{{ __('Parents Name') }}</label>

                            <div class="col-md-6">
                                <input id="parent_name" type="text" class="form-control @error('parent_name') is-invalid @enderror" name="parent_name" value="{{ old('parent_name') }}" required autocomplete="name" autofocus>

                                @error('parent_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="child_name" class="col-md-4 col-form-label text-md-end">{{ __('Childs Firstname') }}</label>

                            <div class="col-md-6">
                                <input id="child_name" type="text" class="form-control @error('child_name') is-invalid @enderror" name="child_name" value="{{ old('child_name') }}" required autocomplete="name">

                                @error('child_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Childs Age') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" name="age" id="age"  required>
                              <option value="">Select age</option>
                              
                              <option value="2 - 5" >2 - 5</option>
                              <option value="6 - 8" >6 - 8</option>
                              <option value="9 - 11" >9 - 11</option>
                              <option value="12 - 14" >12 - 14</option>
                              <option value="15+" >15 and above</option>
                            </select>
                            @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="classlevel" class="col-md-4 col-form-label text-md-end">{{ __('Class (In School)') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" name="classlevel" id="classlevel"  required>
                              <option value="">Select Class Level</option>
                              
                              <option value="Nursery/Kindergarten" >Nursery/Kindergarten</option>
                              <option value="Junior Primary" >Junior Primary</option>
                              <option value="Senior Primary" >Senior Primary</option>
                              <option value="Junior Secondary" >Junior Secondary</option>
                              <option value="Senior Secondary" >Senior Secondary</option>
                            </select>
                            @error('classlevel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="subject" class="col-md-4 col-form-label text-md-end">{{ __('SUbscription Plan') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" name="subject" id="subject"  required>
                              <option value="">Subscription Plan</option>
                              
                              <option value="Baby" >Baby Group Class</option>
                              <option value="BGC" >Basic Group Class</option>
                              <option value="JSG" >Junior Secondary Group Class</option>
                              <option value="P" >Personalised (One on One)</option>
                              
                            </select>
                            @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> 
                        
                        <div class="row mb-3">
                            <label for="lesson_day" class="col-md-4 col-form-label text-md-end">{{ __('Lesson Days') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" name="lesson_day" id="lesson_day"  required>
                              <option value="" selected>Select Day and time</option>
                              //populate option
                              
                              
                            </select>
                            
                                @error('lesson_day')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                 

                                
                            </div>
                            
                        </div> 
                        
                        <div class="row mb-3">
                            <label for="lesson_needs" class="col-md-4 col-form-label text-md-end">{{ __('Lesson Needs') }}</label>
                            <div class="col-md-6">
                               <textarea class="form-control" type="text" name = 'lesson_needs' id= 'lesson_needs'  rows="3"> 
                               
                              </textarea>
                            </div>
                        </div>


                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Make a Payment') }}
                                </button>
                            </div>
                        </div>
        
        </div>
   </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('page-script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
<script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
 

@endpush
