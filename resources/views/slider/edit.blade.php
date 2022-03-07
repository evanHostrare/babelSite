@extends('layouts.backend')
@section('content')
<div>
    <style>
        nav svg{
            height:20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">Update Slider</div>
                            <div class="col-md-6"><a href="{{route('slider')}}" class="btn btn-success pull-right">All Slider</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                           <div class="alert alert-success" role="text">{{Session::get('message')}}</div>
                        @endif
                        <form action="{{route('updateslider',$data->id)}}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" >
                                <label for="" class="col-md-4 control-label">Image</label>
                                <div class="col-md-4">
                                <br>
                                <img src="{{asset('assets/images/slider')}}/{{$data->image}}" alt="" width="150px">
                                <br>
                                    <input type="file" placeholder="Category Name" name="image" class="form-control input-md">
                                    @error('image')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label">Title 1</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Title  1" value="{{$data->title1}}" class="form-control input-md" name="title1">
                                    @error('title1')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group" >
                                <label for="" class="col-md-4 control-label">Title 2</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Title  2" value="{{$data->title2}}" class="form-control input-md" name="title2">
                                    @error('title2')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection