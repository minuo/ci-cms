@extends('admin.layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Settings
        <small>All</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Settings</li>
    </ol>
</section>
@endsection

@section('content')
<div class="row">
    <!-- form start -->
    <form action="{{ base_url('ci-admin/settings/update') }}" method="post" enctype="multipart/form-data">
        <div class="col-md-8">            
            <div class="box box-danger">
                <div class="box-header with-border">
                    <h3 class="box-title">General Settings</h3>
                </div>
                <!-- /.box-header -->            
                <div class="box-body">

                    <div class="col-md-6 col-md-offset-3">

                        @if(count($pages) > 0)
                            <div class="form-group">
                                <input type="hidden" name="setting_name[]" value="home_page" />
                                <label for="home_page" class="control-label">Home Page</label>
                                <select name="setting_value[]" class="form-control">
                                    @foreach($pages as $page)
                                        <option value="{{ $page->id }}" @php if($settings['home_page']->setting_value == $page->id): echo 'selected'; endif; @endphp>{{ $page->post_title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="setting_name[]" value="posts_page" />
                                <label for="post_page" class="control-label">Posts Page</label>
                                <select name="setting_value[]" class="form-control">
                                    @foreach($pages as $page)
                                        <option value="{{ $page->id }}" @php if($settings['posts_page']->setting_value == $page->id): echo 'selected'; endif; @endphp>{{ $page->post_title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @else
                            <div class="pad margin no-print">
                                <div class="callout callout-warning" style="margin-bottom: 0!important;">
                                    <h4><i class="fa fa-info-circle"></i> Warning:</h4>
                                    You have not created any pages yet, create a new one <a href="{{ base_url('ci-admin/pages/create') }}">here</a>
                                </div>
                            </div> 
                        @endif

                    </div>

                </div>
                <div class="box-footer text-right">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-refresh"></i> Update
                    </button>
                </div>           
            </div>        
        </div>
    </div>
</div>
@endsection