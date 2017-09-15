@extends('layouts.app')

@section('breadcrumb')
<section class="content-header">
    <h1>
        Media
        <small>All</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ base_url('dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Media</li>
    </ol>
</section>
@endsection

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">All Media</h3>
        <span class="pull-right">
            <form action="{{ base_url('ci-admin/media/upload') }}" method="post" role="form" enctype="multipart/form-data">
                <input type="file" name="user_file" style="display: inline-block" />
                <button type="submit" class="btn btn-primary"><i class="fa fa-upload" style="display: inline-block;"></i> Upload</a>
            </form>
        </span>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="col-md-12">
            @if(count($files) > 0)

                @foreach($files as $file)
                    <div class="col-md-4">
                        <div class="box box-default box-solid">
                            <div class="box-header with-border text-wrap">
                                <h5>{{ $file }}</h4>
                            </div>
                            <div class="box-body">
                                <a href="{{ base_url('assets/media/' . $file) }}" class="btn btn-primary" target="_blank">View</a>
                                <form action="{{ base_url('ci-admin/media/delete') }}" method="post" role="form" class="inline">
                                    <input type="hidden" name="file" value="{{ $file }}" />
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            @else
                <div class="text-center">
                    <h3>You have not uploaded any files yet</h3>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection