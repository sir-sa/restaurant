@extends('admin.dashboard')

@section('content')
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    WELCOME TO ABOUT PAGE
                    
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
                        <a class="nav-link btn btn-info" href="{{url('admin/about/create')}}" style="margin-left:82%">Add New service </a>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Heading</th>
                                        <th>Description</th>
                                        <th>Text</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($abouts as $about)
                                            <tr>
                                                <th scope="row">{{$about->id}}</th>
                                                <td><img src="{{$about->image}}" alt="img" class="img-fluid"></td>
                                                <td>{{$about->heading}}</td>
                                                <td>{{$about->description}}</td>
                                                <td>{{$about->text}}</td>
                                                <td><a href="{{route('admin.about.edit', $about->id)}}" class = "btn btn-info">Edit</a></td>
                     
                                                <td>
                                                <form action="{{ url('admin/about/'.$about->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                                </form>
                                            </td>  
                                           
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
 