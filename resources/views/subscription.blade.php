@extends('layouts.app')
@section('title-bar', 'Subscription')

    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/styles.css">
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                
                               
 
       
            @section('body-class',"oncontextmenu='return false' class='snippet-body'")              
            @section('content')        
                                         
                              
           
<div class="container">
    <div class="pricing__table">
        <div class="icon type-01">
            <span class="fa fa-paper-plane" aria-hidden="true">
            </span>
        </div>
        <h3 class="heading">Baby Group Class</h3>
        <h1 class="service__price">
            45.99
            <sup class="dollar__sign">$</sup>
        </h1>
        <ul class="features__list">
            <li>
                <i class="fa fa-check" aria-hidden="true">
                </i>
                Reading 
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true">
                </i>
                Literacy
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true">
                </i>
                Number Work
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                School Assignments
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                Number in Class  -  6
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                live support
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                Lessons/week - 3
            </li>
        </ul>
        <button class="order__button">
        sign up
        </button>
    </div>


    <div class="pricing__table">
        <div class="icon type-02">
            <span class="fa fa-car" aria-hidden="true">
            </span>
        </div>
        <h3 class="heading">Basic Group Class</h3>
        <h1 class="service__price">
            49.99
            <sup class="dollar__sign">$</sup>
        </h1>
        <ul class="features__list">
            <li>
                <i class="fa fa-check" aria-hidden="true">
                </i>
                English
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true">
                </i>
                Mathematics
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true">
                </i>
                Basic Science
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                School Assignments
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                Number in Class  -  6
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                live support
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                Lessons/week - 3
            </li>
        </ul>
        <a href="{{ route('register') }}">

          <button class="order__button">
            sign up
        </button>
       </a>
    </div>

    <div class="pricing__table">
        <div class="icon type-03">
            <span class="fa fa-plane" aria-hidden="true">
            </span>
        </div>
        <h3 class="heading">Junior Secondary</h3>
        <h1 class="service__price">
            59.99
            <sup class="dollar__sign">$</sup>
        </h1>
        <ul class="features__list">
            <li>
                <i class="fa fa-check" aria-hidden="true">
                </i>
                English
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true">
                </i>
                Mathematics
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true">
                </i>
                Basic Science
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                School Assignments
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                Number in Class  -  6
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                live support
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                Lessons/week - 3
            </li>
        </ul>
        <button class="order__button">
        sign up
        </button>
    </div>
    <div class="pricing__table">
        <div class="icon type-04">
            <span class="fa fa-rocket" aria-hidden="true">
            </span>
        </div>
        <h3 class="heading">Personalised</h3>
        <h1 class="service__price">
            99.99
            <sup class="dollar__sign">$</sup>
        </h1>
        <ul class="features__list">
            
            <li>
                <i class="fa fa-check" aria-hidden="true">
                </i>
                English
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true">
                </i>
                Mathematics
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true">
                </i>
                Basic Science
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                School Assignments
            </li>
            <li style="color:darkred">
                <i class="fa fa-check" aria-hidden="true"></i>
                Number in Class  -  1
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                live support
            </li>
            <li>
                <i class="fa fa-check" aria-hidden="true"></i>
                Lessons/week - 3
            </li>
        </ul>
        <button class="order__button">
        sign up
        </button>
    </div>
</div>
                            <script type='text/javascript'></script>
    @endsection