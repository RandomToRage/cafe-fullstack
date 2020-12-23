@extends('layouts.app')

@section('title')
Thank you - {{$settings["general"]->site_title}}
@endsection

@section('description')
Thank you for signing up!
@endsection


@section('content')
    <div id="offers-page">
<div class="content-box">
    <div class="row">
        <div class="col-md-8 offset-md-2 thank-you">

        <h1>Thank you!</h1>
        <p>We will email you a confirmation.</p>
            
        </div>
            </div>
        </div>
      </div>
@endsection