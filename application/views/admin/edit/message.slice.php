@extends('layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Messages
        <small>View</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ base_url('dashboard/messages') }}">Messages</a></li>
        <li>View - {{ $message->subject }}</li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">

    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">View Message</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{ base_url('dashboard/messages/' . $message->id . '/delete') }}" method="post" enctype="multipart/form-data">
                <div class="box-body">                    
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <p>{{ $message->name }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <p>{{ $message->email }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="col-sm-2 control-label">Subject</label>
                        <div class="col-sm-10">
                            <p>{{ $message->subject }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">message</label>
                        <div class="col-sm-10">
                            <p>{{ $message->message }}</p>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <a href="{{ base_url('dashboard/messages') }}" class="btn btn-default pull-left">Back</a>
                    <button type="submit" class="btn btn-danger pull-right">Delete</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
        <!-- /.box -->
    </div>

</div>
@endsection