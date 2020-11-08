@extends('layouts.admin')


@section('content')
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Food Items </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Food Items</li>
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
                                <h5 class="card-header">All Food Items</h5>
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">id</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $item)
                                                <tr>
                                                <th scope="row">{{$item->id}}</th>
                                                <td>{{$item->title}}</td>
                                                <td>{{$item->price}}</td>
                                                <td>{{date('m/d/y', strtotime($item->updated_at))}}</td>
                                                <td>
                                                <a href="/admin/food-items/{{$item->id}}/edit"><i class="far fa-edit"></i></td>
                                                <td>
                                                {{-- <a href="/admin/users/{{$item->id}}/delete" onclick="if (! confirm('Are you sure you want to delete this item?')) { return false; }"><i class="far fa-trash-alt"></i> --}}
                                                
                                                <a href="#"
                                                onclick="event.preventDefault();
                                                document.getElementById('delete-item-{{$item->id}}').submit();">
                                                <i class="far fa-trash-alt"></i>
                                                </a>

                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    {{ __('Logout') }}>
                                                </a>

                                                    <form id="delete-item-{{$item->id}}" action="/admin/food-items/{{$item->id}}/delete" method="POST" style="display: none;">
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

