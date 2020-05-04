@extends('admin.dashboard')

@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    WELCOME TO PRICING PAGE
                    
                </h2>
            </div>
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BASIC TABLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">expertise</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <a class="nav-link btn btn-info" href="{{url('admin/pricing/create')}}" style="margin-left:82%">Add New service </a>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Heading</th>
                                        <th>Description</th>
                                        <th>Cash</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($prices as $price)
                                            <tr>
                                                <th scope="row">{{$price->id}}</th>
                                                <td><img src="{{$price->image}}" class="img-responsive" alt="Food" ></td>
                                                <td>{{$price->heading}}</td>
                                                <td>{{$price->description}}</td>
                                                <td>{{$price->cash}}</td>
                                                <td><a href="{{route('admin.pricing.edit', $price->id)}}" class = "btn btn-info">Edit</a></td>
                     
                                                <td>
                                                <form action="{{ url('admin/pricing/'.$price->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </td>  
                                           </div>
                                            </tr>
                                        @endforeach                          
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
@endsection 
 