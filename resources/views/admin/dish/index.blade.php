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
                        <a class="nav-link btn btn-info" href="{{url('admin/dish/create')}}" style="margin-left:82%">Add New service </a>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>list1</th>
                                        <th>list2</th>
                                        <th>list3</th>
                                        <th>list4</th>
                                        <th>list5</th>
                                        <th>list6</th>
                                        <th>list7</th>
                                        <th>list8</th>
                                        <th>list9</th>
                                        <th>list10</th>
                                        <th>list11</th>
                                        <th>Action</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dishes as $dish)
                                            <tr>
                                                <th scope="row">{{$dish->id}}</th>
                                                <td><img src="{{$dish->image}}" alt="img" class="img-fluid"></td>
                                                <td>{{$dish->list1}}</td>
                                                <td>{{$dish->list2}}</td>
                                                <td>{{$dish->list3}}</td>
                                                <td>{{$dish->list4}}</td>
                                                <td>{{$dish->list5}}</td>
                                                <td>{{$dish->list6}}</td>
                                                <td>{{$dish->list7}}</td>
                                                <td>{{$dish->list8}}</td>
                                                <td>{{$dish->list9}}</td>
                                                <td>{{$dish->list10}}</td>
                                                <td>{{$dish->list11}}</td>
                                                <td><a href="{{route('admin.dish.edit', $dish->id)}}" class = "btn btn-info">Edit</a></td>
                     
                                                <td>
                                                <form action="{{ url('admin/dish/'.$dish->id)}}" method="post">
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
 