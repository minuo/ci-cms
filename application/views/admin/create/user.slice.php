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
                        <h3 class="box-title">Roles</h3>
                    </div>
                    <!-- /.box-header -->            
                    <div class="box-body">
                        
                        <label for="user_type" class="control-label">User Role</label>               
                        <select name="user_type" class="form-control">
                            
                        </select>               
                
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