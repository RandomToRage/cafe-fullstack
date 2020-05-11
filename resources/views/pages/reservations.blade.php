@extends('layouts.app')


@section('content')
    <div id="waitlist-page">
<div class="content-box">
    <div class="row">
        <div class="col-md-6">

        <h1>Get on the list!</h1>
            <form>
  <div class="form-group">
    <label for="firstnameinput">First Name</label>
    <input type="text" class="form-control" name="fname" id="firstnameinput" placeholder="John">
  </div>
  <div class="form-group">
    <label for="lastnameinput">Last Name</label>
    <input type="text" class="form-control" name="lname" id="lastnameinput" placeholder="Doe">
  </div>
  <div class="form-group">
    <label for="emailinput">Email address</label>
    <input type="email" class="form-control" name="email" id="emailinput" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="phoneinput">Phone Number</label>
    <input type="text" class="form-control" name="phone" id="phoneinput" placeholder="777-777-9311">
  </div>
  <div class="form-group">
    <label for="guestsinput">Number of Guests</label>
    <select name="guests" class="form-control" id="guestsinput">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>
  </div>
  <div class="form-group">
    <label for="timeinput">Time of arrival</label>
    <select name="time" class="form-control" id="timeinput">
      <option value="4">4:00pm</option>
      <option value="5">5:00pm</option>
      <option value="6">6:00pm</option>
      <option value="7">7:00pm</option>
      <option value="8">8:00pm</option>
    </select>
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