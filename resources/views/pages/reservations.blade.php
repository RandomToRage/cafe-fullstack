@extends('layouts.app')

@section('title')
Reservations - {{$settings["general"]->site_title}}
@endsection

@section('description')
Reserve a table in advance.
@endsection


@section('content')
    <div id="waitlist-page">
<div class="content-box">
    <div class="row">
        <div class="col-md-6">

        <h1>Get on the list!</h1>
            <form method="POST" action="/reservations">
            @csrf
  <div class="form-group">
    <label for="inputfname">First Name</label>
    <input id="inputfname" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname')}}" required autocomplete="fname" autofocus placeholder="John">
                         @error('fname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
  </div>
  <div class="form-group">
    <label for="inputlname">Last Name</label>
    <input id="inputlname" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname')}}" required autocomplete="lname" autofocus placeholder="Doe">
                         @error('lname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
  </div>
  <div class="form-group">
    <label for="inputemail">Email address</label>
    <input id="inputemail" type="text" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email')}}" required autocomplete="email" autofocus placeholder="email@email.com">
                         @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
  </div>
  <div class="form-group">
    <label for="inputphonenumber">Phone Number</label>
    <input id="inputphonenumber" type="tel" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number')}}" required autocomplete="phone_number" autofocus placeholder="EX:1234567890">
                         @error('phone_number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
  </div>
  <div class="form-group">
    <label for="guestsinput">Number of Guests</label>
    <select name="guests_total" class="form-control form-control-lg @error('guests_total') is-invalid @enderror" id="guestsinput">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
    @error('guests_total')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
  </div>
  <div class="form-group">
    <label for="timeinput">Time of arrival</label>
    <select name="time" class="form-control form-control-lg @error('time') is-invalid @enderror" id="timeinput">
      <option value="6">6:00am</option>
      <option value="7">7:00am</option>
      <option value="8">8:00am</option>
      <option value="9">9:00am</option>
      <option value="10">10:00am</option>
      <option value="11">11:00am</option>
      <option value="12">12:00pm</option>
      <option value="13">1:00pm</option>
      <option value="14">2:00pm</option>
      <option value="15">3:00pm</option>
      <option value="16">4:00pm</option>
      <option value="17">5:00pm</option>
      <option value="18">6:00pm</option>
      <option value="19">7:00pm</option>
      <option value="20">8:00pm</option>
    </select>
    @error('time')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                         @enderror
  </div>
  <div class="form-group">
      <button type="submit" class="btn btn-primary mb-2">Confirm</button>
  </div>
</form>
             </div>
             <div class="col-md-6">
                <p>Please Note: This is not a reservation.  You will be added to the current wait list.  You may have a short wait once you arrive while we prepare your table.
                </p>
             </div>
            </div>
        </div>
      </div>
@endsection