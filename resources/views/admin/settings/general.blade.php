@extends('layouts.admin')


@section('content')
            <div class="container-fluid  dashboard-content">
                {{-- <div class="dashboard-wrapper"> --}}
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit General Settings</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit General Settings</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic form -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Edit General Settings</h5>
                                <div class="card-body">
                                    <form method="POST" action="/admin/settings/general">
                                     @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="inputtitle">Business Name</label>
                                            <input id="inputtitle" type="text" class="form-control form-control-lg @error('site_title') is-invalid @enderror" name="site_title" value="{{ old('site_title', $general_setting->site_title) }}" required autocomplete="site_title" autofocus placeholder="Add site title">

                                                                @error('site_title')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                </div>
                                                <div class="form-group">
                                                                
                                        </div> 
                                        <div class="form-group">
                                            <label for="inputlogo">Website Logo</label>
                                            <input id="inputlogo" type="text" class="form-control form-control-lg @error('logo_image_url') is-invalid @enderror" name="logo_image_url" value="{{ old('logo_image_url', $general_setting->logo_image_url) }}" required autocomplete="logo_image_url" autofocus placeholder="Add site logo">

                                                                @error('logo_image_url')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                </div>
                                                <div class="form-group">
                                                                
                                        </div>
                                        <div class="form-group">
                                            <label for="inputaddress1">Street Address</label>
                                            <input id="inputaddress1" type="text" class="form-control form-control-lg @error('address_1') is-invalid @enderror" name="address_1" value="{{ old('address_1', $general_setting->address_1) }}" required autocomplete="address_1" autofocus placeholder="Add street address">

                                                                @error('address_1')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                </div>
                                                <div class="form-group">
                                            <label for="inputaddress2">Address 2</label>
                                            <input id="inputaddress2" type="text" class="form-control form-control-lg @error('address_2') is-invalid @enderror" name="address_2" value="{{ old('address_2', $general_setting->address_2) }}"  autocomplete="address_2" autofocus placeholder="">

                                                                @error('address_2')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                </div>
                                                <div class="form-group">
                                            <label for="inputcity">City</label>
                                            <input id="inputcity" type="text" class="form-control form-control-lg @error('city') is-invalid @enderror" name="city" value="{{ old('city', $general_setting->city) }}" required autocomplete="city" autofocus placeholder="Add City">

                                                                @error('city')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                </div>
                                                <div class="form-group">
                                            <label for="inputstate">State</label>
                                            <input id="inputstate" type="text" class="form-control form-control-lg @error('state') is-invalid @enderror" name="state" value="{{ old('state', $general_setting->state) }}" required autocomplete="state" autofocus placeholder="Add State">

                                                                @error('state')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                </div>
                                                <div class="form-group">
                                            <label for="inputzip">Zip Code</label>
                                            <input id="inputzip" type="text" class="form-control form-control-lg @error('zip') is-invalid @enderror" name="zip" value="{{ old('zip', $general_setting->zip) }}" required autocomplete="zip" autofocus placeholder="Add Zip code">

                                                                @error('zip')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                </div>
                                                <div class="form-group">
                                            <label for="inputphone">Phone Number</label>
                                            <input id="inputphone" type="text" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $general_setting->phone_number) }}" required autocomplete="phone_number" autofocus placeholder="Add Phone Number">

                                                                @error('phone_number')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                </div>
                                                <div class="form-group">
                                                                
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                            </div>
                                            <div class="col-sm-6 pl-0">
                                                <p class="text-right">
                                                    <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form -->
                        <!-- ============================================================== -->
                    
           
        </div>
            </div>
                        <!-- ============================================================== -->
                        <!-- end basic table -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
    </div>                    
@endsection


