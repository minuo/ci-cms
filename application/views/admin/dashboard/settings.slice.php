@extends('layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Settings
        <small>All</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Settings</li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">
    <!-- form start -->
    <form action="{{ base_url('ci-admin/settings/update') }}" method="post" enctype="multipart/form-data">
        <div class="col-md-8">            
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">General Settings</h3>
                </div>
                <!-- /.box-header -->            
                <div class="box-body">

                    <div class="col-md-6 col-md-offset-3">

                    </div>

                </div>            
            </div>        
        </div>
    </div>
</div>
@endsection