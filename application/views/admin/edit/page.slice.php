@extends('layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Pages
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('ci-admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ base_url('ci-admin/pages') }}"><i class="fa fa-file"></i> Pages</a></li>
        <li>Edit - {{ $page->post_title }}</li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">
    <!-- form start -->
    <form class="form-horizontal" action="{{ base_url('ci-admin/pages/' . $page->id . '/update') }}" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <!-- Horizontal Form -->
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Page</h3>
                </div>
                <!-- /.box-header -->            
                <div class="box-body">
                    <input type="hidden" name="post_type" value="page">
                    <input type="hidden" name="post_category" value="0">
                    <div class="form-group">
                        <label for="post_title" class="col-sm-1 control-label">Title</label>
                        <div class="col-sm-11">
                            <input type="text" name="post_title" class="form-control" placeholder="Title" value="{{ $page->post_title }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post_body" class="col-sm-1 control-label">Body</label>
                        <div class="col-sm-11">
                            <textarea id="editor" name="post_body" class="form-control">{{ $page->post_body }}</textarea>
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
                        <h3 class="box-title">Add Page</h3>
                    </div>
                    <!-- /.box-header -->            
                    <div class="box-body">
                        
                        <label for="post_status" class="control-label">Page Status</label>               
                        <select name="post_status" class="form-control">
                            <option value="draft" @php if($page->post_status == 'draft' ): echo 'selected'; endif; @endphp>Draft</option>
                            <option value="pending" @php if($page->post_status == 'pending' ): echo 'selected'; endif; @endphp>Pending</option>
                            <option value="published" @php if($page->post_status == 'published' ): echo 'selected'; endif; @endphp>Published</option>
                        </select>               
                
                    </div>
                    <div class="box-footer text-right">
                        <a href="{{ base_url('ci-admin/pages') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-refresh"></i> Update
                        </button>
                    </div>
                </div>
            </div>
        
            <div class="col-md-12 no-padding">
                <!-- Horizontal Form -->
                <div class="box box-danger">
                    <div class="box-header with-border">
                        <h3 class="box-title">Featured Image</h3>
                    </div>
                    <!-- /.box-header -->
                    
                    <div class="box-body">
                        <div class="form-group">                        
                            <div class="col-sm-12">
                                <label for="featured_img">Featured Image</label>
                                <input type="file" name="featured_img">
                            </div>
                        </div>
                    </div>

                </div>
            </div>   
        </div>     

    </form>

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