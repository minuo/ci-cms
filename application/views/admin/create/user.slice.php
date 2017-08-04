@extends('layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Users
        <small>Add</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('ci-admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ base_url('ci-admin/users') }}"><i class="fa fa-user"></i> Users</a></li>
        <li>Add</li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">
    <!-- form start -->
    <form class="form-horizontal" action="{{ base_url('ci-admin/users/store') }}" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Add User</h3>
                </div>
                <!-- /.box-header -->            
                <div class="box-body">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="form-group">
                            <label for="username" class="control-label">Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="fullname" class="control-label">Fullname</label>
                            <input type="text" name="fullname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="text" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="confirm_pass" class="control-label">Confirm Password</label>
                            <input type="text" name="confirm_pass" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->                       
            </div>
            <!-- /.box -->
        </div>

        <div class="col-md-4">
            <div class="col-md-12 no-padding">
                <!-- Horizontal Form -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Settings</h3>
                    </div>
                    <!-- /.box-header -->            
                    <div class="box-body">

                        <div class="col-sm-12">
                            <label for="user_status" class="control-label">Status</label>
                            <select name="user_status" class="form-control">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>

                        <div class="col-sm-12">
                            @if(count($roles) > 0)
                                <label for="user_type" class="control-label">User Role</label>               
                                <select name="user_type" class="form-control">
                                    @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->type_name }}</option>
                                    @endforeach
                                </select>
                            @else
                                <div class="pad margin no-print">
                                    <div class="callout callout-warning" style="margin-bottom: 0!important;">
                                        <h4><i class="fa fa-info-circle"></i> Reminder:</h4>
                                        You have not added any user roles yet, create a new one <a href="{{ base_url('ci-admin/roles/create') }}">here</a>
                                    </div>
                                </div>
                            @endif
                        </div>   
                
                    </div>
                    <div class="box-footer text-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Add
                        </button>
                    </div>
                </div>
            </div>
        
            <div class="col-md-12 no-padding">
                <!-- Horizontal Form -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Image</h3>
                    </div>
                    <!-- /.box-header -->
                    
                    <div class="box-body">
                        <div class="form-group">                        
                            <div class="col-sm-12">
                                <label for="user_img">User Image</label>
                                <input type="file" name="user_img">
                            </div>
                        </div>
                    </div>

                </div>
            </div>   
        </div>     

    </form>

</div>
@endsection