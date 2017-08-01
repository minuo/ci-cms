@extends('layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Posts
        <small>Add</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ base_url('dashboard/posts') }}">Posts</a></li>
        <li>Add</li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">

    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Add Post</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{ base_url('dashboard/posts/store') }}" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="post_img" class="col-sm-2 control-label">Blog Img</label>
                        <div class="col-sm-10">
                            <input type="file" name="post_img">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post_img_bg" class="col-sm-2 control-label">Header Img</label>
                        <div class="col-sm-10">
                            <input type="file" name="post_img_bg">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" id="" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="category" class="col-sm-2 control-label">Category</label>
                        <div class="col-sm-10">
                            <input type="text" name="category" class="form-control" id="" placeholder="Category">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tags" class="col-sm-2 control-label">Tags</label>
                        <div class="col-sm-10">
                            <input type="text" name="tags" class="form-control" id="" placeholder="Tags">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="body" class="col-sm-2 control-label">Body</label>
                        <div class="col-sm-10">
                            <textarea id="editor" name="body" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="clear" class="btn btn-default">Clear</button>
                    <button type="submit" class="btn btn-success pull-right">Add</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
        <!-- /.box -->
    </div>

</div>
@endsection

@section('page-scripts')
<script src="{{ base_url('assets/admin/plugins/ckeditor/ckeditor.js') }}"></script>
<script>
$(document).ready(function() {
    CKEDITOR.replace( 'editor',
        {
            height: "400px"
        }
    );
});
</script>
@endsection