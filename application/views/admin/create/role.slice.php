@extends('layouts.app')

@section('page-styles')
<link href="{{ base_url('assets/admin/plugins/iCheck/all.css') }}" rel="stylesheet"/>
@endsection

@section('breadcrumb')
<section class="content-header">
    <h1>
        Roles
        <small>Add</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('ci-admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ base_url('ci-admin/roles') }}"><i class="fa fa-ban"></i> Roles</a></li>
        <li>Add</li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">
    <!-- form start -->
    <form action="{{ base_url('ci-admin/roles/store') }}" method="post" enctype="multipart/form-data">
        <div class="col-md-8">            
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Role</h3>
                </div>
                <!-- /.box-header -->            
                <div class="box-body">

                    <div class="col-md-6 col-md-offset-3">
                        <div class="form-group">
                            <label for="type_name" class="control-label">Role Name</label>                       
                            <input type="text" name="type_name" class="form-control" id="" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="type_description" class="control-label">Role Description</label>                       
                            <input type="text" name="type_description" class="form-control" id="" placeholder="Short Description">
                        </div>

                        <!-- User types permissions -->
                        <div class="form-group">                            
                            <label>
                                <input name="create_usertypes" type="checkbox" value="1" class="flat-red">
                                Create Roles
                            </label>
                            <small> (Add new user roles and assign permissions)</small>
                        </div> 
                        <div class="form-group">                            
                            <label>
                                <input name="delete_usertypes" type="checkbox" value="1" class="flat-red">
                                Delete Roles
                            </label>
                            <small> (Delete existing roles entirely)</small>
                        </div>


                        <!-- User permissions -->
                        <div class="form-group">                            
                            <label>
                                <input name="create_users" type="checkbox" value="1" class="flat-red">
                                Create Users
                            </label>
                            <small> (Add new users and assign roles)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input name="edit_users" type="checkbox" value="1" class="flat-red">
                                Edit Users
                            </label>
                            <small> (Edit existing users, cannot assign roles)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input name="delete_users" type="checkbox" value="1" class="flat-red">
                                Delete Users
                            </label>
                            <small> (Delete existing users entirely)</small>
                        </div>

                        <!-- posts permissions -->
                        <div class="form-group">                            
                            <label>
                                <input name="create_posts" type="checkbox" value="1" class="flat-red">
                                Create Posts
                            </label>
                            <small> (Add new posts)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input name="edit_posts" type="checkbox" value="1" class="flat-red">
                                Edit Posts
                            </label>
                            <small> (Edit existing posts, cannot create new posts)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input name="delete_posts" type="checkbox" value="1" class="flat-red">
                                Delete Posts
                            </label>
                            <small> (Delete existing posts entirely)</small>
                        </div>

                        <!-- upload file permissions -->
                        <div class="form-group">                            
                            <label>
                                <input name="upload_files" type="checkbox" value="1" class="flat-red">
                                Upload Media
                            </label>
                            <small> (Add images and files to media library)</small>
                        </div>

                        <!-- pages permissions -->
                        <div class="form-group">                            
                            <label>
                                <input name="create_pages" type="checkbox" value="1" class="flat-red">
                                Create Pages
                            </label>
                            <small> (Add new pages)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input name="edit_pages" type="checkbox" value="1" class="flat-red">
                                Edit Pages
                            </label>
                            <small> (Edit existing pages, cannot create new pages)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input name="delete_pages" type="checkbox" value="1" class="flat-red">
                                Delete Pages
                            </label>
                            <small> (Delete existing pages entirely)</small>
                        </div>

                        <!-- misc permissions -->
                        <div class="form-group">                            
                            <label>
                                <input name="manage_categories" type="checkbox" value="1" class="flat-red">
                                Manage Categories
                            </label>
                            <small> (Add, edit, and delete categories)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input name="moderate_comments" type="checkbox" value="1" class="flat-red">
                                Moderate Comments
                            </label>
                            <small> (Edit, and approve comments)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input name="can_comment" type="checkbox" value="1" class="flat-red">
                                Can comment
                            </label>
                            <small> (Ability to comment on posts)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input name="manage_site_options" type="checkbox" value="1" class="flat-red">
                                Manage Site Options
                            </label>
                            <small> (Can edit site functionality)</small>
                        </div>


                    </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Add Role
                    </button>
                </div>                      
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col-md-8 -->
    </form>
</div>
@endsection

@section('page-scripts')
<script src="{{ base_url('assets/admin/plugins/iCheck/icheck.min.js') }}"></script>
<script>
//Flat red color scheme for iCheck
$(document).ready(function() {
    $('input[type="checkbox" value="1"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-red',
      radioClass: 'iradio_flat-red'
    });
});
</script>
@endsection