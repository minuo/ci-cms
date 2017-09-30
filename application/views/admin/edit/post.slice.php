@extends('admin.layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Posts
        <small>Edit</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('ci-admin') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{ base_url('ci-admin/posts') }}"><i class="fa fa-pencil-square-o"></i> Posts</a></li>
        <li>Edit - {{ $post->post_title }}</li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">
    <!-- form start -->
    <form class="form-horizontal" action="{{ base_url('ci-admin/posts/' . $post->id . '/update') }}" method="post" enctype="multipart/form-data">
        <div class="col-md-8">
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Post</h3>
                </div>
                <!-- /.box-header -->            
                <div class="box-body">
                    <input type="hidden" name="post_type" value="post">
                    <div class="form-group">
                        <label for="post_title" class="col-sm-1 control-label">Title</label>
                        <div class="col-sm-11">
                            <input type="text" name="post_title" class="form-control" value="{{ $post->post_title }}" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="post_body" class="col-sm-1 control-label">Body</label>
                        <div class="col-sm-11">
                            <textarea id="editor" name="post_body" class="form-control">{{ $post->post_body }}</textarea>
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
                        <h3 class="box-title">Edit Post</h3>
                    </div>
                    <!-- /.box-header -->            
                    <div class="box-body">
                  
                        @if(count($categories) > 0)
                            <label>Post Category</label>
                            <select name="post_category" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @php if($post->post_category == $category->id): echo 'selected'; endif; @endphp>{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        @else
                            <div class="callout callout-warning" style="margin-bottom: 0!important;">
                                <h4><i class="fa fa-info-circle"></i> Warning:</h4>
                                You cannot create a post without a category, make a new one <a href="{{ base_url('ci-admin/categories') }}">here</a>
                            </div>  
                        @endif
    
                        <label for="post_status" class="control-label">Post Status</label>               
                        <select name="post_status" class="form-control">
                            <option value="draft" @php if($post->post_status == 'draft'): echo 'selected'; endif; @endphp>Draft</option>
                            <option value="pending" @php if($post->post_status == 'pending'): echo 'selected'; endif; @endphp>Pending</option>
                            @if($this->session->userdata('publish_posts') || $post->post_status == 'published')
                                <option value="published" @php if($post->post_status == 'published'): echo 'selected'; endif; @endphp>Published</option>
                            @endif
                        </select>
                               
                
                    </div>
                    <div class="box-footer text-right">
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
                                @if(file_exists('./uploads/' . $post->guid . '.jpg'))
                                    <img src="{{ base_url('uploads/' . $post->guid . '.jpg') }}" class="img-responsive" width="100%" height="100%" />
                                    <div class="clear-25"></div>                                
                                @else
                                    <label for="featured_img">Featured Image</label>
                                @endif
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