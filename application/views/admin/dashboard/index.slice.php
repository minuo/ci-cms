@extends('layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Dashboard
        <small>Overview</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-pencil-square-o"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Posts</span>
            <span class="info-box-number">{{ count($posts) }}</span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-comments"></i></span>

        <div class="info-box-content">
            <span class="info-box-text">Comments</span>
            <span class="info-box-number">{{ count($comments) }}</span>
        </div>
        <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>    
</div>
<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-6 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
        <div class="inner">
            <h3></h3>

            <p>Pending Comments</p>
        </div>
        <div class="icon">
            <i class="fa fa-commenting"></i>
        </div>
        <a href="{{ base_url('dashboard/comments') }}" class="small-box-footer">
            View <i class="fa fa-arrow-circle-right"></i>
        </a>
        </div>
    </div>
    <!-- ./col -->
</div>
<div class="row">

    <div class="col-lg-6 col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Quick Actions</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-lg-6 col-xs-6">
                    <!-- small box -->
                    <a href="{{ base_url('dashboard/posts/add') }}">
                        <div class="small-box bg-red">
                            <div class="inner">
                                <h5>Create Post</h5>
                            </div>
                            <div class="icon" style="top: -50px">
                                <i class="fa fa-pencil" style="font-size: 0.5em"></i>
                            </div>                                                   
                        </div>
                        <div class="small-box-footer">
                           
                        </div> 
                    </a>
                </div>
                <!-- ./col -->                
            </div>
            <div class="box-footer">

            </div>
        </div>
    </div>
</div>
@endsection