@extends('layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Works
        <small>Add</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ base_url('dashboard/works') }}">Works</a></li>
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
                <h3 class="box-title">Add Work</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{ base_url('dashboard/works/store') }}" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="work_img" class="col-sm-2 control-label">Img</label>
                        <div class="col-sm-10">
                            <input type="file" name="work_img">
                        </div>
                    </div>                    
                    <div class="form-group">
                        <label for="title" class="col-sm-2 control-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="heading" class="col-sm-2 control-label">Heading</label>
                        <div class="col-sm-10">
                            <input type="text" name="heading" class="form-control" placeholder="Heading">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="type" class="col-sm-2 control-label">Type</label>
                        <div class="col-sm-10">
                            <input type="text" name="type" class="form-control" placeholder="Type">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="href" class="col-sm-2 control-label">Link</label>
                        <div class="col-sm-10">
                            <input type="text" name="href" class="form-control" placeholder="Link">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="client" class="col-sm-2 control-label">Client</label>
                        <div class="col-sm-10">
                            <input type="text" name="client" class="form-control" placeholder="Client">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="date" class="col-sm-2 control-label">Date</label>
                        <div class="col-sm-10">
                            <input type="date" name="date" class="form-control" placeholder="Date">
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