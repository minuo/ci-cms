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
    <form action="{{ base_url('ci-admin/roles/' . $role->usertype_id . '/update') }}" method="post" enctype="multipart/form-data">
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
                            <input type="text" name="type_name" class="form-control" value="{{ $role->type_name }}">
                        </div>
                        <div class="form-group">
                            <label for="type_description" class="control-label">Role Description</label>                       
                            <input type="text" name="type_description" class="form-control" value="{{ $role->type_description }}">
                        </div>

                        <!-- User types permissions -->
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='create_usertypes'>
                                <input name="create_usertypes" type="checkbox" value="1" class="flat-red" @php if($role->create_usertypes == 1): echo 'checked'; endif; @endphp>
                                Create Roles
                            </label>
                            <small> (Add new user roles and assign permissions)</small>
                        </div> 
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='delete_usertypes'>
                                <input name="delete_usertypes" type="checkbox" value="1" class="flat-red" @php if($role->delete_usertypes == 1): echo 'checked'; endif; @endphp>
                                Delete Roles
                            </label>
                            <small> (Delete existing roles entirely)</small>
                        </div>


                        <!-- User permissions -->
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='create_users'>
                                <input name="create_users" type="checkbox" value="1" class="flat-red" @php if($role->create_users == 1): echo 'checked'; endif; @endphp>
                                Create Users
                            </label>
                            <small> (Add new users and assign roles)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='edit_users'>
                                <input name="edit_users" type="checkbox" value="1" class="flat-red" @php if($role->edit_users == 1): echo 'checked'; endif; @endphp>
                                Edit Users
                            </label>
                            <small> (Edit existing users, cannot assign roles)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='delete_users'>
                                <input name="delete_users" type="checkbox" value="1" class="flat-red" @php if($role->delete_users == 1): echo 'checked'; endif; @endphp>
                                Delete Users
                            </label>
                            <small> (Delete existing users entirely)</small>
                        </div>

                        <!-- posts permissions -->
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='create_posts'>
                                <input name="create_posts" type="checkbox" value="1" class="flat-red" @php if($role->create_posts == 1): echo 'checked'; endif; @endphp>
                                Create Posts
                            </label>
                            <small> (Add new posts)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='edit_posts'>
                                <input name="edit_posts" type="checkbox" value="1" class="flat-red" @php if($role->edit_posts == 1): echo 'checked'; endif; @endphp>
                                Edit Posts
                            </label>
                            <small> (Edit existing posts, cannot create new posts)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='delete_posts'>
                                <input name="delete_posts" type="checkbox" value="1" class="flat-red" @php if($role->delete_posts == 1): echo 'checked'; endif; @endphp>
                                Delete Posts
                            </label>
                            <small> (Delete existing posts entirely)</small>
                        </div>

                        <!-- upload file permissions -->
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='upload_files'>
                                <input name="upload_files" type="checkbox" value="1" class="flat-red" @php if($role->upload_files == 1): echo 'checked'; endif; @endphp>
                                Upload Media
                            </label>
                            <small> (Add images and files to media library)</small>
                        </div>

                        <!-- pages permissions -->
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='create_pages'>
                                <input name="create_pages" type="checkbox" value="1" class="flat-red" @php if($role->create_pages == 1): echo 'checked'; endif; @endphp>
                                Create Pages
                            </label>
                            <small> (Add new pages)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='edit_pages'>
                                <input name="edit_pages" type="checkbox" value="1" class="flat-red" @php if($role->edit_pages == 1): echo 'checked'; endif; @endphp>
                                Edit Pages
                            </label>
                            <small> (Edit existing pages, cannot create new pages)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='delete_pages'>
                                <input name="delete_pages" type="checkbox" value="1" class="flat-red" @php if($role->delete_pages == 1): echo 'checked'; endif; @endphp>
                                Delete Pages
                            </label>
                            <small> (Delete existing pages entirely)</small>
                        </div>

                        <!-- misc permissions -->
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='manage_categories'>
                                <input name="manage_categories" type="checkbox" value="1" class="flat-red" @php if($role->manage_categories == 1): echo 'checked'; endif; @endphp>
                                Manage Categories
                            </label>
                            <small> (Add, edit, and delete categories)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='moderate_comments'>
                                <input name="moderate_comments" type="checkbox" value="1" class="flat-red" @php if($role->moderate_comments == 1): echo 'checked'; endif; @endphp>
                                Moderate Comments
                            </label>
                            <small> (Edit, and approve comments)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='can_comment'>
                                <input name="can_comment" type="checkbox" value="1" class="flat-red" @php if($role->can_comment == 1): echo 'checked'; endif; @endphp>
                                Can comment
                            </label>
                            <small> (Ability to comment on posts)</small>
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input type='hidden' value='0' name='manage_site_options'>
                                <input name="manage_site_options" type="checkbox" value="1" class="flat-red" @php if($role->manage_site_options == 1): echo 'checked'; endif; @endphp>
                                Manage Site Options
                            </label>
                            <small> (Can edit site functionality)</small>
                        </div>


                    </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer text-right">
                    <a href="{{ base_url('ci-admin/roles') }}" class="btn btn-default"> Cancel</a>
                    <a href="{{ base_url('ci-admin/roles/' . $role->usertype_id . '/delete') }}" class="btn btn-danger"> Delete Role</a>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-plus"></i> Update Role
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
    $('input[type="checkbox"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-red',
      radioClass: 'iradio_flat-red'
    });
});
</script>
@endsection