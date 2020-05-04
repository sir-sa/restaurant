   

@extends('admin.dashboard')

@section('content')
    <!--== 8. Great Place to enjoy ==-->
    <section id="great-place-to-enjoy" class="great-place-to-enjoy">


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    WELCOME TO BEERS PAGE
                    
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
                        <a class="nav-link btn btn-info" href="{{url('admin/beer/create')}}" style="margin-left:82%">Add New service </a>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                   <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Heading</th>
                                       
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($beers as $beer)
                                            <tr>
                                                <th scope="row">{{$beer->id}}</th>
                                                <td><img class="img-responsive section-icon hidden-sm hidden-xs" src="{{$beer->image}}"></td>
                                                <td>{{$beer->heading}}</td>
                                               
                                                <td><a href="{{route('admin.beer.edit', $beer->id)}}" class = "btn btn-info">Edit</a></td>
                     
                                                <td>
                                                <form action="{{ url('admin/beer/'.$beer->id)}}" method="post">
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
         
       
    
                                
             
        </section> <!-- /#great-place-to-enjoy -->

@endsection