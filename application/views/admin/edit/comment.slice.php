@extends('layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Comments
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ base_url('dashboard/comments') }}">Comments</a></li>
        <li>Edit - {{ $comment->id }}</li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">

    <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Comment</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="{{ base_url('dashboard/comments/' . $comment->id . '/update') }}" method="post" enctype="multipart/form-data">
                <div class="box-body">                    
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control" value="{{ $comment->name }}" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post_id" class="col-sm-2 control-label">Post ID</label>
                        <div class="col-sm-10">
                            <input type="number" name="post_id" class="form-control" value="{{ $comment->post_id }}" placeholder="Category">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comment" class="col-sm-2 control-label">Comment</label>
                        <div class="col-sm-10">
                            <textarea id="editor" name="comment" class="form-control">{{ $comment->comment }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="body" class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-10">
                            <select name="pending" class="form-control">
                                <option>Select Status...</option>
                                <option value="1" @if($comment->pending == '1') @php echo 'selected' @endphp @endif>Pending</option>
                                <option value="0" @if($comment->pending == '0') @php echo 'selected' @endphp @endif>Approved</option>
                            </select>
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="clear" class="btn btn-default">Clear</button>
                    <button type="submit" class="btn btn-success pull-right">Update</button>
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