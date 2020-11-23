@extends('layouts.app')

@section('title')
Contact - {{$settings["general"]->site_title}}
@endsection

@section('description')
Somewhere near you!
@endsection


@section('content')
    <div id="about-page">
    <div class="content-box">
    <div class="row">
        <div class="col-md-6">

        <h1>Contact Us</h1>
        <h3>Address</h3>
        <p>{{$settings["general"]->address_1}} {{$settings["general"]->address_2}},<br>
              {{$settings["general"]->city}} {{$settings["general"]->state}} {{$settings["general"]->zip}}</p>
              <h3>Phone Number</h3>
        <p><a href="{{$settings["general"]->phone_number}}">({{$settings["general"]->phone_number}}</a></p>
             </div>
                 <div class="col-md-6">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107426.51738306694!2d-97.48065981186126!3d32.71053723467727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e717792d42c59%3A0x1f5d9c9e2fa86bc1!2sAvoca%20Coffee%20Roasters!5e0!3m2!1sen!2sus!4v1606102977572!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
            </div>
        </div>
      </div>
@endsection