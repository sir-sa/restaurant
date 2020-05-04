

@extends('admin.dashboard')

@section('content')
 
 


    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    WELCOME TO DISHES PAGE
                    
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
                            <form action="{{route('admin.dish.update')}}" method = "post" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name = "image" id = "image" value="{{$dishes->image}}" class="form-control" required>
                                </div>
                                <div class="form-group">
                                <label for="list1">List1</label>
                                <input type="text" name = "list1" id = "list1" value="{{$dishes->list1}}" class="form-control" required>
                                </div>
                                <div class="form-group">
                                <label for="list2">List2</label>
                                <input type="text" name = "list2" id = "list2" value="{{$dishes->list2}}"  class="form-control" required>
                                </div>
                                <div class="form-group">
                                <label for="list3">List3</label>
                                <input type="text" name = "list3" id = "list3" value="{{$dishes->list3}}"  class="form-control" required>
                                </div>
                                <div class="form-group">
                                <label for="list4">List4</label>
                                <input type="text" name = "list4" id = "list4" value="{{$dishes->list4}}"  class="form-control" required>
                                </div>
                                <div class="form-group">
                                <label for="list5">List5</label>
                                <input type="text" name = "list5" id = "list5" value="{{$dishes->list5}}"  class="form-control" required>
                                </div>
                                <div class="form-group">
                                <label for="list6">List6</label>
                                <input type="text" name = "list6" id = "list6" value="{{$dishes->list6}}"  class="form-control" required>
                                </div>
                                <div class="form-group">
                                <label for="list7">List7</label>
                                <input type="text" name = "list7" id = "list7" value="{{$dishes->list7}}"  class="form-control" required>
                                </div>
                                <div class="form-group">
                                <label for="list8">List8</label>
                                <input type="text" name = "list8" id = "list8" value="{{$dishes->list8}}"  class="form-control" required>
                                </div>
                                <div class="form-group">
                                <label for="list9">List9</label>
                                <input type="text" name = "list9" id = "list9" value="{{$dishes->list9}}"  class="form-control" required>
                                </div>
                                <div class="form-group">
                                <label for="list10">List10</label>
                                <input type="text" name = "list10" id = "list10" value="{{$dishes->list10}}"  class="form-control" required>
                                </div>
                                <div class="form-group">
                                <label for="list11">List11</label>
                                <input type="text" name = "list11" id = "list11" value="{{$dishes->list11}}"  class="form-control" required>
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