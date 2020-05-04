

@extends('admin.dashboard')

@section('content')
 
 


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    WELCOME TO PRICING  PAGE
                    
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
                        
                            <div class="table-responsive">
                            <form action="{{route('admin.pricing.update',$prices->id)}}" method = "post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name = "image" id = "image" value="{{$prices->image}}" class="form-control" required>
                                </div>
                                <div class="form-group">
                                <label for="heading">Heading</label>
                                <input type="text" name = "heading" id = "heading" value="{{$prices->heading}}" class="form-control" required>
                                </div>
                                <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" name = "description" id = "description" value="{{$prices->description}}" class="form-control" required>
                                </div>
                                <div class="form-group">
                                <label for="cash">cash</label>
                                <input type="text" name = "cash" id = "cash" value="{{$prices->cash}}" class="form-control" required>
                                </div>
                                 
                                <button type = "submit" class = "btn btn-success">Submit</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
@endsection