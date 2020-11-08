@extends('layouts.admin')


@section('content')
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">All Offer Members</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">All Offer Members</li>
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
                        <!-- basic table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">All Offer Members</h5>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Full Name</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Phone Number</th>
                                                <th scope="col">Date</th>
                                                {{-- <th scope="col">Edit</th>
                                                <th scope="col">Delete</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($members as $member)
                                                <tr>
                                                <th scope="row">{{$member->id}}</th>
                                                <td>{{$member->fname}} {{$member->lname}}</td>
                                                <td>{{$member->email}}</td>
                                                <td>{{$member->phone_number}}</td>
                                                <td>{{date('m/d/y', strtotime($member->updated_at))}}</td>
                                                <td>
                                                <a href="/admin/food-members/{{$member->id}}/edit"><i class="far fa-edit"></i></td>
                                                <td>
                                                {{-- <a href="/admin/users/{{$member->id}}/delete" onclick="if (! confirm('Are you sure you want to delete this member?')) { return false; }"><i class="far fa-trash-alt"></i> --}}
                                                
                                                <a href="#"
                                                onclick="event.preventDefault();
                                                document.getElementById('delete-member-{{$member->id}}').submit();">
                                                <i class="far fa-trash-alt"></i>
                                                </a>

                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    {{ __('Logout') }}>
                                                </a>

                                                    <form id="delete-member-{{$member->id}}" action="/admin/food-members/{{$member->id}}/delete" method="POST" style="display: none;">
                                                    @method('DELETE')
                                                        @csrf
                                                    </form>
                                                
                                                
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic table -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        
@endsection

