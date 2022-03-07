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
                            <div class="col-md-6">All Slider</div>
                            <div class="col-md-6"><a href="{{route('addslider')}}" class="btn btn-success float-right">Add New Slider</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('success_message'))
                            <div class="alert alert-success" role="alert">{{Session::get('success_message')}}</div>

                        @endif
                        @if (Session::has('delete_message'))
                            <div class="alert alert-danger" role="alert">{{Session::get('delete_message')}}</div>

                        @endif
                        <table class="table table-striped">
                            <thead>
                            
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Title1</th>
                                    <th>Title2</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $datas)
                                <tr>
                                    <td>{{$datas->id}}</td>
                                    <td><img src="{{asset('assets/images/slider/')}}/{{{$datas->image}}}" alt="" width="150px"></td>
                                    <td>{{$datas->title1}}</td>
                                    <td>{{$datas->title2}}</td>
                                    <td>
                                        <a href="{{route('editslider',$datas->id)}}">Edit</a>
                                        &nbsp;&nbsp;
                                        <a href="{{route('sliderdelete',$datas->id)}}" onclick="confirm('Are you sure, You want to detele this Slider?') || event.stopImmediatePropagation()"  style="margin-left:10px;">Delete</a>
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
</div>
@endsection